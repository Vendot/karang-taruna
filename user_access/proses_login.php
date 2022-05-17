<?php

	include_once("../function/koneksi.php");
	include_once("../function/helper.php");
	
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	
	$query = mysqli_query($koneksi, "SELECT * FROM account WHERE email='$email' AND password='$password' AND status='on'");
	
	if(mysqli_num_rows($query) == 0){
		header("location:". BASE_URL . "index.php?page=user_access/login&notif=true");
	}else{
	
		$row = mysqli_fetch_assoc($query);
		
		session_start();
		
		$_SESSION['user_id'] = $row['user_id'];
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['level'] = $row['level'];
		
		if(isset($_SESSION["proses_pes"])){
			unset($_SESSION["proses_pes"]);
			header("location: ".BASE_URL."index.php?page=data_pem");
		}else{
			header("location: ".BASE_URL."index.php?page=profile_user/info_pribadi&module=pesanan&action=list");
		}
	}