<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Blood Bank</title>
</head>

<body>
  <?php include 'assets/navbar.php'; ?>
  <?php include 'css/styles.css.php' ?>
  <div class="top-container">
    <div class="holder">
      <h1><?php echo $lang['Give'] ?> <span class="primary-text"><?php echo $lang['Blood'] ?></span></h1>
      <div class="buttons">
        <a href="register.php" class="btn hover"><?php echo $lang['Register as a donator'] ?></a>
        <span class="invisible">E</span>
        <a href="search.php" class="btn hover"><?php echo $lang['Search for a donator'] ?></a>
      </div>

    </div>
  </div>
  <div class="content">
    <?php include 'content.php' ?>
  </div>
  <?php include 'assets/footer.php' ?>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>

</body>
</html>
