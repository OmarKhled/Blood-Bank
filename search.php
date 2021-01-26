<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search</title>
    <link rel="stylesheet" href="css/register.css">
  </head>
  <body>
    <div class="box">
      <h2>Search</h2>
      <form class="form" action="backend/search.php" method="post">
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
  </body>
</html>
