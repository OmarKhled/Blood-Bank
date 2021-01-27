<?php

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
