<?php session_start( );
date_default_timezone_set('America/Los_Angeles');

if (!isset($_SESSION['activities'])){
    $_SESSION['activities'] = array();
}

if(isset($_POST["building"]) && ($_POST["building"] == "farm"))
{
    $gold = rand(10,20);
    $_SESSION['total_benjis'] += $gold;
    $message = "<p>You rolled up on a farm and jacked ".$gold." Benjamin's.".date("(F j Y g:i a)")."</p>";
    $_SESSION['activities'] [ ] = $message;
}

if(isset($_POST["building"]) && ($_POST["building"] == "cave"))
{
    $gold = rand(5,10);
    $_SESSION['total_benjis'] += $gold;
    $message = "<p>You rolled up on a cave and straight Indiana Jonesed ".$gold." Benjamin's.".date("(F j Y g:i a)")."</p>";
    $_SESSION['activities'] [ ] = $message;
}

if(isset($_POST["building"]) && ($_POST["building"] == "house"))
{
    $gold = rand(2,5);
    $_SESSION['total_benjis'] += $gold;
    $message = "<p>You rolled up on a house and jacked ".$gold." Benjamin's.".date("(F j Y g:i a)")."<p>";
    $_SESSION['activities'] [ ] = $message;
}

if(isset($_POST["building"]) && ($_POST["building"] == "casino")){
    $chance = rand(1,10);
    if ($chance <= 7){
    $gold = rand(0,-50);
    $_SESSION['total_benjis'] += $gold;
    $message = "<p>You rolled up on a casino and Vinny broke yo knee caps. You lost ".$gold." Benjamin's.".date("(F j Y g:i a)")."<p>";
    $_SESSION['activities'] [ ] = $message;
}

else{
    $gold = rand(0,550);
    $_SESSION['total_benjis'] += $gold;
    $message = "<p>You rolled up on a casino and bankrolled ".$gold." Benjamin's.".date("(F j Y g:i a)")."<p>";
    $_SESSION['activities'] [ ] = $message;
}
}


if (isset($_POST['reset']) && $_POST['reset'] == 'true'){


    session_destroy();
}

header('Location: index.php');
// var_dump($_SESSION);

?>