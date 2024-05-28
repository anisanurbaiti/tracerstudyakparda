<?php 
include "../db/koneksi.php";
$Nim=$_POST['nim'];
$Password=md5($_POST['password']);
$query=mysqli_query($con,"UPDATE tb_alumni set 
  nim='$Nim', 
  password='$Password' 
  where nim='$Nim'");
  if ($query){
        echo"<script>alert('Password Berhasil DiUpdate');
   window.location=('dashboard.php')</script>";
    }else{
        echo "<script>alert('Password Gagal DiUpdate');<script>";
    }
?>