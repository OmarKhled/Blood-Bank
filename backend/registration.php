
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
        header("Location: ../register.php?error-in-password&message=$message");
      } else {
        $dbServername = "localhost";
        $dbUsername = "root";
        $dbPassword = "159357";
        $dbName = 'BloodBank';

        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
        $sql = "INSERT INTO donators (name, email, phone_number, country, city, age, blood_type)
        VALUES ('$name', '$email', '$tel', '$country', '$city', '$age', '$blood_type');";
        mysqli_query($conn, $sql);
        $success = "You have registered succesfully!";
        header("Location: ../register.php?Succesful&success=$success");
      }

  }

?>
