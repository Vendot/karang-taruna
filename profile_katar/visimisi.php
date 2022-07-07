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
        <a href="<?php echo BASE_URL."index.php?page=profile_katar/visimisi"; ?>">Visi Misi</a>
      </div>
    </div>

    <?php

      include_once("sidebar.php");

    ?>

    <div class="article">
      <div class="container">
        <div class="content">

          <h1>Visi</h1>
          <h4>Visi Karang Taruna</h4>
          <p>Karang Taruna merupakan wadah pembinaan dan pengembangan kreatifitas generasi muda yang berkelanjutan untuk menjalin persaudaraan dan rasa kebersamaan menjadi mitra organiasasi lembaga, baik kepemudaan ataupun pemerintah dalam pengembangan kreatifitas. Kemampuan dibidang Kesejahteraan Sosial baik untuk masyarakat dilingkungan sekitar ataupun diwilayah lain.</p>

          <h1>Misi</h1>
          <h4>Misi Karang Taruna</h4>
          <ul>
            <li><p>Meningkatkan SDM demi masa depan yang lebik baik melalui bidang masyarakat dan menjalin kerjasama dengan instansi pemerintah ataupun pihak lain, melalui pengembangan kelumpok usaha bersama.</p></li>
            <li><p>Terwujudnya kesejahtaraan sosial yang semakin meningkat bagi warga Desa  pada umumnya dan khususnya generasi muda yang memungkinkan pelaksanaan fungsi sosialnya sebagai manusia pembangunan yang mempu mengatasi masalah sosial dilingkungannya. Melestarikan kesenian daerah serta pengembangan minat untuk berolahraga</p></li>
            <li><p>Melestarikan kesenian daerah serta pengembangan minat untuk berolahraga.</p></li>
            <li><p>Meningkatkan peran pemuda dan perempuan serta memberikan kesadaran pentingnya perlindungan hukum terhadap hak perempuan sebagai anak atau remaja, sebagai istri dan sebagai ibu rumah tangga melalui sosialisasi pembangunan pemberdayaan perempuan yang melibatkan anggota karang taruna.</p></li>
            <li><p>Terwujudnya pemuda pemudi yang bertaqwa kepada Tuhan YME, penuh perhatian dan peka terhadap masalah dengan daya tahan fisik dan mental yang kuat, tegas dan teguh pendirian serta mampu berkreasi dan berkarya, jujur, sederhana sebagai acuan dimasyarakat.</p></li>
            <li><p>Turut berpartisispasi dalam upaya peningkatan derajat kesehatan melalui perilaku hidup bersih dan sehat (PHBS) serta malakukan upaya antisipasif dalam rangka menjaga dan melestarikan lingkungan hidup.</p></li>
          </ul>
        </div>
      </div>
    </div>

