<?php
//error_reporting(E_All);
//ini_set('display_errors' 1);

session_start(); //start session

if(session_status() == PHP_SESSION_ACTIVE){ //if session is active
        if(isset($_POST['username']) && trim($_POST['username']) != "") //checking username not blank
        {
            {
                $_SESSION['username'] = $_POST['username'];//post username
                $_SESSION['logged_in'] = true; //if the key exists then other pages use for login
                $valid_login = true;
             }
        }
        elseif (trim($_POST['username']) != "") //warn if username is blank
        {
            $login_str = '<a href="login.php?logout=true">Click here to return to the login screen.</a>'; //link to go back
            echo "A username must be entered. ".$login_str;  //usernmae not entered 
            $valid_login = false; //setting to false login
        }
        elseif(isset($_SESSION['username']))
        {
            $valid_login = true; //if username valid then login set to true
        }
        else
        {
            $filepath = explode('/', $_SERVER['PHP_SELF'], -1); //split string by a string
            $filepath = implode('/', $filepath);
            $redirect = "http://".$_SERVER['HTTP_HOST'].$filepath;
            header("Location: {$redirect}/login.php", true); //redirects if timed out
            die();
        }
        if (!isset($_SESSION['visits'])) //setting number of visits
        {
            $_SESSION['visits'] = 0;
        }
        //displaying name and inc visits if valid login
        if($valid_login == true)
        {
            $_SESSION['visits']++; //inc
            $visits = $_SESSION['visits']; //visits
            $username = $_SESSION['username']; //username
            $logout_str = '<a href="login.php?logout=true">Click here to logout</a>';
            echo "Hello $username you have visited this page $visits times before. ".$logout_str;
            echo "<br><br>";
            $content2 = '<a href="content2.php">Click here to visit content2.php</a>'; //link to content 2
            echo $content2;
        }
    }
    //reference http://php.net/manual/en/function.explode.php
?>
