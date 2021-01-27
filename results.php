<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Your search results for <?php include 'backend/search-process.php';
                                         echo $_GET['blood_type']."Blood type";?></title>
    <link rel="stylesheet" href="css/results.css">

  </head>
  <body>
    <?php include_once 'assets/navbar.php'; ?>
    <div class="content">
      <div class="box">
        <h2>New Search?</h2>
        <p class="error">
          <?php
            include 'backend/search-process.php';
            echo $_GET['message']
          ?>
        </p>
        <form class="form" action="backend/search-process.php" method="post">
          <label>Country:</label><br>
          <input list="country" type="list" name="country" placeholder="Choose country"><br>
          <datalist id='country'>
            <option value="Egypt"></option>
          </datalist>
  <label>City</label><br>
          <input list="cities" type="list" name="city" placeholder="Choose city"><br>
          <datalist id='cities'>
            <option value="Cairo"></option>
            <option value="Alexandria"></option>
            <option value="El-faioum"></option>
            <option value="Assiut"></option>
          </datalist>
  <label>Blood Type</label><br>
          <input list="Blood" type="list" name="blood-types" placeholder="Choose Blood type"><br>
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
      <div class="results">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>

  </body>
</html>
