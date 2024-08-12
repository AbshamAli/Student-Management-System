<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="asset/css/style.css?token=<?php echo time(); ?>">
  <title>Drawing course</title>
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
  <img class="img-fluid" src="asset/image/drawing.jpg"  alt="">
  <div class="centered">
    <h1 style="color:black; font-weight:700;">     Drawing</h1> <br>
    <pre style="font-family: 'Nunito'; font-size: 16px; color:black;">   The drawing course introduces students to
           a variety of media including pencil sketching, charcoal drawing, color pencils and mix-media.
           Students are encouraged to articulate their visual and verbal ideas.</pre>


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
