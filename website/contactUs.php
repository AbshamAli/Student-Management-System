<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

  <title>Contact Us</title>
  <link rel="stylesheet" href="asset/css/style.css?token=<?php echo time(); ?>">
  <?php include('asset/fixedElement/meta.html') ?>
  <link rel="stylesheet" href="asset/css/contactStyle.css">
</head>

<body>

  <header>

  <!-- logo image -->
    <a href="" class="logo"> <img src="asset/image/img-logo.png" class="img_logo" alt=""> </a>

<?php include ('asset/fixedElement/navigationbar.html'); ?>


      </header>




      <?php

        require('config/config.php');
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,'contactUs');
      // Check connection
      if($link === false){
          die("ERROR: Could not connect." . mysqli_connect_error());
      }

          if(isset($_POST["submit"])){


            $name = $_POST["name"];
            $email = $_POST["email"];
            $message = $_POST["message"];

            $sql1 = "SELECT * FROM contact WHERE email='$email'";
           $query = mysqli_query($link, $sql1);
          if (mysqli_num_rows($query) > 0 )
          {
            $success = "Your Requested Query is in process, BE PATIENT";
            mysqli_close($link);
          } else {

            $sql = "INSERT INTO contact (name,email,message) VALUES('$name', '$email', '$message')";

                               if (mysqli_query($link, $sql)) {
                               $success = "WE WILL BE CONTACTING YOU SOON";
                                       // Close connection
                                mysqli_close($link);
                              } else {

                               }

          }



          }

    ?>








    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>We are bringing the World's raddest Art to your feed. From stunning photographs to amazing art works. It's our chance to promote a community making a world more creative place</p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>478-D peoples colony 1 <br> D-Ground Faisalabad, PK</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>+92-335-0773732</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>info@theartistloungeofficial.com</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form method="POST">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="name" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="email" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea name="message" maxlength="100" id="" required="required"></textarea>
                        <span>Type your Message</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="submit" value="Send">
                        <br>
                        <?php echo $success;?>
                        
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="footer-distributed">
    <?php include('asset/fixedElement/footer.html') ?>


    </footer>
</body>

</html>
