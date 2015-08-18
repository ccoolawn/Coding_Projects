<?php session_start();
date_default_timezone_set('America/Los_Angeles');

require("new-connection.php");

// var_dump($_POST['email']);
// die("we're here");


if (!isset($_SESSION['activities'])){
    $_SESSION['activities'] = array();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Success</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="front">
    <?php

            if(isset($_SESSION['activities']))
            {
                foreach (array_reverse($_SESSION['activities'])as $activity)
                {
                    echo $activity;
                }
            }

        ?>

    <div class='actbox'>
        <h1><u>Email Adresses Entered:</u></h1>
        <div class="scroll">
            <?php

                if(isset($_SESSION['email']))
                {
                    foreach (array_reverse($_SESSION['email']) as $email)
                    {
                        echo $email .date(" (F j Y g:i a) "). "<br>";
                    }

                }

            ?>
        </div>
    </div>

</body>
</html>