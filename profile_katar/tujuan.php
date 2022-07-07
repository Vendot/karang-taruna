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
        <a href="<?php echo BASE_URL."index.php?page=profile_katar/tujuan"; ?>">Tujuan</a>
      </div>
    </div>

    <?php

      include_once("sidebar.php");

    ?>

    <div class="article">
      <div class="container">
        <div class="content">

          <h1>Tujuan</h1>
          <h4>Tujuan Karang Taruna</h4>
          <ul>
            <li><p>mewujudkan kesadaran tanggung jawab sosial setiap generasi muda </p></li>
            <p>mewujudkan kesadaran tanggung jawab sosial setiap generasi muda dalam mengantisipasi, mencegah, dan menangkal berbagai permasalahan sosial khususnya dikalangan generasi muda;</p>
            <li><p>mengembangkan kemampuan generasi muda </p></li>
            <p>mengembangkan kemampuan generasi muda dalam penyelenggaraan kesejahteraan sosial melalui rehabilitasi sosial, jaminan sosial, pemberdayaan sosial, dan perlindungan sosial;</p>
            <li><p>membangun karakter generasi muda </p></li>
            <p>membangun karakter generasi muda yang berpengetahuan, berkepribadian, terampil, cerdas, inovatif, dan berkarya;</p>
            <li><p>mengembangkan potensi dan kemampuan generasi muda;</p></li>
            <!-- <p>testes</p> -->
            <li><p>mengembangkan jiwa dan semangat kewirausahaan sosial generasi muda</p></li>
            <p>mengembangkan jiwa dan semangat kewirausahaan sosial generasi muda menuju kemandirian dalam upaya meningkatkan Kesejahteraan Sosial;</p>
            <li><p>memotivasi generasi muda </p></li>
            <p>memotivasi generasi muda agar menjadi perekat persatuan dalam keberagaman kehidupan bermasyarakat, berbangsa, dan bernegara; dan</p>
            <li><p>menjalin sinergi dan kerja sama kemitraan antara generasi muda dengan berbagai pihak</p></li>
            <p>menjalin sinergi dan kerja sama kemitraan antara generasi muda dengan berbagai pihak dalam mewujudkan peningkatan kesejahteraan sosial.</p>
          </ul>
        </div>
      </div>
    </div>

