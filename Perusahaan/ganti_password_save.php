<?php 
include "../db/koneksi.php";
$id=$_POST['id_perusahaan'];
$Password=md5($_POST['password']);
$query=mysqli_query($con,"UPDATE tb_perusahaan set 
  id_perusahaan='$id', 
  password='$Password' 
  where id_perusahaan='$id'");
  if ($query){
        echo"<script>alert('Password Anda Berhasil Di Ubah');
   window.location=('dashboard.php')</script>";
    }else{
        echo "<script>alert('Password Gagal Di Ubah');<script>";
    }
?>