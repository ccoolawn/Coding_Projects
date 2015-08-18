<?php  session_start();


unset($_SESSION['name']) // This will only remove 'name' and its value from $_SESSION
$_SESSION = array(); // Removes all variables currently set in $_SESSION.
session_destroy(); // Destroys all the data associated with the current session.

?>

<h1>Profile Page</h1>