<?php

// var_dump($_POST);
// echo session_id();
?>



<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Survey</title>
        <meta name="description" content="How Advanced PHP Works">
        <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript">
    </script>
    </head>
    <body>
        <div class='container'>
            <div class = 'form'>
                <p>Your name is: <?php echo $_POST['your_name']; ?></p>
                <p>Dojo Location: <?php echo $_POST['location']; ?></p>
                <p>Favorite Language: <?php echo $_POST['language']; ?></p>
                <p>Coment: <?php echo $_POST['comment']; ?></p>
            </div>
        </div>
    </body>
</html>