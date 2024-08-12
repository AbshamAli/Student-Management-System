<?php

require("config.php");


if(isset($_SESSION["id"])){
    echo "<script>window.location='dashboard.php'</script>";
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form Design</title>
      <link rel="stylesheet" href="asset/css/login.css">
   </head>
   <body>

      <div class="wrapper">
         <div class="title">
            Login Form
         </div>
         <form action="process.php?action=login" method="POST">
            <div class="field">
               <input type="email" name="email" required>
               <label>Email Address</label>
            </div>
            <div class="field">
               <input type="password" name="password" maxlength="8" required>
               <label>Password</label>
            </div>

            <div class="field">
               <input type="submit" value="Login">
            </div>

         </form>
      </div>
   </body>
</html>
