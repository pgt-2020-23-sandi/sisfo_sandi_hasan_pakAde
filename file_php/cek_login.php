<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from mahasiswa where nim='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['status']=="aktif"){

		// buat session login dan username
		$_SESSION['nim'] = $username;
		$_SESSION['status'] = "aktif";
		// alihkan ke halaman dashboard admin
		header("location:dashboard.php");

	// cek jika user login sebagai pegawai
	}else if($data['status']=="tidak aktif"){
		// buat session login dan username
		$_SESSION['nim'] = $username;
		$_SESSION['status'] = "tidak aktif";
		// alihkan ke halaman dashboard pegawai
		header("location:halaman_mahasiswa_tidak_aktif.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}

?>