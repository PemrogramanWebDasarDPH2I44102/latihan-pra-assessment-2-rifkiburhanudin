<?php 
$conn = mysqli_connect("localhost","root","","kuliah");
 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>paket</title>
</head>
<body>
	<form method="post" action="">
		isi paket <input type="text" name="isi">
		penghuni <section name="penghuni">
			<option value="deden">asep</option>
			<option value="muklis">muklis</option>
			<option value="agung">agung</option>
		</section>
		tanggal datang <input type="date" name="tgld"><br>
		tanggal ambil <input type="date" name="tgla">
		<input type="submit" name="submit">
		
	</form>
</body>
</html>

<?php 
if (isset($_POST['submit'])) {
	$isi = $_POST['isi'];
	$penghuni = $_POST['penghuni'];
	$tgldatang = $_POST['tgld'];
	$tglambil = $_POST['tgla'];
}
 ?>