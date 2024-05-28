<?php

//membuat koneksi ke database
$con = mysqli_connect("localhost", "root", "", "tracer_study_new");
//variabel nim yang dikirimkan form.php
$email = $_GET['email'];

//mengambil data
$query = mysqli_query($con, "SELECT * FROM tb_tracerstudy LEFT JOIN tb_alumni ON tb_tracerstudy.nim= tb_alumni.nim WHERE email='$email'");
$mahasiswa = mysqli_fetch_array($query);
$data = array(
            'id_tracer'    =>  @$mahasiswa['id_tracer'],);

//tampil data
echo json_encode($data);
?>