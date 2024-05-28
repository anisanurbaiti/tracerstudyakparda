<?php include "db/koneksi.php";
// $id = $_GET['MnoQtyPXZORTE'];  
$id=$_POST['email_perusahaan'];
$var_UserPassword=md5($_POST['password']);
$query=mysqli_query($con,"UPDATE tb_perusahaan set 
  email_perusahaan='$id', 
  password='$var_UserPassword' 
  where email_perusahaan='$id'");
  if ($query){
        echo"<script>alert('Password Anda Berhasil Di Ubah');
   window.location=('login.php')</script>";
    }else{
        echo "<script>alert('Password Gagal Di Ubah');<script>";
    }
?>