<?php
include "../db/koneksi.php";
$id                =$_POST['id_berkas'];
$Nim               =$_POST['nim'];
$tglapply          =$_POST['tanggal_apply'];
$idlok             =$_POST['id_lowongan'];
$idper             =$_POST['id_perusahaan']; 
//file berkas
$ktp             =$_POST['ktp']; 
$ijazah            =$_POST['ijazah']; 
$transkip            =$_POST['transkip']; 
$cv             =$_POST['CV']; 
$surat             =$_POST['surat_OJT']; 
$resume            =$_POST['resume']; 
//data status dan keterangan, jika kosong bisa ke save
$status            =$_POST['status_berkas'];
@$keterangan       =$_POST['keterangan'];
 
$query="UPDATE tb_berkas_pelamar SET 
            id_berkas = '$id', 
            nim = '$Nim', 
            tanggal_apply = '$tglapply ',
            id_lowongan = '$idlok ',
            id_perusahaan = '$idper',
            ktp = '$ktp',
            ijazah = '$ijazah',
            transkip = '$transkip',
            CV = '$cv',
            surat_OJT = '$surat',
            resume = '$resume',
            status_berkas ='$status',
            keterangan = '$keterangan',
            id_berkas='$id' where id_berkas='$id'";
mysqli_query($con, $query);

 echo"<script>alert('Berhasil Di Proses');
                        window.location=('data_pelamar.php')</script>";
?>

 


 
