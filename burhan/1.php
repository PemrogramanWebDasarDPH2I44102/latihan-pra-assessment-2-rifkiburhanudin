<?php 
$conn = mysqli_connect("localhost","root","","kuliah");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>karyawan</title>
</head>
<body>
	<form action="" method="post">
		nama : <input type="text" name="nama"><br>
		NIP  : <input type="text" name="nip"><br>
		<input type="submit" name="submit">
	</form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
 $nama = $_POST['nama'];
 $nip = $_POST['nip'];	
}

$a = "SELECT * FROM kuliah WHERE nip=$nip";

$que = mysqli_query($conn, $a);
$arr = mysqli_fetch_array($que);

print_r($arr);

if (nama==$nama['0']&& NIP['1']) {
	header("Location:2.php");
}else{
	echo "anda tidak berhasil masuk";
}
 

 ?>