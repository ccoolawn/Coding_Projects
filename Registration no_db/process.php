<?php session_start();

// session_destroy();

// var_dump($_POST);

// var_dump($_POST);
if (isset($_POST['action']) && $_POST['action'] == 'register')
{
        $errors = array();

        if (empty($_POST['email']))
            {
                $errors[] = "You must enter your email";
            }

        if (empty($_POST['first_name']))
            {
                $errors[] = "You must enter a first name !";
            }

        if (empty($_POST['last_name']))
            {
                 $errors[] = "You must enter a last name !";
            }

        if (empty($_POST['password']))
            {
                  $errors[] = "You must enter a valid password !";
            }

        if (empty($_POST['usern]))
            {
                  $errors[] = "You must enter a valid birth date !";
            }

        if(count($errors) > 0)
            {
                $_SESSION['errors'] = $errors;

            } else {
                $_SESSION['success'] = "Thanks for submitting your information.";
            }
}

            header('Location: index.php');
            exit;
?>