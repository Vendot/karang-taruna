<?php

    if($user_id){
        header("location: ".BASE_URL);
    }

?>

<form action="<?php echo BASE_URL."user_access/proses_register.php"; ?>" method="POST">

    <div class="element-parent">

        <div class="head">
            <a href="<?php echo BASE_URL."index.php?page=../home"; ?>">
                <img class="logo" src="<?php echo BASE_URL."images/logo.png";?>" />
            </a>
        </div>

        <?php
            $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
            $nama_lengkap = isset($_GET['nama_lengkap']) ? $_GET['nama_lengkap'] : false;
            $email = isset($_GET['email']) ? $_GET['email'] : false;
            $nik = isset($_GET['nik']) ? $_GET['nik'] : false;
            $phone = isset($_GET['phone']) ? $_GET['phone'] : false;

            if($notif == "require") {
                echo "<div class='notif'>Maaf, kamu harus melengkapi form dibawah ini</div>";
            } elseif($notif == "password") {
                echo "<div class='notif'>Maaf, password yang kamu masukkan tidak sama</div>";
            } elseif($notif == "email") {
                echo "<div class='notif'>Maaf, email yang kamu masukkan sudah terdaftar</div>";
            }
        ?>

        <div class="element-form">
            <label>Nama lengkap</label>
            <span><input type="text" name="nama_lengkap" value="<?php echo $nama_lengkap ?>"/></span>
        </div>
        <div class="element-form">
            <label>Email</label>
            <span><input type="text" name="email" value="<?php echo $email ?>"/></span>
        </div>
        <div class="element-form">
            <label>NIK</label>
            <span><input type="text" name="nik" value="<?php echo $nik ?>"/></span>
        </div>
        <div class="element-form">
            <label>Nomor Telepon</label>
            <span><input type="text" name="phone" value="<?php echo $phone ?>"/></span>
        </div>
        <div class="element-form">
            <label>Password</label>
            <span><input type="password" name="password"/></span>
        </div>
        <div class="element-form">
            <label>Re-Type Password</label>
            <span><input type="password" name="re_password"/></span>
        </div>
        <div class="element-form">
            <!-- <label>Submit</label> -->
            <span><input type="submit" name="register" value="Register"/></span>
        </div> 

        <div class="element-uform">
            <p>Saya sudah memiliki akun</p>
            <a href="<?php echo BASE_URL."index.php?page=user_access/login"; ?>">Login</a>
        </div>
    </div>

</form>