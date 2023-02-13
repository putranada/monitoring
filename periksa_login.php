<?php
// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($conn, "SELECT * FROM pengguna WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
	session_start();
	$data = mysqli_fetch_assoc($login);
	$_SESSION['id'] = $data['id_user'];
	$_SESSION['username'] = $data['username'];
	$_SESSION['peran'] = $data['peran'];

	if ($data['peran'] == "ADMIN") {
		$_SESSION['status'] = "ADMIN_logedin";
		header("location:admin/index.php");
	} else if ($data['peran'] == "USER") {
		$_SESSION['status'] = "user_logedin";
		header("location:user/index.php");
	} else {
		header("location:index.php?alert=gagal");
	}
} else {
	header("location:index.php?alert=gagal");
}