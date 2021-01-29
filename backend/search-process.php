<?php
  /*if(isset($_POST['search'])) {
    $country = $_POST['country'];
    $city = $_POST['city'];
    $blood_type = $_POST['blood-types'];
    if(!empty($country) && !empty($city) && !empty($blood_type)) {
      $success = "All hass benn filled succesfully";
      header("Location: ../results.php?blood_type=$blood_type&city=$city");
    } else {
      $message = "Please fill the required fields";
      header("Location: ../search.php?failed&error=$message");
    }

  }*/
  if (isset($_POST['search'])) {
    $country = $_POST['country'];
    $city = $_POST['city'];
    $blood_type = $_POST['blood-types'];

      if(empty($country)||empty($city)||empty($blood_type)) {
        $message = "Please fill the empty fields";
        header("Location: ../search.php?error&message=$message");
      } else {
        $success = "The process was done succesfully";
        header("Location: ../results.php?Succesful&success=$success&country=$country&city=$city&blood_type=".urlencode($blood_type));
      }
  }
