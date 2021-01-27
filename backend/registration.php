
<?php

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['user_email'];
    $tel = $_POST['phone_number'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $age = $_POST['age'];
    $blood_type = $_POST['blood-types'];

      if(empty($name)||empty($email)||empty($tel)||
      empty($country)||empty($city)||empty($age)||empty($blood_type)) {
        $message = "Please fill the empty field";
        header("Location: ../register.php?error&message=$message");
      } else {

        $dbServername = "localhost";
        $dbUsername = "root";
        $dbPassword = "159357";
        $dbName = 'BloodBank';
        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

        $trimmed_phone = trim($tel);

        if (strlen($trimmed_phone) == "11" && substr($trimmed_phone,0,2) != "01") {
         $message = "Phone number isn't correct please write it correctly and try again";
         header("Location: ../register.php?Succesful&message=$message");
         exit($message);
       } else if (strlen($trimmed_phone) == "13" && substr($trimmed_phone, 0,4) != "+201") {
         $message = "Phone number isn't correct please write it correctly and try again";
         header("Location: ../register.php?Succesful&message=$message");
         exit($message);
       } else if (strlen($trimmed_phone) == "12" || strlen($trimmed_phone) > 13 || strlen($trimmed_phone) < 11) {
         $error = 'Incorret phone number';
         $message = "Phone number isn't correct please write it correctly and try again";
         header("Location: ../register.php?Succesful&message=$message");
         exit($message);
       } else {}


        $check_sql = "SELECT * FROM donators WHERE phone_number = '$tel' or email = '$email' LIMIT 1;";
        $results = mysqli_query($conn, $check_sql);
        $results_check = mysqli_num_rows($results);
        echo $results_check;
        if ($results_check > 0) {
          echo 'hi';
          $message = 'Phone number or E-mail already exixsts please sign-up with another one';
          header("Location: ../register.php?Succesful&message=$message");
          exit($message);
        }

        $sql = "INSERT INTO donators (name, email, phone_number, country, city, age, blood_type)
        VALUES ('$name', '$email', '$tel', '$country', '$city', '$age', '$blood_type');";
        mysqli_query($conn, $sql);
        $success = "You have registered succesfully!";
        header("Location: ../register.php?Succesful&success=$success");
      }

  }

?>
