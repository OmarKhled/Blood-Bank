<?php
 include "config.php";
 ?>

  <nav id="navbar">
    <div class="container">
      <h1> <a href="index.php"><strong>THE BLOOD BANK</strong></a></h1>
      <ul>
        <span class="navigation">
          <li class="floated"><a href="../index.php"><?php echo $lang['Home'] ?></a></li>
          <li class="floated"><a href="../about.php"><?php echo $lang['About'] ?></a></li>
          <li class="floated"><a href="../contact.php"><?php echo $lang['Contact'] ?></a></li>
        </span>
        <div class="floated m-navigation">
          <a href="#">&#9776;</a>
          <div class="drop-menu">
            <li><a href="../index.php"><?php echo $lang['Home'] ?></a></li>
            <li><a href="../about.php"><?php echo $lang['About'] ?></a></li>
            <li><a href="../contact.php"><?php echo $lang['Contact'] ?></a></li>
          </div>
        </div>
        <span>
          <li class="floated"><a class="language" href="index.php?lang=ar"><img src="../images/arabic.png" alt="<?php echo $lang['arabic'] ?>"></a></li>
          <li class="floated"><a class="language" href="index.php?lang=en"><img src="../images/english.png" alt="<?php echo $lang['english'] ?>"></a></li>
        </span>
      </ul>

    </div>

  </nav>
