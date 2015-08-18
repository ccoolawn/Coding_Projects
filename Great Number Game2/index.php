<?php
session_start();
if(!isset($_SESSION['message']))
{
    $_SESSION['message'] = ' ';
}

if(!isset($_SESSION['radnum']))
{
    $_SESSION['radnum'] = rand(1,100);
}
// $_SESSION = array();
var_dump($_SESSION);
if(!isset($_SESSION['user_num']))
    $_SESSION['user_num'] = 0;
// unset($_SESSION['message']);

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
    <style type="text/css">

    </style>
    </head>
    <body>
        <div class='container'>
                <h1>Welcome to the Great Number Game!</h1>
                <h4>I am thinking of a number between 1 and 100 </h4>
                <h4>Take a guess!</h4>

<?php if (!isset($_SESSION['message'])){ ?>

            <form action='process.php' method='post'>
                <input name='user_num' type='text'><br>
                <input class ='btn' type='submit' value='submit'>
            </form>

        <?php } else {
            if ($_SESSION['radnum'] == $_SESSION['user_num']){

                ?>
            <form action='process.php' method='post'>
                <input name='reset' type='hidden' value='true'><br>
                <input class ='btn' type='submit' value='Play Again'>
            </form>

            <?php } else { ?>
               <form action='process.php' method='post'>
                <input name='user_num' type='text'><br>
                <input class ='btn' type='submit' value='submit'>
            </form>
            <?php }
            }
             ?>

                <?php echo $_SESSION['message'];?>
        </div>
    </body>
</html>
