?php
session_start();
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
