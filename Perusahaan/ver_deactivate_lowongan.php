<?php
  include "../db/koneksi.php";
$get_id=$_GET['id_lowongan'];
$sql = "UPDATE tb_lowongan LEFT JOIN tb_perusahaan ON tb_perusahaan.id_perusahaan=tb_lowongan.id_perusahaan SET status_lowker='Expired' WHERE id_lowongan='$get_id'";
 mysqli_query($con,$sql);
echo "<script>alert('Berhasil Di Ubah !'); window.location='lowongan_kerja.php'</script>";
?>

