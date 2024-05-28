<?php 
session_start();
  include "../db/koneksi.php"; 
   $id = $_GET['id_history_lamar'];
   $result = mysqli_query($con, "DELETE FROM tb_history_lamar WHERE id_history_lamar= '$id'");
        if (!$result) {
            echo"<script>alert('Data Gagal di hapus');
        window.location=('pelamar_diterima.php')</script>";
		} else {
           echo"<script>alert('Data Berhasil Terhapus');
       window.location=('pelamar_diterima.php')</script>";
	}
?>