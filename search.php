<?php
 include "config.php";
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search</title>
    <?php include 'css/register.css.php' ?>
  </head>
  <body>
    <div class="box">
      <h2><?php echo $lang['Search'] ?></h2>
      <p class="error">
        <?php
          include 'backend/search-process.php';
          echo $_GET['message']
        ?>
      </p>
      <form class="form" action="backend/search-process.php" method="post">
        <label> <?php echo $lang['Country:'] ?></label><br>
        <select name="country">
          <option value="" disabled selected><?php echo $lang['Choose your country'] ?></option>
          <option value="Egypt"><?php echo $lang['Egypt'] ?></option>
        </select>
        <label><?php echo $lang['City'] ?></label><br>
        <select name="city">
          <option value="" disabled selected><?php echo $lang['Choose your city'] ?></option>
          <option value="Cairo"><?php echo $lang['Cairo'] ?></option>
          <option value="Alexandria"><?php echo $lang['Alexandria'] ?></option>
          <option value="El-faioum"><?php echo $lang['El-faioum'] ?></option>
          <option value="Assiut"><?php echo $lang['Assiut'] ?></option>
        </select>
        <label><?php echo $lang['Blood Type'] ?></label><br>
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
        <input type="submit" name="search" value="<?php echo $lang['Search'] ?>" class="btn-rounded">
      </form>
    </div>
  </body>
</html>
