<?php
include "db/koneksi.php";
if(isset($_POST['save'])){
$Tgl = date ('Y-m-d');
$Nama           = $_POST['nama_perusahaan'];
$bidang         = $_POST['bidang_usaha'];
$deskripsi      = $_POST['deskripsi_bidang'];
$alamat         = $_POST['alamat'];
$Email          = $_POST['email_perusahaan'];
$no_telpon      = $_POST['telepon'];
$web            = $_POST['website'];
$username       = $_POST['username'];
$password       = $_POST['password'];
$status         = $_POST['status'];    
$cekDuplikatData = mysqli_query($con, "SELECT * FROM tb_perusahaan WHERE email_perusahaan='$Email'") or die(mysqli_error($con));   
//cek apakah data pernah di input
      if(mysqli_num_rows($cekDuplikatData) == 0){
        $sql = mysqli_query($con, "INSERT INTO tb_perusahaan (tanggal_daftar,nama_perusahaan,bidang_usaha,deskripsi_bidang,alamat,email_perusahaan,telepon,website,username,password,status) VALUES('$Tgl','$Nama','$bidang','$deskripsi','$alamat','$Email','$no_telpon','$web','$username', md5('$password'), '$status')") or die(mysqli_error($con));
        if($sql){
          echo '<script>alert("Pendaftaran Berhasil, Silahkan Menunggu Proses Verifikasi."); document.location="login.php";</script>';
        }else{
           echo '<script>alert("Gagal mendaftar"); document.location="register.php";</script>';
        }
      }else{
        echo '<script>alert("Gagal, Nama Perusahaan sudah terdaftar."); document.location="register.php";</script>';
      }
    }
    ?>