<?php 
	$nama = $_POST['nama'];
	$jk = $_POST['jk'];
	$umur = $_POST['umur'];
	$alamat = $_POST['alamat'];
	$keluhan = $_POST['keluhan'];
		
	// Kondisi jika username dan password kosong
	if(empty($nama) || empty($jk) || empty($umur) || empty($alamat) || empty($keluhan) ) {
		header('Location: tugas3Empty.php'); // Redirect ke halaman login dengan parameter empty
		exit();
	} else ?>
	
	<div align="center">
		<h3>Form Pasien</h3>
		<?php 
			echo "Nama lengkap : ".$nama."<br>";
			echo "Jenis kelamin : ".$jk."<br>"; 
			echo "Umur : ".$umur."<br>";
			echo "Alamat : ".$alamat."<br>";
			echo "Keluhan : ".$keluhan."<br><br>";

			date_default_timezone_set("Asia/Jakarta");
			echo "Tanggal periksa ".date("d F Y")." pukul ".date("H:i");
		?>
	</div>