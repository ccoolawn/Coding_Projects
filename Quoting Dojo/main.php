<?php  session_start();
date_default_timezone_set('America/Los_Angeles');
require("connection.php");
$query = "SELECT * FROM quotes LEFT JOIN users ON quotes.user_id = users.id ";
$quotes = fetch_all($query);

// var_dump($quotes);




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
            <h1>Here are the awesome quotes!</h1>
            <div class="actbox">
                <?php

                    foreach ($quotes as $key => $quote)
                    {
                        echo ' " ' .$quote['content']. ' " <br>';
                        $date = strtotime($quote['created_at']);
                        echo " - " .$quote['name']. " at ".date('g:i a F j Y', $date). "<br><hr>";
                    }

                    // if(isset($_SESSION['comments']))
                    // {
                    //     foreach (array_reverse($_SESSION['comments'])as $comment)
                    //     {
                    //         echo ' " ' .$comment. ' " <br>';
                    //     }

                    //     if(isset($_SESSION['username']))
                    //     {
                    //         foreach (array_reverse($_SESSION['username'])as $name)
                    //         {
                    //             echo " - " .$name. " at" .date(" g:i a F j Y "). "<br><hr>";
                    //         }
                    //     }
                    // }


                ?>
            </div>
        </div>
    </body>
</html>