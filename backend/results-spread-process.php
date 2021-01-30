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
        echo  "<a href= 'results-person.php?person=".$row['id']."'><div class='results-box'>
          <h2>".$row['name']."</h2>
          <p>
          Phone number: ".$row['phone_number']."  <br>
          City: ".$row['city']." <br>
          Age: ".$row['age']." <br>
          Blood type: ".$row['blood_type']." <br>
          </p>
       </div></a>";
      }

  }
?>
