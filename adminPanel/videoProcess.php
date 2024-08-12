<?php

require ('../website/config/config.php');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,'youtube_video');

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}else {

  $url = $_POST['link'];


  // Attempt update query execution
  $sql = "UPDATE video SET url = '$url' WHERE id = 1";

    if(mysqli_query($link, $sql)){
      echo "<script>window.location='video.php'</script>";

    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // Close connection
    mysqli_close($link);


}







?>
