<?php 
	$nama = $_POST['nama'];
	$email = $_POST['email'];
		
	// Kondisi jika username dan password kosong
	if(empty($nama) || empty($email)) {
		header('Location: tugas2.php'); // Redirect ke halaman login dengan parameter empty
		exit();
	} else
?>
	
	<div align="center">
		<h3>Login Berhasil!</h3>
		<p>Selamat datang, <?php echo $nama; ?>!</p>
		<p>Email: <?php echo $email; ?></p>
		<p>Login pada tanggal
			<?php
			date_default_timezone_set("Asia/Jakarta");
			echo date ("d F Y"); ?>
			hari <?php echo date ("l"); ?>
			pukul <?php echo date ("H:i"); ?>
		</p>
	</div>