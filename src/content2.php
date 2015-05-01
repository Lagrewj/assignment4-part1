<?php
session_start(); //starting session
if(session_status() == PHP_SESSION_ACTIVE){ //checking if session is active
    if(isset($_SESSION['logged_in'])){   
        if($_SESSION['logged_in'] == true){  
                $visits = $_SESSION['visits'];
                $username = $_SESSION['username'];
                echo "You are logged in as $username and you have visited $visits times. ";
                $content1 = '<a href="content1.php">Click here to visit content1.php</a>';
                echo $content1;
        }
    }
        else{ //redirect to login page to login
            $filepath = explode('/', $_SERVER['PHP_SELF'], -1);
            $filepath = implode('/', $filepath);
            $redirect = "http://".$_SERVER['HTTP_HOST'].$filepath;
            header("Location: {$redirect}/login.php", true);
            die();
		}
}
?>
