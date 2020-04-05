<!DOCTYPE html>
<html>
<head>
	<title>aktif - www.malasngoding.com</title>
</head>
<body>
	<?php 
	session_start();
	include 'koneksi.php';

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['status']==""){
		header("location:index.php?pesan=gagal");
	}

	$username = $_SESSION['nim'];
	$login = mysqli_query($koneksi,"select * from mahasiswa where nim='$username'");
	while($tampil = mysqli_fetch_array($login)){

	?>
	<h1>Halaman Admin</h1>

	<p>selamat datang <b><?php echo $tampil['nama']; ?></b> </p>

	<p>Halo <b><?php echo $_SESSION['nim']; ?></b> Anda telah login sebagai 
		<b><?php echo $_SESSION['status']; ?></b>.</p>

<?php } ?>
	<a href="logout.php">LOGOUT</a>

	<br/>
	<br/>

	<a><a href="https://www.malasngoding.com/membuat-login-multi-user-level-dengan-php-dan-mysqli">Membuat Login Multi Level Dengan PHP</a> - www.malasngoding.com</a>
</body>
</html>