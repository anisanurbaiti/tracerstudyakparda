<?php
include "../db/koneksi.php"; 
if($_POST){
    //Ambil data dari form
$id         = $_POST['id_perusahaan'];   
$tanggal    = date ('d-m-Y');
$tgl        = $_POST['tanggal_daftar'];
$tanggal    = date('Y-m-d', strtotime($tgl));
$nama       = $_POST['nama_perusahaan'];
$bidang     = $_POST['bidang_usaha'];
$deskripsi  = $_POST['deskripsi_bidang'];
$alamat     = $_POST['alamat'];
$telepon    = $_POST['telepon'];
$website    = $_POST['website'];
$username   = $_POST['username'];
    //buat sql
    $sql="UPDATE tb_perusahaan SET id_perusahaan='$id',
        tanggal_daftar='$tanggal',
        nama_perusahaan='$nama',
        bidang_usaha='$bidang',
        deskripsi_bidang='$deskripsi',
        alamat='$alamat',
        telepon='$telepon',
        website='$website',
        username='$username'
        WHERE id_perusahaan='$id'";
    $query=  mysqli_query($con, $sql) or die ("SQL Edit User Error");
    if ($query){
        echo"<script>alert('Data Berhasil DiUpdate');
   window.location=('profil_perusahaan.php')</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>