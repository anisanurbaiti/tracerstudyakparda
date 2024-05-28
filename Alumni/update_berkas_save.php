<?php
include '../db/koneksi.php';
if(isset($_POST['update'])){
$id                =$_POST['id_berkas'];
$Nim               =$_POST['nim'];
$tglapply          =$_POST['tanggal_apply'];
$idlok             =$_POST['id_lowongan'];
$idper             =$_POST['id_perusahaan'];
$status            =$_POST['status_berkas'];
@$keterangan       =$_POST['keterangan'];
 $ktp   = $_FILES['ktp']['name'];   
    if($ktp!= "") {
    $ekstensi_diperbolehkan = array('png','jpg'); 
    $x = explode('.', $ktp); 
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['ktp']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$ktp; 
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
      move_uploaded_file($file_tmp, '../berkas/'.$nama_gambar_baru);
      //script upload ijazah tipe pdf
if (isset($_FILES['ijazah']['name']))
		{
		$ijazah = $_FILES['ijazah']['name'];
		$file_tmp = $_FILES['ijazah']['tmp_name'];
		move_uploaded_file($file_tmp,"../berkas/".$ijazah);
//script upload transkip tipe pdf
if (isset($_FILES['transkip']['name']))
		{
		$transkip = $_FILES['transkip']['name'];
		$file_transkip = $_FILES['transkip']['tmp_name'];
		move_uploaded_file($file_transkip,"../berkas/".$transkip);
		//script upload CV tipe pdf
if (isset($_FILES['CV']['name']))
		{
		$CV = $_FILES['CV']['name'];
		$file_CV = $_FILES['CV']['tmp_name'];
		move_uploaded_file($file_CV,"../berkas/".$CV);
		//script upload SURAT OJT tipe pdf
if (isset($_FILES['surat_OJT']['name']))
		{
		$surat_OJT = $_FILES['surat_OJT']['name'];
		$file_surat_OJT = $_FILES['surat_OJT']['tmp_name'];
		move_uploaded_file($file_surat_OJT,"../berkas/".$surat_OJT);

	//script upload resume tipe pdf
if (isset($_FILES['resume']['name']))
		{
		$resume = $_FILES['resume']['name'];
		$file_resume = $_FILES['resume']['tmp_name'];
		move_uploaded_file($file_resume,"../berkas/".$resume);		
//insert ke database
 $query  = "UPDATE tb_berkas_pelamar SET       
            nama_lengkap = '$Namalengkap', 
            email = '$email',
            username = '$username',  
            photo = '$nama_gambar_baru'";
            $query .= "WHERE id_berkas = '$id'";
            $result = mysqli_query($con, $query);
              if(!$result){
                die ("Query gagal dijalankan: ".mysqli_errno($con).
                     " - ".mysqli_error($con));
                } else {
                   echo "<script>alert('Riwayat Lamaran Berhasil Di Update');window.location='riwayat_lamaran_view.php';</script>";
                    }
              } else {     
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='riwayat_lamaran_update.php';</script>";
              }
    } else {
      //query ubah jika tanpa mengubah foto
       $query  = "UPDATE tb_berkas_pelamar SET       
            nama_lengkap = '$Namalengkap', 
            email = '$email',
            username = '$username'";
            $query .= "WHERE id_berkas = '$id'";
      $result = mysqli_query($con, $query);
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($con).
                             " - ".mysqli_error($con));
      } else {
         echo "<script>alert('Riwayat Lamaran Berhasil Di Update');window.location='riwayat_lamaran_view.php';</script>";
      }
    }
?>
