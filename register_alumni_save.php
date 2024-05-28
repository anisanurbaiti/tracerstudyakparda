<?php
include "db/koneksi.php";
$Nim	    	= $_POST['nim'];
$Name			= $_POST['nama_lengkap'];
$Tempat_lahir	= $_POST['tempat_lahir'];
$Tanggal_lahir	= $_POST['tanggal_lahir'];
$jenis_kelamin	= $_POST['jenis_kelamin'];
$agama	    	= $_POST['agama'];
$Namaortu	    = $_POST['nama_orangtua'];
$Alamatortu	    = $_POST['alamat_orangtua'];
$Alamatmhs	    = $_POST['alamat_mahasiswa'];
$no_telpon		= $_POST['no_telepon'];
$Email	    	= $_POST['email'];
$Password       = $_POST['password'];
$JudulTA	    = $_POST['judul_TA'];
$Dospem1	    = $_POST['dosen_pembimbing_1'];
$Dospem2	    = $_POST['dosen_pembimbing_2'];
$TotalSKS	    = $_POST['total_sks'];
$tanggal_wisuda	= $_POST['tanggal_wisuda'];
$ipk		    = $_POST['ipk'];
$varString		= $Name;
$varLength		= strlen($varString);
$cekDuplikatData= mysqli_num_rows(mysqli_query($con,"SELECT * from tb_alumni where nim='$Nim'"));
//cek apakah data pernah di input
if ($cekDuplikatData  > 0 ){
	echo"<script>alert('Maaf,Nim yang anda masukkan sudah terdaftar');window.location.href='register_alumni.php';</script>";
}
else if($Name == ""){
	echo"<script>alert('Data tidak boleh kosong');window.location.href='register_alumni.php';</script>";
}
else if($varLength<3){
	echo"<script>alert('Nama kurang panjang');window.location.href='register_alumni.php';</script>";
}
else{
	$hasil	= mysqli_query($con,"INSERT INTO tb_alumni (nim,nama_lengkap,tempat_lahir,tanggal_lahir,jenis_kelamin,agama,nama_orangtua,alamat_orangtua,alamat_mahasiswa,no_telepon,email,password,judul_TA,dosen_pembimbing_1,dosen_pembimbing_2,total_sks,tanggal_wisuda,ipk) VALUES
('$Nim','$Name','$Tempat_lahir','$Tanggal_lahir','$jenis_kelamin','$agama','$Namaortu','$Alamatortu','$Alamatmhs','$no_telpon','$Email', md5('$Password'), '$JudulTA','$Dospem1','$Dospem2','$TotalSKS','$tanggal_wisuda','$ipk')");
	  if ($hasil) {
       echo '<script>alert("Pendaftaran Berhasil."); document.location="login.php";</script>';
                } else {
                         echo '<script>alert("Pendaftaran Gagal."); document.location="register.php";</script>';
                    } 
                }

?>


