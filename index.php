<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Blood Bank</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <?php include 'assets/navbar.php'; ?>
  <div class="top-container">
    <div class="holder">
      <h1>Give <span class="primary-text">Blood</span></h1>
      <div class="buttons">
        <a href="register.php" class="btn"><strong>Register as a donator</strong></a>
        <a href="search.php" class="btn"><strong>Search for a donator</strong></a>
      </div>

    </div>
  </div>
  <div class="content">
    <?php include 'content.php' ?>
  </div>
<?php include 'assets/footer.php' ?>