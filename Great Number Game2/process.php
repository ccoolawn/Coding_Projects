<?php
session_start();

// var_dump($_POST);




if(isset($_POST['user_num']))
{
    $_SESSION['user_num'] = $_POST['user_num'];
    switch ($_POST['user_num'])
    {
       case ($_SESSION['radnum'] > ($_POST['user_num'])):
                $_SESSION['message'] = '<div class="wrong"><h3>In the case of DeQuan, You Were On The Downlow, So You Are Not The Father!!!!!</h3></div>';
        break;

        case($_SESSION['radnum'] < ($_POST['user_num'])):
                $_SESSION['message'] = '<div class="wrong"><h3>In the case of DeQuan, You Got Too High!!, So You Are Not The Father!!!!!</h3></div>';
        break;

        default:
                    $_SESSION['message'] = '<div class="right"><h3>Awe yeah! You are the father!!</h3><br></div>';
        break;
    }
}
if (isset($_POST['reset']) && $_POST['reset'] == 'true'){


    session_destroy();
}

header('Location: index.php');


?>