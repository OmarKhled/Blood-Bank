<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Your result</title>
    <?php include 'css/results.css.php';
          include 'assets/navbar.php'
    ?>
  </head>
  <body>
    <div class="user-inf">
      <img src="images/user.png" alt="user-img" class="user-img">
      <div class="inf">
        <?php include 'backend/bdh.php';

        $sql = "SELECT * FROM donators WHERE id = ".$_GET['person']."";
      /*Pushing th sql code and checking the results*/
        $results = mysqli_query($conn, $sql);
        $results_check = mysqli_num_rows($results);
      /*Displaying the results*/
        while($row = mysqli_fetch_assoc($results)) {
          echo  "<div class='user-txt'>
            <h2>".$row['name']."</h2>
            <p>
            Phone number: ".$row['phone_number']."  <br>
            City: ".$row['city']." <br>
            Age: ".$row['age']." <br>
            Blood type: ".$row['blood_type']." <br>
            </p>
         </div>";
       }
        ?>
      </div>
    </div>
  </body>
</html>
