<?php
include "../db/koneksi.php"; 
$Nim            =$_POST['nim'];   
$Name           = $_POST['nama_lengkap'];
$Tempat_lahir   = $_POST['tempat_lahir'];
$Tanggal_lahir  = $_POST['tanggal_lahir'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$agama          = $_POST['agama'];
$Namaortu       = $_POST['nama_orangtua'];
$Alamatortu     = $_POST['alamat_orangtua'];
$Alamatmhs      = $_POST['alamat_mahasiswa'];
$no_telpon      = $_POST['no_telepon'];
$JudulTA        = $_POST['judul_TA'];
$Dospem1        = $_POST['dosen_pembimbing_1'];
$Dospem2        = $_POST['dosen_pembimbing_2'];
$TotalSKS       = $_POST['total_sks'];
$tanggal_wisuda = $_POST['tanggal_wisuda'];
$ipk            = $_POST['ipk'];
mysqli_query($con,"UPDATE tb_alumni SET 
            nim = '$Nim', 
            nama_lengkap = '$Name', 
            tempat_lahir = '$Tempat_lahir',
            tanggal_lahir = '$Tanggal_lahir',
            jenis_kelamin = '$jenis_kelamin',
            agama = '$agama',
            nama_orangtua = '$Namaortu',
            alamat_orangtua = '$Alamatortu',
            alamat_mahasiswa = '$Alamatmhs',
            no_telepon = '$no_telpon',
            judul_TA ='$JudulTA',
            dosen_pembimbing_1 ='$Dospem1',
            dosen_pembimbing_2 ='$Dospem2',
            total_sks  = '$TotalSKS',
            tanggal_wisuda = '$tanggal_wisuda',
            ipk = '$ipk' where nim='$Nim'");
echo"<script>alert('Data Berhasil DiUpdate');
                            window.location=('profil_alumni.php')</script>";

?>