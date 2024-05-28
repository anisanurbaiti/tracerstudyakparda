<?php
include "../db/koneksi.php";
session_start();
$VarUsername=$_POST['username'];
$VarPassword=md5($_POST['password']);
$tampil=mysqli_query($con,"SELECT * from tb_admin where username='$VarUsername'and password='$VarPassword'");
$coba=mysqli_num_rows($tampil);
if ($coba==1){
	 $_SESSION['username']=$VarUsername;
	echo "<script>alert('Anda Berhasil Login'); window.location=('dashboard.php')</script>";
}else if ($coba!=1){
	echo "<script>alert('Gagal Login, Cek username dan password Anda'); window.location=('index.php')</script>";
}else
	echo "<script>alert('Gagal Login'); window.location=('index.php')</script>";
?>


