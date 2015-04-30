<?php
header('Contents-Type: text/plain');
//session_start function will destroy session and redirect if necessary 
session_start();
  $_SESSION = array();
  session_destroy();
  $filePath = explode('/', $_SERVER['PHP_SELF'], -1);
  $filePath = implode('/', $filePath);
  $redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
  header("Location: {$redirect}/login.php", true);
  die();
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to CS290 Assignment 4</title>
  </head>
  <body>
      <form> action="content1.php method="POST">
      <label for="username">Username</label>
      <input type="text" name="username" id="username" /><br/>
      <input type="submit" value="Login"/>
      </form>
  </body>
  
</html>
