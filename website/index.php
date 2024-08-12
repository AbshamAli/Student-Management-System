<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<link rel="stylesheet" href="asset/css/style.css?token=<?php echo time(); ?>">
  <title>landing page</title>
  <?php include('asset/fixedElement/meta.html') ?>



</head>

<?php
    require('config/config.php');

    /* Attempt to connect to MySQL database */
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,'youtube_video');

    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

   ?>

<body>
  <header>

  <!-- logo image -->
    <a href="index.php" class="logo"> <img src="asset/image/img-logo.png" class="img_logo" alt=""> </a>

<?php include ('asset/fixedElement/navigationbar.html'); ?>


      </header>
<!-- Main Div -->
<div class="main_div">

<div class="container-fluid" style="padding-right:0; padding-left:0;">
<img class="img-fluid" src="asset/image/gallery.jpg"  alt="">
<div class="centered">
  <h1>The Artist Lounge</h1> <br>
  <pre style="font-family: 'Nunito'; font-size: 16px;">The Artist Lounge is considered as the pioneer in Faisalabad as we are exercising services
   in Art and Music provided with all mediums under one roof. Our team ensures to deliver
  its best because we aim to change the concept that art is not only a hobby, but also a
      passion that can lead to career options.</pre>
</div>
</div>
 <!-- Mission & Vision Div -->
<div class="mission_div">
<h3>Our Vision & Mission</h3>
<hr style="width:230px; margin: auto; opacity:1;">

<?php


              $sql = "SELECT url FROM video";
              //fire query
              $result = mysqli_query($link, $sql);

              if(mysqli_num_rows($result) > 0)
                {

                  while($row = mysqli_fetch_assoc($result))
                    {
                      $video_link = $row["url"];

                    }


               }
              else
                {
                  echo '<script>alert("No Result")</script>';
                }
              // closing connection
              mysqli_close($link);

     ?>


<div class="table-responsive">
  <table class="table" >
  <tr>
    <td style="border-style: solid;
      border-width: 0;">
    <iframe width="600px" height="300px" style="padding-left:50px; padding-top:20px;"
  src=<?php echo "$video_link" ?>>
  </iframe>

  </td >

  <td style="border-style: solid;
    border-width: 0;">

    <div class="vision-div">

      <div class="icon-">
      <a href="website/login.php"style="width:40px;height:40px;"><i class="fa-sharp fa-solid fa-eye-low-vision" style="color:#68A4C4; font-size: 20px;"></i></a>


      </div>

      <div class="vision-text">


              <h4> <a href="#" style="text-decoration:none;color:#181D31;">VISION</a> </h4>

              <p>The Artist Lounge is the most leading Art institute in the city of Faisalabad. Our courses based on
                all techniques of Art that provides a major help in giving life to the imagination.The education of Art
                helps an Artist to connect with his own culture and with the world. The most beautiful bond is between a
                 mentor and student and we make sure this collaborative engagement maintains the
                 aspects of learning more.</p>


      </div>



    </div>


<div class="Mission_icon">
  <div class="vision-div">

    <div class="icon-">
    <a href="#"style="width:40px;height:40px;"><i class="fa-sharp fa-solid fa-bullseye" style="color:#68A4C4; font-size: 20px;"></i></a>


    </div>

    <div class="vision-text">


            <h4> <a href="#" style="text-decoration:none;color:#181D31;">MISSION</a> </h4>

            <p>Our mission is to provide people with platform where they can make their dreams come true.
              People often mislead Art just a hobby we are breaking the stereotypes that one can make
              a successful future out of it.</p>


    </div>



  </div>


</div>

  </td>
  </tr>
  </table>
</div>

</div>

<!-- Certified programs -->

<div class="certified_program">
  <h3 style="padding-top:23px;">Certified Programs</h3>
  <hr style="width:230px; margin: auto; opacity:1;">

  <div class="owl-carousel" style="margin-top:30px;" >

    <div class="pencil_card">
      <img src="asset/iconOwl/Drawing.jpeg" alt="" width="100px" height="100px" class="pencil_image">
      <h6>Drawing</h6>
      <a href="drawing.php" style="text-decoration: none;"> Enroll Now </a>
    </div>
    <div class="guitar_card">

      <img src="asset/iconOwl/Guitar icon.jpeg" alt="" width="100px" height="100px" class="pencil_image">
    <h6>Guitar</h6>
    <a href="guitar.php" style="text-decoration: none;"> Enroll Now </a>


     </div>
    <div class="camera_card">
      <img src="asset/iconOwl/Camera icon.jpeg" alt="" width="100px" height="100px" class="pencil_image">
      <h6>Photography</h6>
      <a href="photography.php" style="text-decoration: none;"> Enroll Now </a>

    </div>
    <div class="potrait_card">
      <img src="asset/iconOwl/Portrait icon.jpeg" alt="" width="100px" height="100px" class="pencil_image">
      <h6>Potrait Sketching</h6>
      <a href="sculpture.php" style="text-decoration: none;"> Enroll Now </a>
     </div>


    <div class="textile_card">
      <img src="asset/iconOwl/Textile and Fashion design.jpeg" alt="" width="100px" height="100px" class="pencil_image">
      <h6>Fashion design</h6>
      <a href="fashion.php" style="text-decoration: none;"> Enroll Now </a>

     </div>


    <div class="painting_card">
      <img src="asset/iconOwl/painting icon.jpeg" alt="" width="100px" height="100px" class="paintbrush_image">
      <h6>Painting</h6>
      <a href="painting.php" style="text-decoration: none;"> Enroll Now </a>

     </div>

     <div class="sculpture_card">
       <img src="asset/iconOwl/entry test prep.jpeg" alt="" width="100px" height="100px" class="paintbrush_image">
       <h6>sculpture</h6>
       <a href="sculpture.php" style="text-decoration: none;"> Enroll Now </a>

      </div>
  </div>

</div>





<!-- ALERT & NEWS -->
<div class="alerts">
  <h3 style="padding-top:23px;">Latest News & Updates</h3>
  <hr style="width:230px; margin: auto; opacity:1;">

<div class="brochures">

  <div class="Photography_alert">
    <img src="asset/brochure/photography.jpeg" alt="" style="width: 300px; height: 400px;">
  </div>

<div class="jamming_alert">
  <img src="asset/brochure/jamming.jpeg" alt="" style="width: 300px; height: 400px;">
</div>

<div class="women_alert">
  <img src="asset/brochure/womenday.jpeg" alt="" style="width: 300px; height: 400px;">
</div>
</div>


</div>

<!-- people -->


<div class="mission_div">
<h3>People of The Artist Lounge</h3>
<hr style="width:340px; margin: auto; opacity:1; margin-bottom:20px;">

<div class="table-responsive">
  <table class="table" >
  <tr>
    <td style="border-style: solid;
      border-width: 0;">

      <div class="vision-div">

        <div class="icon-">
        <a href="#"style="width:40px;height:40px;"><i class="fa-sharp fa-solid fa-eye-low-vision" style="color:#68A4C4; font-size: 20px;"></i></a>


        </div>

        <div class="vision-text">


                <h4> <a href="#" style="text-decoration:none;color:#181D31;">The Artist Lounge is my happy place</a> </h4>

                <p>

"Living in this society it is not easy to do what you really want to do, you have to
be a doctor, engineer, or a pilot. But I found this place where I can be myself,
that is why The Artist Lounge is my happy place"</p>

        </div>

      </div>


    <div class="Mission_icon">
    <div class="vision-div">

      <div class="icon-">
      <a href="#"style="width:40px;height:40px;"><i class="fa-sharp fa-solid fa-bullseye" style="color:#68A4C4; font-size: 20px;"></i></a>


      </div>

      <div class="vision-text">


              <h4> <a href="#" style="text-decoration:none;color:#181D31;">Why I need the Artist Lounge?</a> </h4>

              <p>"The only way to cope with Depression and Anxiety is to keep yourself busy."

One of the Students from The Artist Lounge shared her experience of why she wants to be a part of us.</p>


      </div>



    </div>


    </div>

    </td>

    <td style="border-style: solid;
      border-width: 0;">
    <iframe width="600px" height="300px" style="padding-left:50px; padding-top:20px; padding-right:40px;"
  src="https://www.youtube.com/embed/5kOhKif_H-E">
  </iframe>

  </td >


  </tr>
  </table>
</div>

</div>

</div>



<!-- Javascript for owl  -->



<!-- j query cdn-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- owl js file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" integrity="sha512-9CWGXFSJ+/X0LWzSRCZFsOPhSfm6jbnL+Mpqo0o8Ke2SYr8rCTqb4/wGm+9n13HtDE1NQpAEOrMecDZw4FXQGg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
      $(document).ready(function(){
        $(".owl-carousel").owlCarousel();
      });
    </script>


<!-- footer -->
<footer class="footer-distributed">
<?php include('asset/fixedElement/footer.html') ?>


</footer>


</body>

</html>
