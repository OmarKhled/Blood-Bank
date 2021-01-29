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
  require_once "languages/" . $_SESSION['lang'] . ".php";
?>
