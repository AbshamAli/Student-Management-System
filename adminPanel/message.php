<!DOCTYPE html>
<html lang="en">
  <head>
    <title>APPLICANT</title>

    <link type="text/css" rel="stylesheet" href="asset/css/admin.css?token <?php echo time() ?>" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
  </head>
  <body>

    <section id="sidebar">
      <div class="sidebar-brand">
        <h2> <span>ARTIST LOUNGE</span></h2>
      </div>
      <div class="sidebar-menu">
        <ul>
          <li><a href="dashboard.php"> <span>Dashboard</span></a></li>
            <li><a href="video.php"> <span>Video</span></a></li>
              <li><a href="enrolledApplicant.php"> <span>Applicants</span></a></li>
              <li><a href="message.php"> <span>Queries</span></a></li>
          <li><a href="process.php?action=logout"><span>Logout</span></a></li>
        </ul>
      </div>
    </section>

    <br>
    <?php

    require ('../website/config/config.php');

    /* Attempt to connect to MySQL database */
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,'contactUs');

    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

      $sql = "SELECT id ,name, email, message FROM contact";
      //fire query
      $result = mysqli_query($link, $sql);
      if(mysqli_num_rows($result) > 0)
        {
          echo '<table> <tr> <th> id </th> <th> Name </th> <th> Email </th> <th> message </th>  </tr>';
          while($row = mysqli_fetch_assoc($result)){
        // to output mysql data in HTML table format
          echo '<tr > <td>' . $row["id"] . '</td>
          <td>' . $row["name"] . '</td>
          <td>' . $row["email"] . '</td>
          <td>' . $row["message"] . '</td>
           </tr>';
          }
          echo '</table>';
       }
      else
        {
           ?>
           <table>
             <tr>
               <td><?php   echo "0 results"; ?></td>
             </tr>
           </table>

          <?php
        }
      // closing connection
      mysqli_close($link);


       ?>



  </body>
</html>
