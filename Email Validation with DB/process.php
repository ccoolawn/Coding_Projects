<?php session_start();

 require("new-connection.php");

 // SUBMIT $_POST['email'] into DB
if (isset($_POST['email']))
{
    $insertEmail = $_POST['email'];
}

$query= "INSERT INTO users(email_address,created_at,updated_at) VALUES('$insertEmail', NOW(), NOW())";
$result = run_mysql_query($query);



if(isset($_POST['action']) && $_POST['action'] == 'register')
{
    $errors = array();
}

// Sets $_POST['email'] into $_SESSION
if (!isset($_SESSION['email'])){
    $_SESSION['email'] = array();
}

$_SESSION['email'] [ ] = $_POST['email'];

    if(empty($_POST['email']))
    {
        $errors [] = "Email is not valid!";
    }
    else
    {
        $message = "<div class='sucbox'><h2>The email address you entered (<u>" . $_POST['email'] ."</u>) is a VALID email  address!  Thank you!</h2></div>";
        $_SESSION['activities'] [ ] = $message;
    }

    if(count($errors) > 0)
    {
        $_SESSION['errors'] = $errors;
         header('Location: index.php');
         exit;
    }
    else
    {
        header('Location: success.php');
        exit;
    }


?>