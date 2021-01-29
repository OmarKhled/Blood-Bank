<?php

 include "config.php";

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Your search results for <?php include 'backend/search-process.php';
                                         echo $_GET['blood_type']."Blood type";?></title>
    <?php include 'css/results.css.php' ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400&display=swap" rel="stylesheet">

  </head>
  <body>
    <?php include_once 'assets/navbar.php'; ?>
    <div class="content">
      <div class="box-container">
        <div class="box-again">
          <h2><?php echo $lang['New Search?'] ?></h2>
          <p class="error">
            <?php
              include 'backend/search-process.php';
              echo $_GET['message']
            ?>
          </p>
          <form class="form" action="backend/search-process.php" method="post">
            <label><?php echo $lang['Country:'] ?></label><br>
            <input list="country" type="list" name="country" placeholder="<?php echo $lang['Choose your country'] ?>"><br>
            <datalist id='country'>
              <option value="Egypt"></option>
            </datalist>
    <label><?php echo $lang['City'] ?></label><br>
            <input list="cities" type="list" name="city" placeholder="<?php echo $lang['Choose your city'] ?>"><br>
            <datalist id='cities'>
              <option value="Cairo"></option>
              <option value="Alexandria"></option>
              <option value="El-faioum"></option>
              <option value="Assiut"></option>
            </datalist>
    <label><?php echo $lang['Blood Type'] ?></label><br>
            <input list="Blood" type="list" name="blood-types" placeholder="<?php echo $lang['Choose your Blood type'] ?>"><br>
            <datalist id='Blood'>
              <option value="A+"></option>
              <option value="A-"></option>
              <option value="B+"></option>
              <option value="B-"></option>
              <option value="O+"></option>
              <option value="O-"></option>
              <option value="AB+"></option>
              <option value="AB-"></option>
            </datalist>
            <input type="submit" name="search" value="Search" class="btn-rounded">
          </form>

        </div>
      </div>

      <div class="results">
          <?php
          /*Getting search rules*/
            $country = 'Egypt';
            $city = "Cairo";
            $blood_type = $_GET['blood_type'];

          /*Estblishing connection*/
            $dbServername = "localhost";
            $dbUsername = "root";
            $dbPassword = "159357";
            $dbName = 'BloodBank';
            $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
          /*Sql Code*/
            $sql = "SELECT * FROM donators WHERE country = '$country' AND city = '$city' AND blood_type = '$blood_type';";
          /*Pushing th sql code and checking the results*/
            $results = mysqli_query($conn, $sql);
            $results_check = mysqli_num_rows($results);
          /*Displaying the results*/
            if ($results_check > 0) {
                while($row = mysqli_fetch_assoc($results)) {
                  echo  "<div class='results-box'>
                    <h2>".$row['name']."</h2>
                    <p>
                    Phone number: ".$row['phone_number']."  <br>
                    City: ".$row['city']." <br>
                    Age: ".$row['age']." <br>
                    Blood type: ".$row['blood_type']." <br>
                    </p>
                 </div>";
                }

            }
          ?>
      </div>
    </div>

  </body>
</html>
