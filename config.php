<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400&display=swap" rel="stylesheet">
<?php
  if ($_GET['lang']){
    if ($_GET['lang'] == 'en'){
      setcookie('lang', 'en', time()+ 86400*30, '/');
      setcookie('alignment' , 'left', time()+ 86400*30, '/');
      include "languages/en.php";
    } else {
      setcookie('lang', 'ar', time()+ 86400*30, '/');
      setcookie('alignment' , 'right', time()+ 86400*30, '/');
      include "languages/ar.php";
    }
  }else{
    if ($_COOKIE['lang'] ) {
      include "languages/" . $_COOKIE['lang'] . ".php";
    } else {
      include "languages/en.php";
    }
  }

?>
