<?php  session_start();
require("connection.php");




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quoting Dojo</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    <body class="front">
        <div class="quotemain">
            <h1>Welcome to Quoting Dojo</h1>
            <form class="form" action="process.php" method="post">
                <h4>Your name:</h4><input type="text" name="username"><br>
                <h4>Your quote:</h4><textarea class="comments" type="text" name="comments"></textarea><br>
                <input type="hidden" name="action" value="register">
                <input class="btn" type="submit" value="Add my quote!">
                <input class="btn" type="submit" action="main.php" value="Skip to quotes!">
            </form>
        </div>
    </body>
</html>