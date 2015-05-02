<?php
//error_reporting(E_All);
//ini_set('display_errors' 1);

session_start(); // Start session

if(session_status() == PHP_SESSION_ACTIVE){
        if(isset($_POST['username']) && trim($_POST['username']) != "")
        {
            {
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['logged_in'] = true; // If this key exists, other pages can use it to test for login state
                $valid_login = true;
             }
        }
        elseif (trim($_POST['username']) != "") //warn if username is blank
        {
            $login_str = '<a href="login.php?logout=true">Click here to return to the login screen.</a>';
            echo "A username must be entered. ".$login_str;
            $valid_login = false;
        }
        elseif(isset($_SESSION['username']))
        {
            $valid_login = true;
        }
        else
        {
            $filepath = explode('/', $_SERVER['PHP_SELF'], -1);
            $filepath = implode('/', $filepath);
            $redirect = "http://".$_SERVER['HTTP_HOST'].$filepath;
            header("Location: {$redirect}/login.php", true);
            die();
        }
        if (!isset($_SESSION['visits'])) //setting number of visits
        {
            $_SESSION['visits'] = 0;
        }
        //displaying name and inc visits if valid login
        if($valid_login == true)
        {
            $_SESSION['visits']++;
            $visits = $_SESSION['visits'];
            $username = $_SESSION['username'];
            $logout_str = '<a href="login.php?logout=true">Click here to logout</a>';
            echo "Hello $username you have visited this page $visits times before. ".$logout_str;
            echo "<br><br>";
            $content2 = '<a href="content2.php">Click here to visit content2.php</a>';
            echo $content2;
        }
    }
?>
