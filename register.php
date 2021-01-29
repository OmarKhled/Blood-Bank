<?php
 include "config.php";
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <?php include 'css/register.css.php' ?>
  </head>
  <body>

    <div class="box">
      <h2 class="register"><?php echo $lang['Register now!'] ?></h2>
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
          <label><?php echo $lang['Name:'] ?></label><br>
          <input type="text" name="name" placeholder="<?php echo $lang['Enter your name'] ?>"><br>
          <label><?php echo $lang['E-mail:'] ?></label><br>
          <input type="email" name="user_email" placeholder="<?php echo $lang['Enter your email'] ?>"><br>
          <label><?php echo $lang['Phone number:'] ?></label><br>
          <input type="tel" name="phone_number" placeholder="<?php echo $lang['Enter your phone number'] ?>"><br>
          <label><?php echo $lang['Country:'] ?></label><br>
          <!-- <input list="country" type="list" name="country" placeholder=""><br>
          <datalist id='country'>
            <option value=></option>
          </datalist> -->
          <select name="country">
            <option value="" disabled selected><?php echo $lang['Choose your country'] ?></option>
            <option value="Egypt"><?php echo $lang['Egypt'] ?></option>
          </select>
          <label><?php echo $lang['City'] ?></label><br>
          <!-- <input list="cities" type="list" name="city" placeholder="<?php //echo $lang['Choose your city'] ?>"><br>
          <datalist id='cities'>
            <option value=<?php //echo $lang['Cairo'] ?>></option>
            <option value=<?php //echo $lang['Alexandria'] ?>></option>
            <option value=<?php //echo $lang['El-faioum'] ?>></option>
            <option value=<?php //echo $lang['Assiut'] ?>></option>
          </datalist> -->
          <select name="city">
            <option value="" disabled selected><?php echo $lang['Choose your city'] ?></option>
            <option value="Cairo"><?php echo $lang['Cairo'] ?></option>
            <option value="Alexandria"><?php echo $lang['Alexandria'] ?></option>
            <option value="El-faioum"><?php echo $lang['El-faioum'] ?></option>
            <option value="Assiut"><?php echo $lang['Assiut'] ?></option>
          </select>
          <label><?php echo $lang['Age:'] ?></label><br>
          <input type="number" name="age" placeholder="<?php echo $lang['Enter you age'] ?>" min="16"><br>
          <label><?php echo $lang['Blood Type'] ?></label><br>
          <!-- <input list="Blood" type="list" name="blood-types" placeholder="<?php echo $lang['Choose your Blood type'] ?>"><br>
          <datalist id='Blood'>
            <option value="A+"></option>
            <option value="A-"></option>
            <option value="B+"></option>
            <option value="B-"></option>
            <option value="O+"></option>
            <option value="O-"></option>
            <option value="AB+"></option>
            <option value="AB-"></option>
          </datalist> -->
          <select name="blood-types">
            <option value="" disabled selected><?php echo $lang['Choose your Blood type'] ?></option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
          </select>

          <p> <input type="checkbox" name="agreement"> <?php echo $lang['I am over 16 and I have read and agree to the'] ?> <a href=""><?php echo $lang['Terms & Conditions'] ?></a> <?php echo $lang['and the'] ?>
            <a href="#"><?php echo $lang['Privacy Policy'] ?></a> </p>
          <input type="submit" name="submit" value="<?php echo $lang['Register'] ?>" class="btn">
      </form>
    </div>
  </body>
</html>
