<?php  session_start();

$_SESSION['name'] = "Bobbie";
$_SESSION['occupation'] = "Roofer"

setcookie('foo', 'bar', time() + 86400 * 30, '/');

?>
<html>
<head>
    <title>cookies & session</title>
</head>
<body>
    <h1>Login Page</h1>
</body>
</html>