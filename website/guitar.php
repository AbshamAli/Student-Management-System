<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="asset/css/style.css?token=<?php echo time(); ?>">
  <title>Guitar course</title>
  <?php include('asset/fixedElement/meta.html') ?>
</head>

<body>

  <header>

    <!-- logo image -->
    <a href="" class="logo"> <img src="asset/image/img-logo.png" class="img_logo" alt=""> </a>

    <?php include ('asset/fixedElement/navigationbar.html'); ?>


  </header>
<!-- background -->
  <div class="main_div">

  <div class="container-fluid" style="padding-right:0; padding-left:0;">
  <img class="img-fluid" src="asset/image/guitar.jpg"  alt="">
  <div class="centered">
    <h1 style="color:white; font-weight:700;">Guitar</h1> <br>
    <pre style="font-family: 'Nunito'; font-size: 16px;">This course will enable participants to gain basic
       understanding of what the guitar is as an instrument and they will learn how to play the guitar at
       a beginner/intermediate level (depending on previous knowledge and skills of the participants).</pre>


  <button type="submit" onclick="window.open('registration.php','_blank')" class="reg_button" >To enroll yourself now!</button>


</div>
</div>
</div>


<!-- footer -->
<footer class="footer-distributed">
<?php include('asset/fixedElement/footer.html') ?>


</footer>

</body>

</html>
