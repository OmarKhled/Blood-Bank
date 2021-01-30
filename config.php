<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400&display=swap" rel="stylesheet">

<?php
  session_start();
  if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = "en";
  }
  if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang']) {
    $_SESSION['lang'] = $_GET['lang'];
  }
  if ($_SESSION['lang'] == "en") {
    $_SESSION['alignment'] = "left";
  } else if ($_SESSION['lang'] == "ar") {
    $_SESSION['alignment'] = "right";
  }

  include "languages/" . $_SESSION['lang'] . ".php";
    // setcookie('lang', $_SESSION['lang'], time());
   // echo '<script>window.location.reload(true)</script>;
?>
