<?php
include 'conn/koneksi.php';
if(isset($_POST['log'])) {
	$user = mysql_real_escape_string($_POST['user']);
	$pass = mysql_real_escape_string($_POST['pass']); 
	$sql = mysql_query("SELECT * FROM tbl_user where username='$user' and password='$pass'");
	$data = mysql_fetch_array($sql);
	$username = $data['username'];
	$nama = $data['nama'];
	$password = $data['password'];
	$level = $data['level_user'];
	

	if ($user==$username && $pass==$password) {
		session_start();
		$_SESSION['nama']=$nama;
		$_SESSION['level']=$level;
		if ($level=='admin') {
			echo "<meta http-equiv='refresh' content='0; url=admin/index.php'>";
		}
		else {
			echo "<script>alert('Anda berhasil Log In. Sebagai : $nama');</script>";
			echo "<meta http-equiv='refresh' content='0; url=guru/index-guru.php'>";
	
		}
	} else {
			echo "<meta http-equiv='refresh' content='0; url=index.php'>";
			echo "<script>alert('Username dan password anda salah, Silahkan login kembali !');</script>";
	}
	
	
}

?>