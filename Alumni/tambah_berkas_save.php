<?php
include '../db/koneksi.php';
if(isset($_POST['save'])){
	 //FORM DATA PELAMAR
$errors = array();
$id                =$_POST['id_berkas'];
$Nim               =$_POST['nim'];
$tglapply          =$_POST['tanggal_apply'];
$idlok             =$_POST['id_lowongan'];
$idper             =$_POST['id_perusahaan'];
$status            =$_POST['status_berkas'];
@$keterangan       =$_POST['keterangan'];
//mengecek apakah id tsb pernah di input
$cekDuplikatData = "SELECT id_berkas FROM tb_berkas_pelamar WHERE id_berkas='$id'";
$resultt = $con->query($cekDuplikatData );
if($resultt->num_rows == 0) {
 //script upload KTP format jpg
$uploadOk = true;
$ekstensi =  array('png','jpg','jpeg','gif');
$image_name = $_FILES['ktp']['name'];
$ukuran = $_FILES['ktp']['size'];
$file_ktp = $_FILES['ktp']['tmp_name'];
$ext = pathinfo($image_name, PATHINFO_EXTENSION);
if(!in_array($ext,$ekstensi) ) {
	 echo"<script>alert('Ekstensi Gagal');
                        window.location=('tambah_berkas.php')</script>";
}else{
	if($ukuran <= 2097152){		//batas maksimal 2 mb
		move_uploaded_file($file_ktp,"../berkas/".$image_name);

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
$queryy  = "INSERT INTO tb_berkas_pelamar (id_berkas,nim,tanggal_apply,id_lowongan,id_perusahaan,ktp,ijazah,transkip,CV,surat_OJT,resume,status_berkas,keterangan) 
      VALUES ('$id','$Nim','$tglapply','$idlok','$idper','$image_name','$ijazah','$transkip', '$CV','$surat_OJT','$resume','$status','$keterangan')";
$result = mysqli_query($con, $queryy );
        if ($result) {          
     echo"<script>alert('Lampiran Berhasil Di Upload');
                        window.location=('riwayat_lamaran.php')</script>";
            exit;
        } else {
            die(mysqli_error($con));
        }
    }
}
 }
//penutup file
}
}
}
}
}
}
?>