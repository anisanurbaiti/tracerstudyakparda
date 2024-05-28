<?php 
session_start();
  include "../db/koneksi.php"; 
   $id = $_GET['id_lowongan'];
   $result = mysqli_query($con, "DELETE FROM tb_lowongan WHERE id_lowongan= '$id'");
        if (!$result) {
            echo"<script>alert('Data Gagal di hapus');
        window.location=('lowongan_kerja.php')</script>";
		} else {
           echo"<script>alert('Data Berhasil Terhapus');
       window.location=('lowongan_kerja.php')</script>";
	}
?>