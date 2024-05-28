<?php 
session_start();
  include "../db/koneksi.php"; 
   $code = $_GET['id_berita'];
   $varDelete = mysqli_query($con, "DELETE FROM tb_berita WHERE id_berita = '$code'");
        if (!$varDelete) {
           header("location:data_berita.php?init=Gagal di hapus");
		} else {
          header("location:data_berita.php?init=Berhasil Terhapus");
	}
?>