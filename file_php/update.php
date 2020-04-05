<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$password = $_POST['password'];
$kelas = $_POST['kelas'];
$jeniskelamin = $_POST['jeniskelamin'];
$programstudi = $_POST['programstudi'];
$tempatlahir = $_POST['tempatlahir'];
$tanggallahir = $_POST['tanggallahir'];
$handphone = $_POST['handphone'];
$email = $_POST['email'];
$whatsapp = $_POST['whatsapp'];
$facebook = $_POST['facebook'];
$instagram = $_POST['instagram'];
$alamat = $_POST['alamat'];

// update data ke database
mysqli_query($koneksi,"update mahasiswa set nama='$nama', password='$password', kelas='$kelas', jeniskelamin='$jeniskelamin', programstudi='$programstudi', tempatlahir='$tempatlahir', tanggallahir='$tanggallahir', handphone='$handphone', email='$email', whatsapp='$whatsapp', facebook='$facebook', instagram='$instagram', alamat='$alamat' where nim='$nim'");

// mengalihkan halaman kembali ke index.php
header("location:profil_mahasiswa.php");

?>