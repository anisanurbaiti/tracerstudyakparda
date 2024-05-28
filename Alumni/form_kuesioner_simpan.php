<?php
include '../db/koneksi.php';
if ($_POST['simpan']) {
        @$Nim = $_POST['nim'];
        @$TglBuat = date ('Y-m-d');
        @$P1 = $_POST['P1'];
        @$P2 = $_POST['P2'];
        @$P3 = $_POST['P3'];
        @$P4 = $_POST['P4'];
        @$P5 = $_POST['P5'];
        @$P6 = $_POST['P6'];
        @$P7 = $_POST['P7'];
        @$P8 = $_POST['P8'];
        @$P9 = $_POST['P9'];
        @$P10 = $_POST['P10'];
        @$P11 = $_POST['P11'];
        @$P12 = $_POST['P12'];
        @$P13 = $_POST['P13'];
        @$P14 = $_POST['P14'];
        @$P15 = $_POST['P15'];
        @$P16 = $_POST['P16'];
        @$opsi_1 = $_POST['opsi_1'];
        @$opsi_2 = $_POST['opsi_2'];
        @$opsi_3 = $_POST['opsi_3'];
        @$opsi_4 = $_POST['opsi_4'];
        @$opsi_5 = $_POST['opsi_5'];
        @$opsi_6 = $_POST['opsi_6'];
        @$opsi_7 = $_POST['opsi_7'];
        @$opsi_8 = $_POST['opsi_8'];
        @$opsi_9 = $_POST['opsi_9'];
        @$opsi_10 = $_POST['opsi_10'];
        @$opsi_11 = $_POST['opsi_11'];
        @$opsi_12 = $_POST['opsi_12'];
        @$opsi_13 = $_POST['opsi_13'];
        @$pesan     = $_POST['pesan'];
        @$kesan     = $_POST['kesan'];
        $varString          = $Nim;
        $varLength          = strlen($varString);
        $cekDuplikatData            = mysqli_num_rows(mysqli_query($con,"SELECT * from tb_tracerstudy where nim='$Nim'"));
if ($cekDuplikatData > 0 ){
    echo"<script>alert('Maaf, Anda sudah pernah mengisi kuesioner');window.location.href='form_kuesioner.php';</script>";
}
else if($Nim == ""){
    echo"<script>alert('Lengkapi data terlebih dahulu');window.location.href='form_kuesioner.php';</script>";
}
else{
    $sql = "INSERT INTO tb_tracerstudy (nim, tanggal, P1,P2,P3,P4,P5,P6,P7,P8,P9,P10,P11,P12,P13,P14,P15,P16,opsi_1,opsi_2,opsi_3,opsi_4,opsi_5,opsi_6,opsi_7,opsi_8,opsi_9,opsi_10,opsi_11,opsi_12,opsi_13,pesan,kesan) VALUES ('$Nim','$TglBuat','$P1','$P2','$P3','$P4','$P5','$P6','$P7','$P8','$P9','$P10','$P11','$P12','$P13','$P14','$P15','$P16','$opsi_1','$opsi_2','$opsi_3','$opsi_4','$opsi_5','$opsi_6','$opsi_7','$opsi_8','$opsi_9','$opsi_10','$opsi_11','$opsi_12','$opsi_13','$pesan','$kesan')";
   if (mysqli_query($con, $sql)) {
  $last_id = mysqli_insert_id($con);
  echo "<script>alert('Terimakasih, Anda Telah Mengisi Kuesioner'); window.location=('history_saya.php?id_tracer=$last_id')</script> " . $last_id;
} else {
  echo "<script>alert('Gagal Menyimpan'); window.location=('form_kuesioner.php')</script>";
}
}
}
?>
