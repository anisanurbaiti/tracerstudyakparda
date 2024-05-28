<?php
  include "../db/koneksi.php";
$get_id=$_GET['id_perusahaan'];
$sql = "UPDATE tb_perusahaan SET status ='Pending' WHERE id_perusahaan='$get_id' ";
 mysqli_query($con,$sql);
echo "<script>alert('Berhasil Di Ubah !'); window.location='data_perusahaan.php'</script>";
?>

