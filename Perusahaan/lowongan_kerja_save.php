<?php
  include "../db/koneksi.php"; 
    // $id_low             = $_POST['id_lowongan'];
    $id_perusahaan      = $_POST['id_perusahaan'];
    $namaloker          = $_POST['judul'];
    $posisi             = $_POST['posisi'];
    $benefit            = $_POST['benefit'];
    $TglBuat            = $_POST['tanggal_buat'];
    $TglExpired         = $_POST['tanggal_berakhir'];
    $Deskripsi          = $_POST['deskripsi'];
    $Lokasi             = $_POST['lokasi'];
    $gambar_produk      = $_FILES['photos']['name'];
    $status_lowker      = $_POST['status_lowker'];
if($gambar_produk != "") {
  $ekstensi_diperbolehkan = array('png','jpg'); 
  $x = explode('.', $gambar_produk); 
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['photos']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar_produk; 
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, '../images/'.$nama_gambar_baru); 
                  $query = "INSERT INTO tb_lowongan (id_perusahaan,judul,posisi,benefit,tanggal_buat,tanggal_berakhir,deskripsi,lokasi,photos,status_lowker) VALUES ('$id_perusahaan','$namaloker','$posisi','$benefit','$TglBuat','$TglExpired','$Deskripsi','$Lokasi','$nama_gambar_baru','$status_lowker')";
                  $result = mysqli_query($con, $query);
                
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($con).
                           " - ".mysqli_error($con));
                  } else {
                  
                    echo"<script>alert('Berhasil Tersimpan ');
                        window.location=('lowongan_kerja.php')</script>";
                  }
            } else {                 
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='lowongan_kerja_add.php';</script>";
            }
} else {
   $query = "INSERT INTO tb_lowongan (id_lowongan,id_perusahaan,judul,posisi,benefit,tanggal_buat,tanggal_berakhir,deskripsi,lokasi,photos,status_lowker) VALUES ('$id_low','$id_perusahaan','$namaloker','$posisi','$benefit','$TglBuat','$TglExpired','$Deskripsi','$Lokasi','$nama_gambar_baru','$status_lowker')";
                  $result = mysqli_query($con, $query);
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($con).
                           " - ".mysqli_error($con));
                  } else {
                    echo"<script>alert('Berhasil Tersimpan ');
                        window.location=('lowongan_kerja.php')</script>";
                  }
}
?>