<div class="list-profile">
    <div class="container">
        <form action="/action_page.php">
            <label for="img">Select image:</label>
            <input type="file" id="img"
                name="img" accept="image/*">
            <input type="submit">
        </form>

        <div class="data-simpel"> 
            <h4><?php echo $nama; ?></h4>
            <p>Pelajar</p>
            <p><?php echo $email; ?></p>
        </div>

        <div class="detail-simpel">
            <p>Detail</p>

            <ul class="profile-dropdown">
                <li><a href="<?php echo BASE_URL."index.php?page=info_pribadi"; ?>">Informasi Pribadi</a></li>
                <li><a href="<?php echo BASE_URL."index.php?page=riwayat_pend"; ?>">Riwayat Pendidikan</a></li>
            </ul>

        </div>
    </div>
</div>
