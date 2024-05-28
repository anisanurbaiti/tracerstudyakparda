<?php
include "db/koneksi.php";
if (isset($_POST['save'])) {
 $nis = $_POST['id_tracer'];
 $email = $_POST['email'];
 $query = mysqli_query($con, "SELECT * FROM tb_tracerstudy LEFT JOIN tb_alumni ON tb_tracerstudy.nim= tb_alumni.nim WHERE id_tracer='$nis' and email='$email'"); 
 if($query->num_rows > 0) {
  echo "<script>alert('Anda sudah pernah mengisi kuesioner'); window.location=('data_kuesioner.php?id_tracer=$nis')</script>" .$nis;
    }else {
		echo "<script>alert('Anda Belum Pernah Mengisi, Silahkan Login Terlebih Dahulu'); window.location=('login.php')</script>";
	}
 }
?>
