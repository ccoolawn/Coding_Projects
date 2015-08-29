<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Model {

          public function addregistration($post){
              // set validations
              $this->form_validation->set_rules('first_name','First Name','trim|required');
              $this->form_validation->set_rules('last_name','Last Name','trim|required');
              $this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[users.email]');
              $this->form_validation->set_rules('password','Password','trim|required|min_length[8]');
              $this->form_validation->set_rules('password_confirmation','Password Confirmation','trim|required|matches[password]');
              $this->form_validation->set_rules('birthday','Birthday','trim|required');
              // run validations
              if($this->form_validation->run() === FALSE)
              {   
                  // had errors
                  $this->session->set_flashdata('registration_errors',validation_errors());
              }
              else
              {
                  // no errors
                  $query = "INSERT INTO users (first_name, last_name, email, password, birthday,created_at, updated_at) VALUES(?,?,?,?,?,NOW(),NOW())";
                  $values = array($post['first_name'],$post['last_name'],$post['email'],$post['password'],$post['birthday']);
                  $this->db->query($query, $values);
                  $this->session->set_flashdata('success', "Thanks for registering! Please login.");
              }
        }

         public function login_users($post){
              $this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[users.email]');
              $this->form_validation->set_rules('password','Password','trim|required|min_length[8]');

               if($this->form_validation->run() === FALSE)
              {   
                  // had errors
                  $this->session->set_flashdata('login_errors',validation_errors());
              }
              else
              {
              $query = "SELECT first_name, last_name, email, id FROM users WHERE email = ? AND password =?";
              $values = array($post['email'], $post['password']);
              $user = $this->db->query($query, $values)->row_array();
              // return $this->db->query($query)->result_array();
              }
       }

         

         // public function get_course($id){
         //     $query = "SELECT *FROM courses WHERE id = ?";
         //     $values = $id;
         //     return $this->db->query($query,$values)->row_array();
         // }

}