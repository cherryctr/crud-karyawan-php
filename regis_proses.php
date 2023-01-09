<?php

session_start();

include 'koneksi.php';

$nik	= $_POST['nik'];
$password	= $_POST['password'];
$nama_karyawan = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$tgl_masuk = $_POST['tgl_masuk'];
$divisi = $_POST['divisi'];
// $query = "INSERT INTO users(username, password,name,surname,email,role)VALUES('$username', '$password','$name','$lastname','$email','$role')";

$sql	= "INSERT INTO tb_karyawan (nik,password,nama_karyawan,jabatan,tgl_masuk,divisi)
VALUES ('$nik','$password','$nama_karyawan','$jabatan','$tgl_masuk','$divisi')";

$qmember = $connect->query($sql);
// echo $qmember;exit;
header("location:daftar_karyawan/home.php");

// if($cek > 0){

// 	$row = mysqli_fetch_assoc($qmember);
// 	$_SESSION['nik'] = $nik;
// 	//$_SESSION['level'] = $row['nama_karyawan'];
// 	$_SESSION['status'] = "login";

	
	
// }   

?>