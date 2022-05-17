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
        <a href="<?php echo BASE_URL."index.php?page=profile_katar/definisi"; ?>">Definisi</a>
      </div>
    </div>

    <?php

      include_once("sidebar.php");

    ?>

    <div class="article">
      <div class="container">
        <div class="content">

          <h1>Definisi</h1>
          <h4>Definisi Karang Taruna</h4>
          <p>Karang Taruna adalah organisasi sebagai wadah generasi muda untuk mengembangkan diri, tumbuh, dan berkembang atas dasar kesadaran serta tanggung jawab sosial dari, oleh, dan untuk generasi muda.</p>
          <p>Karang Taruna berorientasi pada tercapainya kondisi terpenuhinya kebutuhan material, spiritual, dan sosial generasi muda agar dapat hidup layak dan mampu mengembangkan diri sehingga dapat melaksanakan fungsi sosialnya bagi masyarakat.</p>
          <h3>Karang Taruna dalam menjalankan tugasnya memiliki prinsip:</h3>
          <ul>
            <li><p>berjiwa sosial;</p></li>
            <li><p>kemandirian;</p></li>
            <li><p>kebersamaan;</p></li>
            <li><p>partisipasi;</p></li>
            <li><p>lokal dan otonom; dan</p></li>
            <li><p>nonpartisan.</p></li>
          </ul>
          <p>Karang taruna dalam menjalankan tugasnya berlandaskan pada Pancasila dan Undang-Undang Dasar Negara Kesatuan Republik Indonesia 1945.</p>
          
        </div>
      </div>
    </div>
