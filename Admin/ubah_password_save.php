<?php 
include "../db/koneksi.php";
$id=$_POST['id_admin'];
$Password=md5($_POST['password']);
$query=mysqli_query($con,"UPDATE tb_admin set 
  id_admin='$id', 
  password='$Password' 
  where id_admin='$id'");
  if ($query){
        echo"<script>alert('Password Anda Berhasil Di Ubah');
   window.location=('dashboard.php')</script>";
    }else{
        echo "<script>alert('Password Gagal Di Ubah');<script>";
    }
?>