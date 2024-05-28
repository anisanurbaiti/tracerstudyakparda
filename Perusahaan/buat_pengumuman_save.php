<?php
include "../db/koneksi.php";
$id_his            =$_POST['id_history_lamar'];
$nim               =$_POST['nim'];
$idlok             =$_POST['id_lowongan'];
$idper             =$_POST['id_perusahaan']; 
$id                =$_POST['id_berkas'];
//file berkas
$metode            =$_POST['metode_interview']; 
$tanggalinterview  =$_POST['tanggal_interview']; 
@$ket_interview    =$_POST['ket_interview'];
$query="INSERT INTO tb_history_lamar (id_history_lamar,nim,id_lowongan,id_perusahaan,id_berkas,metode_interview,tanggal_interview,ket_interview) values ('$id_his','$nim','$idlok','$idper','$id','$metode','$tanggalinterview','$ket_interview')";      
$result= mysqli_query($con, $query);
echo"<script>alert('Pengumuman Berhasil Di Proses');
                        window.location=('data_pelamar.php')</script>";
?>

 


 
