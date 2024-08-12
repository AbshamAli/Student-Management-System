<?php

require('config/config.php');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,'enroll_courses');

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



  if(isset($_POST["submit"])){
  // Fetching variables of the form which travels in URL
  $name = $_POST["name"];
  $email = $_POST["email"];
  $gender = $_POST["gender"];
  $address = $_POST["address"];
  $number = $_POST["contactnumber"];
  $dateBirth = $_POST["birthdate"];
  $cou = $_POST["select_course"];


    if($name != "" && $email !=""&& $gender !=""&& $address !=""&& $number !=""&& $dateBirth!="" && $cou != "" )
    {

      $sql1 = "SELECT * FROM courses WHERE phone='$number'";
     $query = mysqli_query($link, $sql1);
    if (mysqli_num_rows($query) > 0 )
    {
      $error = "YOU ARE ALREADY REGISTERED";
      mysqli_close($link);
    } else {

      // Prepare an insert statement
       $sql = "INSERT INTO courses (name,email,phone,birth,gender,address,course) VALUES('$name', '$email', '$number', '$dateBirth','$gender','$address','$cou')";
       if (mysqli_query($link , $sql)) {
         //redirect function
         header("Location: index.php");
         // Close connection
         mysqli_close($link);
       } else {
         echo "Error:" . mysqli_error($link);
       }

    }







      }
      else{


            }
  }





?>
