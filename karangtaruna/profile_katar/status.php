<?php
    include_once("./index.php");
    
    $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
    $page = isset($_GET['page']) ? $_GET['page'] : false;
?>

    <?php

      include_once("top_wrapper.php");

    ?>

    <div class="bar-wrapper">
      <div class="container">
        <a href="<?php echo BASE_URL."index.php?page=./home"; ?>">Home</a>
        <p>-</p>
        <a href="<?php echo BASE_URL."index.php?page=profile_katar/status"; ?>">Status</a>
      </div>
    </div>

    <?php

      include_once("sidebar.php");

    ?>

    <div class="article">
      <div class="container">
        <div class="content">

          <h1>Status</h1>
          <h4>Status Karang Taruna</h4>
          <p>Karang Taruna merupakan organisasi yang dibentuk oleh masyarakat sebagai potensi dan sumber kesejahteraan sosial.</p>

        </div>
      </div>
    </div>

