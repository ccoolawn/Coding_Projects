<?php session_start();

 if(isset($_SESSION['errors']))
{
      foreach ((array) $_SESSION['errors'] as $error)
      {
          echo "<p>". $error ."</p>";
      }
      $_SESSION = array();
}

if(isset($_SESSION['success']))
{
    foreach ((array) $_SESSION['success'] as $success)
    {
       echo "<p>" . $success . "</p>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form class="form" action="process.php" method="post">
        <h2>Email: </h2><input name="email" class="elements" type="text"><br>
        <h2>First Name: </h2><input name="first_name" class="elements" type="text"><br>
        <h2>Last Name: </h2><input name="last_name" class="elements" type="text"><br>
        <h2>Password: </h2><input name="password" class="elements" type="password"><br>
        <h2>Confirm Password: </h2><input name="confirm_password" class="elements" type="password"><br>
        <h2>Date Of Birth: </h2><input name="birth_date" class="elements" type="date"><br>
        <input type = "hidden" name="action" value="register">
        <input class="btn" type="submit" value="Login!"><br>
    </form>
</body>
</html>