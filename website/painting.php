<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="asset/css/style.css?token=<?php echo time(); ?>">
  <title>Painting course</title>
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
  <img class="img-fluid" src="asset/image/paint.jpg"  alt="">
  <div class="centered">
    <h1 style="color:white; font-weight:800;"> Painting</h1> <br>
    <pre style="font-family: 'Nunito'; font-size: 16px; font-weight: 200; color:white;">Painting is the act or process of using paint. The paint can create an artwork known as a painting,
      or it can be used more practically as a protective coating or form of decoration. Paintings are a form of visual art that captures the expression
      of ideas and emotions on a two-dimensional surface.</pre>


  <button type="submit" id="reg_button" onclick="window.open('registration.php','_blank')" class="reg_button" >To enroll yourself now!</button>

</div>
</div>
</div>


<!-- footer -->
<footer class="footer-distributed">
<?php include('asset/fixedElement/footer.html') ?>


</footer>

</body>

</html>
