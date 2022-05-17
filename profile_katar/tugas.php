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
        <a href="<?php echo BASE_URL."index.php?page=profile_katar/tugas"; ?>">Tugas</a>
      </div>
    </div>

    <?php

      include_once("sidebar.php");

    ?>

    <div class="article">
      <div class="container">
        <div class="content">

          <h1>Tugas</h1>
          <h4>Tugas Karang Taruna</h4>
          <ul>
              <li><p>mengembangkan potensi generasi muda dan masyarakat; dan</p></li>
              <li><p>berperan aktif dalam pencegahan dan penanggulangan permasalahan sosial melalui rehabilitasi sosial, jaminan sosial, pemberdayaan sosial, dan perlindungan sosial serta program prioritas nasional.</p></li>
          </ul>
          <p>Dalam melaksanakan tugas Karang Taruna bekerja sama dengan Pemerintah, pemerintah daerah provinsi, pemerintah daerah kabupaten/kota, Kecamatan, Desa atau Kelurahan, potensi sumber kesejahteraan sosial, badan masyarakat.</p>
        </div>
      </div>
    </div>
