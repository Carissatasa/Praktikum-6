<!-- Buatlah program sederhana tentang biodata tanpa database -->

<!DOCTYPE html>
<html>
<head>
	<title>Program Sederhana Biodata</title>
</head>
<body>
	<h1 align="center">FORM BIODATA PASIEN<br></h1>
	<h3 align="center">Isikan biodata secara lengkap!<br><br></h3>

	<form method="POST" action="tugas3Act.php">
		<table width="400" align="center" cellpadding="7" cellspacing="2">
			<tr>
				<td width="130">Nama lengkap</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">Jenis kelamin</td>
				<td>
					<input type="radio" name="jk" value="Perempuan">Perempuan
					<input type="radio" name="jk" value="Laki-laki">Laki-laki
				</td>
			</tr>
			<tr>
				<td width="130">Umur</td>
				<td><input type="text" name="umur"></td>
			</tr>
			<tr>
				<td width="130">Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td width="130">Keluhan</td>
				<td><textarea name="keluhan" rows="4" cols="30"></textarea></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="btnLogin" value="Kirim">
				</td>
			</tr>
		</table>
	</form>


</body>
</html>