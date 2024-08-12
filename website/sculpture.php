<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="asset/css/style.css?token=<?php echo time(); ?>">
  <title>Sculpture course</title>
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
  <img class="img-fluid" src="asset/image/sulpture.jpg"  alt="">
  <div class="centered">
    <h1 style="color:black; font-weight:700;">  Sculpture</h1> <br>
    <pre style="font-family: 'Nunito'; font-size: 16px;">Casting involves making a mould and then pouring
      a liquid material, such as molten metal, plastic, rubber or fibreglass into the mould.
       A cast is a form made by this process. Many sculptures are produced by the artist modelling
        a form (normally in clay, wax or plaster). This is then used to create a mould to cast from.
        A mould can be cast more than once, allowing artists to create editions of an artwork.</pre>


  <button type="submit" onclick="window.open('registration.php','_blank')"class="reg_button" >To enroll yourself now!</button>


</div>
</div>
</div>


<!-- footer -->
<footer class="footer-distributed">
<?php include('asset/fixedElement/footer.html') ?>


</footer>

</body>

</html>
