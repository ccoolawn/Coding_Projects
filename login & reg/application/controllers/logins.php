<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logins extends CI_Controller {

	public function __construct(){
          	parent ::__construct();
          	$this->output->enable_profiler(TRUE);
          	}

	public function index(){
	// $users = $this->user->get_users();
	$this->load->view('index');
	}

	public function login_user(){
	$user = $this->login->login_users($this->input->post());
	$this->session->set_userdata('user', $user);
	redirect("/");
	
	// -check against the db
	}

	public function register(){
	// display errors		
    	$this->login->addregistration($this->input->post());
    	redirect("/");
	}
	

	public function logoff(){
	$this->session->sess_destroy();
	redirect("/");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */