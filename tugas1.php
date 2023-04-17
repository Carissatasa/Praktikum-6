<!-- Buatlah form login dengan melakukan include pada halaman web anda yang akan menampilkan nama anda, email, jam, hari, dan
tanggal login setela login tanpa menggunakan database dengan menggunakan method get atau post! -->


<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
</head>
<body>
	<h1 align="center">FORM LOGIN<br></h1>
	<h3 align="center">Selamat datang! Silakan login untuk akses<br><br></h3>

	<form method="POST" action="tugas1Act.php">
		<table width="250" align="center" cellpadding="7" cellspacing="2">
			<tr>
				<td width="130">Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<!-- jam, hari, tgl login tdk masuk form, automatis di hasil form -->
			<tr>
				<td>
					<input type="submit" name="btnLogin" value="Login">
				</td>
			</tr>
		</table>
	</form>

</body>
</html>