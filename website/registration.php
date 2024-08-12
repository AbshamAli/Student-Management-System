<!DOCTYPE html>
<html lang="en">

<head>

  <title>Registration Form in HTML CSS</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="asset/css/style2.css?token= <?php echo time(); ?>" />
</head>

<body>

  <?php


  // define variables and set to empty values
  $nameErr = $emailErr = $genderErr = $addressErr = $numberErr = $dateBirthErr = "";
  $name = $email = $gender = $address =$number = $dateBirth = $course = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "*Name is required";
    } else {
      $name = test_input($_POST["name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "*Only letters and white space allowed";
      }
    }

    if (empty($_POST["email"])) {
      $emailErr = "*Email is required";
    } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "*Invalid email format";
      }
    }

    if (empty($_POST["contactnumber"])) {
      $numberErr = "*Phone Number is required";
    } else {
      $Number = test_input($_POST["contactnumber"]);
    }




        if (empty($_POST["birthdate"])) {
          $dateBirthErr = "*Date of Birth is required";
        } else {
          $dateBirth = test_input($_POST["birthdate"]);
        }


    if (empty($_POST["address"])) {
        $addressErr = "*Address is required";
    } else {
      $address = test_input($_POST["address"]);
    }

    if (empty($_POST["gender"])) {
      $genderErr = "* Gender is required";
    } else {
      $gender = test_input($_POST["gender"]);

    }


    $course = test_input($_POST["select_course"]);



    if(isset($_POST["submit"])){


            if($nameErr =="" && $emailErr == "" && $numberErr == "" && $dateBirthErr == ""&& $genderErr=="" && $addressErr =="")
            {
              require('regProcess.php');

  
            }
            else{

            }

          }


  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }




  ?>




  <section class="container">
    <header>Registration Form</header>
    <form action="" class="form" method="POST">
      <div class="input-box">
        <label>Full Name</label>
        <input  name="name" type="text" placeholder="Enter full name" />
        <br>
        <span style="color:red;"> <?php  echo $nameErr; ?>  </span>
      </div>

      <div class="input-box">
        <label>Email Address</label>
        <input name="email" type="text" placeholder="Enter email address"/>
        <br>
        <span style="color:red;"> <?php  echo $emailErr; ?>  </span>
      </div>

      <div class="column">
        <div class="input-box">
          <label>Phone Number</label>
          <input name="contactnumber" type="number" placeholder="Enter phone number" />
          <br>
          <span style="color:red;"> <?php  echo $numberErr; ?>  </span>
        </div>


        <div class="input-box">
          <label>Birth Date</label>
          <input name="birthdate" type="date" placeholder="Enter birth date"/>
          <br>
          <span style="color:red;"> <?php  echo $dateBirthErr; ?>  </span>
        </div>
      </div>
      <div class="gender-box">
        <h3>Gender</h3>
        <div class="gender-option">
          <div class="gender">
            <input type="radio" id="check-male" value="Male" name="gender" checked />
            <label for="check-male" name ="gen">Male</label>
          </div>
          <div class="gender">
            <input type="radio" id="check-female" value="Female" name="gender" />
            <label for="check-female" name ="gen">Female</label>
          </div>
          <br>
          <span style="color:red;"> <?php  echo $genderErr; ?>  </span>

        </div>
      </div>
      <div class="input-box address">
        <label>Address</label>
        <input name="address"type="text" placeholder="Enter street address"/>
        <br>
        <span style="color:red;"> <?php  echo $addressErr; ?>  </span>

        <br>
        <label>Select Course</label>
        <br>
        <select class="course" name="select_course">
          <option value="Fashion Design">Fashion Design</option>
          <option value="Painting">Painting</option>
          <option value="Drawing">Drawing</option>
          <option value="Sculpture">Sculpture</option>
          <option value="Guitar">Guitar</option>
          <option value="Photography">Photography</option>
        </select>



      </div>
      <button name="submit">Submit</button>
      <br>
      <br>
      <?php echo $error; ?>
    </form>
  </section>
</body>

</html>
