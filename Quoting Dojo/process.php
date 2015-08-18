<?php  session_start();
require("connection.php");

 // SUBMIT $_POST['username'] & $_POST['comments'] into DB
if (isset($_POST['username']))
{
    $insertName = $_POST['username'];
}

if (isset($_POST['comments']))
{
    $insertComment = $_POST['comments'];
}
// var_dump($_POST);

$query = "INSERT INTO users (name, created_at, updated_at) VALUES ('$insertName', NOW(), NOW())";
$userid = run_mysql_query($query);

$query = "INSERT INTO quotes (content, created_at, updated_at, user_id) VALUES ('$insertComment', NOW(), NOW(), '$userid')";
$result = run_mysql_query($query);

// echo($query);
// die();
// Sets $_POST['username'] & $_POST['comments'] into $_SESSION

// if (!isset($_SESSION['username'])){
//     $_SESSION['username'] = array();
// }

// $_SESSION['username'] [ ] = $_POST['username'];

// if (!isset($_SESSION['comments'])){
//     $_SESSION['comments'] = array();
// }

// $_SESSION['comments'] [ ] = $_POST['comments'];

header('Location: main.php');
exit;

?>

