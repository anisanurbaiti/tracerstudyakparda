<?php
  include '../db/koneksi.php';
  if(isset($_POST['update'])){
    $id_low      = $_POST['id_lowongan'];
    $tglbuat     = $_POST['tanggal_buat'];
    $tglberakhir = $_POST['tanggal_berakhir'];
    $query="UPDATE tb_lowongan SET  
            id_lowongan='$id_low',   
            tanggal_buat='$tglbuat',  
            tanggal_berakhir = '$tglberakhir'";
            $query .= "WHERE id_lowongan = '$id_low'";
  $result = mysqli_query($con, $query);
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($con).
                             " - ".mysqli_error($con));
      } else {
          header("location:lowongan_kerja.php?init=Berhasil Di Update");
      }
    }
?>