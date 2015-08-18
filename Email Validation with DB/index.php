<?php session_start();





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email validation</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="front">
    <form class="form" action="process.php" method="post">
        <h2>Please enter your email :</h2>
        <input type="email" name="email">
        <?php  if(isset($_SESSION['errors']))
                    {
                          foreach ((array) $_SESSION['errors'] as $error)
                          {
                              echo "<p>". $error ."</p>";
                          }
                          $_SESSION = array();
                    }
?>
        <input type="hidden" name="action" value="register"><br>
        <input class="btn" type="submit" value="submit">
    </form>
</body>
</html>