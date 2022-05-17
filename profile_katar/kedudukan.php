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
        <a href="<?php echo BASE_URL."index.php?page=profile_katar/kedudukan"; ?>">Kedudukan</a>
      </div>
    </div>

    <?php

      include_once("sidebar.php");

    ?>

    <div class="article">
      <div class="container">
        <div class="content">

          <h1>Kedudukan</h1>
          <h4>Kedudukan Karang Taruna</h4>
          <p>Karang Taruna berkedudukan di Desa atau Kelurahan di dalam wilayah hukum Negara Kesatuan Republik Indonesia.</p>

        </div>
      </div>
    </div>

