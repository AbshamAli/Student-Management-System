<?php
  require("config.php");


  if(isset($_GET['action']))
  {
//login process
      if($_GET['action']=="login")
      {

          $email = $_POST["email"];
          $password = $_POST["password"];

          $sql = "SELECT * FROM login WHERE email ='$email' and pass ='$password'";
          $result = mysqli_query($link , $sql);

          $row = mysqli_fetch_array($result);
          $count = mysqli_num_rows($result);


          if($count == 1)
          {
              $_SESSION['id'] = $row['id'];
              echo "<script>window.location='dashboard.php'</script>";
              // closing connection
              mysqli_close($link);
          }
          else{
           $error = "Wrong Username and Password";
           echo "<script type='text/javascript'>alert('$error');</script>";
           echo "<script>window.location='login.php'</script>";
          }


      }

      //log-out process

      if($_GET['action']=="logout")
      {
        $_SESSION[id]=null;
          session_destroy();
          echo "<script>window.location='login.php'</script>";

      }

  }
?>
