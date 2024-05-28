<?php 
session_start();
  include "../db/koneksi.php";
   $code = $_GET['nim'];
   $varDelete = mysqli_query($con, "DELETE FROM tb_alumni WHERE nim = '$code'");
        if (!$varDelete) {
     header("location:data_alumni.php?init=Gagal Terhapus");
		} else {
       header("location:data_alumni.php?init=Berhasil Terhapus");
	}
?>