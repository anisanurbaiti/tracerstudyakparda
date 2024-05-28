<?php 
session_start();
  include "../db/koneksi.php"; 
   $id = $_GET['id_berkas'];
   $result = mysqli_query($con, "DELETE FROM tb_berkas_pelamar WHERE id_berkas= '$id'");
        if (!$result) {
            echo"<script>alert('Data Gagal di hapus');
        window.location=('data_pelamar.php')</script>";
		} else {
           echo"<script>alert('Data Berhasil Terhapus');
       window.location=('data_pelamar.php')</script>";
	}
?>