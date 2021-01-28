<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css">
  </head>
  <body>

    <div class="box">
      <h2 class="register">Register now!</h2>
      <p class="error">
        <?php
        include 'backend/registration.php';
        echo $_GET['message'];
        ?>
      </p>
      <p class="success">
        <?php
        include 'backend/registration.php';
        echo $_GET['success'];
        ?>
      </p>
      <form class="form" action="backend/registration.php" method="post">
          <label>Name:</label><br>
          <input type="text" name="name" placeholder="Enter your name"><br>
          <label>E-mail:</label><br>
          <input type="email" name="user_email" placeholder="Enter your email"><br>
          <label>Phone number:</label><br>
          <input type="tel" name="phone_number" placeholder="Enter your phone number"><br>
          <label>Country:</label><br>
          <input list="country" type="list" name="country" placeholder="Choose your country"><br>
          <datalist id='country'>
            <option value="Egypt"></option>
          </datalist>
          <label>City</label><br>
          <input list="cities" type="list" name="city" placeholder="Choose your city"><br>
          <datalist id='cities'>
            <option value="Cairo"></option>
            <option value="Alexandria"></option>
            <option value="El-faioum"></option>
            <option value="Assiut"></option>
          </datalist>
          <label>Age:</label><br>
          <input type="number" name="age" placeholder="Enter you age" min="16"><br>
          <label>Blood Type</label><br>
          <input list="Blood" type="list" name="blood-types" placeholder="Choose your Blood type"><br>
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

          <p> <input type="checkbox" name="agreement"> I am over 16 and I have read and agree to the <a href="">Terms&Conditions</a> and the <a href="#">Privacy Policy</a> </p>
          <input type="submit" name="submit" value="Register" class="btn">
      </form>
    </div>
  </body>
</html>
