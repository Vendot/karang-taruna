<?php

    session_start();

    include_once("function/helper.php");

    $page = isset($_GET['page']) ? $_GET['page'] : false;

    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;
    $nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : 'nama tidak di temukan';
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : 'email tidak di temukan';
    $level = isset($_SESSION['level']) ? $_SESSION['level'] : false;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karang Taruna | Sekura Bersatu</title>
    <link rel="stylesheet" href="<?php echo BASE_URL."css/stylesheet.css"; ?>" type="text/css">
    <!-- <link rel="stylesheet" href="responsive.css"> -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
  </head>

  <body>
    <header>
      <div class="container">
        <div class="header-left">
         
          <div class="header-logo">
            <a href="<?php echo BASE_URL."index.php?page=home"; ?>">
              <img class="logo" src="<?php echo BASE_URL."images/logo.png";?>" />
            </a>
          </div>

          <div class="menu-malasngoding">
            <ul>

              <li class="dropdown"><a href="<?php echo BASE_URL."index.php?page=profile_katar/visimisi"; ?>">PROFIL</a>
                <ul class="isi-dropdown">
                  <li><a href="<?php echo BASE_URL."index.php?page=profile_katar/visimisi"; ?>">Visi Misi</a></li>
                  <li><a href="<?php echo BASE_URL."index.php?page=profile_katar/definisi"; ?>">Definisi Karang Taruna</a></li>
                  <li><a href="<?php echo BASE_URL."index.php?page=profile_katar/tugas"; ?>">Tugas Karang Taruna</a></li>
                  <li><a href="<?php echo BASE_URL."index.php?page=profile_katar/fungsi"; ?>">Fungsi Karang Taruna</a></li>
                  <li><a href="<?php echo BASE_URL."index.php?page=profile_katar/tujuan"; ?>">Tujuan Karang Taruna</a></li>
                  <li><a href="<?php echo BASE_URL."index.php?page=profile_katar/status"; ?>">Status Karang Taruna</a></li>
                  <li><a href="<?php echo BASE_URL."index.php?page=profile_katar/kedudukan"; ?>">Kedudukan Karang Taruna</a></li>
                </ul>
              </li>

              <li class="dropdown"><a href="#">AGENDA KEGIATAN</a>
                <ul class="isi-dropdown">
                  <li><a href="<?php echo BASE_URL."index.php?page=Menu#2A"; ?>">Sub Menu 2A</a></li>
                  <li><a href="<?php echo BASE_URL."index.php?page=Menu#2B"; ?>">Sub Menu 2B</a></li>
                  <li><a href="<?php echo BASE_URL."index.php?page=Menu#2C"; ?>">Sub Menu 2C</a></li>
                  <li><a href="<?php echo BASE_URL."index.php?page=Menu#2D"; ?>">Sub Menu 2D</a></li>
                </ul>
              </li>

              <li class="dropdown"><a href="#">STRUKTUR ORGANISASI</a>
                <ul class="isi-dropdown">
                  <li><a href="<?php echo BASE_URL."index.php?page=Menu#3A"; ?>">Sub Menu 3A</a></li>
                  <li><a href="<?php echo BASE_URL."index.php?page=Menu#3B"; ?>">Sub Menu 3B</a></li>
                  <li><a href="<?php echo BASE_URL."index.php?page=Menu#3C"; ?>">Sub Menu 3C</a></li>
                  <li><a href="<?php echo BASE_URL."index.php?page=Menu#3D"; ?>">Sub Menu 3D</a></li>
                </ul>
              </li>

              <li class="dropdown"><a href="#">KEMITRAAN</a>
                <ul class="isi-dropdown">
                  <li><a href="<?php echo BASE_URL."index.php?page=Menu#1A"; ?>">Sub Menu 1A</a></li>
                  <li><a href="<?php echo BASE_URL."index.php?page=Menu#1B"; ?>">Sub Menu 1B</a></li>
                  <li><a href="<?php echo BASE_URL."index.php?page=Menu#1C"; ?>">Sub Menu 1C</a></li>
                  <li><a href="<?php echo BASE_URL."index.php?page=Menu#1D"; ?>">Sub Menu 1D</a></li>
                </ul>
              </li>
              
            </ul>
          </div>

        </div>

        <!-- <span class="fa fa-bars menu-icon"></span> -->

        <div class="header-right">
          <div class="menu-malasngoding">
            <ul>
              <?php
	        if($user_id){
		  echo "
                    <li
                      class='dropdown'><a href='".BASE_URL."index.php?page=profile_user/info_pribadi&module=pesanan&action=list'><b>$nama</b></a>
                        <ul class='isi-dropdown'>
                          <li>
                            <a href='".BASE_URL."user_access/logout.php'>Logout</a>
                          </li>
                        </ul>
                    </li>
		    ";
		}else{
		  echo "
                    <li
                      class='dropdown'><a href='".BASE_URL."index.php?page=user_access/register'>REGISTER</a>
                    </li>
                    <li
                      class='dropdown'><a href='".BASE_URL."index.php?page=user_access/login'>LOGIN</a>
                    </li>
                    ";
		}
		?>
            </ul>
          </div>

        </div>
      </div>
    </header>

    <div id="content">
      <?php
        $filename = "$page.php";
        
        if(file_exists($filename)) {
            include_once($filename);
        } else {
            echo "Maaf, file tersebut tidak ada di dalam sistem";
        }
      ?>
    </div>

    <footer>
      <div class="container">
        <div class="footer-left">
          <a href="<?php echo BASE_URL."index.php?page=home"; ?>">
            <img class="logo" src="<?php echo BASE_URL."images/logo.png";?>" />
            <p>KARANG TARUNA SEKURA BERSATU</p>
          </a>
        </div>

        <div class="footer-right">
          <p>copyright Karang Taruna Sekura Bersatu 2022<br>
	      </div>
      </div>
    </footer>
  </body>
</html>
