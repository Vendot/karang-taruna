<?php
    include_once("index.php");

    $page = isset($_GET['page']) ? $_GET['page'] : false;
?>

    <div class="top-wrapper">
      <div class="container">
        <div class="top-container">  
          <h1>KARANG TARUNA</h1>
          <a href="<?php echo BASE_URL."index.php?page=profile_katar/definisi"; ?>" target='_blank'>DEFINISI KARANG TARUNA</a>
          <a href="<?php echo BASE_URL."index.php?page=profile_katar/tugas"; ?>" target='_blank'>TUGAS KARANG TARUNA</a>
          <a href="<?php echo BASE_URL."index.php?page=profile_katar/fungsi"; ?>" target='_blank'>FUNGSI KARANG TARUNA</a>
        </div>
        
        <div class="btm-container">
          <div class="btm-left-container">
            <h1>TALENT</h1>
            <p>WINS GAME BUT,</p>
            <h1>TEAMWORK</h1>
            <p>WINS CHAMPIONSHIPS</p>
          </div>
          
          <div class="btm-right-container">
            <img src="images/teamwork.png">
          </div>
        </div>
        
      </div>
    </div>

    <div class="lesson-wrapper">
      <div class="container">
        <div class="heading">
           <h2>(DISINI TULISAN)</h2>
        </div>

        <div class="lessons">
          <div class="lesson">
            <div class="lesson-icon">
              <img src="https://prog-8.com/images/html/advanced/html.png">
              <p>DATA#1</p>
            </div>
            <p class="txt-contents">(DISINI TULISAN)</p>
          </div>

          <div class="lesson">
            <div class="lesson-icon">
              <img src="https://prog-8.com/images/html/advanced/jQuery.png">
              <p>DATA#2</p>
            </div>
            <p class="txt-contents">(DISINI TULISAN)</p>
          </div>

          <div class="lesson">
            <div class="lesson-icon">
              <img src="https://prog-8.com/images/html/advanced/ruby.png">
              <p>DATA#3</p>
            </div>
            <p class="txt-contents">(DISINI TULISAN)</p>
          </div>

          <div class="lesson">
            <div class="lesson-icon">
              <img src="https://prog-8.com/images/html/advanced/php.png">
              <p>DATA#4</p>
            </div>
            <p class="txt-contents">(DISINI TULISAN)</p>
          </div>

          <div class="clear"></div>
        </div>
      </div>
    </div>

    <div class="message-wrapper">
      <div class="container">
        <div class="heading">
          <h2>(DISINI TULISAN)</h2>
          <h3>(DISINI TULISAN)</h3>
        </div>

        <span class="btn message">Lihat Selengkapnya</span>
      </div>
    </div>

