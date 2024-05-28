<?php
include 'header.php';
?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Detail Lowongan Kerja</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <?php
    if (isset($_GET['id_lowongan'])) {
        $id_loker    = $_GET['id_lowongan'];
    } else {
        die("Tidak ada data!");
    }
    include "../db/koneksi.php";
    $query            = mysqli_query($con, "SELECT * FROM tb_lowongan LEFT JOIN tb_perusahaan ON tb_perusahaan.id_perusahaan=tb_lowongan.id_perusahaan WHERE tb_lowongan.id_lowongan='$id_loker'");
    $row           =  mysqli_fetch_array($query);
    ?>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            background-color: #edf1f5;
            margin-top: 20px;
        }

        .card {
            margin-bottom: 30px;
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid transparent;
            border-radius: 0;
        }

        .card .card-subtitle {
            font-weight: 300;
            margin-bottom: 10px;
            color: #8898aa;
        }

        .table-product.table-striped tbody tr:nth-of-type(odd) {
            background-color: #f3f8fa !important
        }

        .table-product td {
            border-top: 0px solid #000000 !important;
            color: #000000 !important;
        }
    </style>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tanggal Post : <?php echo date('d F Y', strtotime($row["tanggal_buat"])); ?></h5>
                <div class="row">
                    <div class="col-lg-6">

                        <!-- Card with an image on top -->
                        <div class="card">
                            <!--  <img src="assets/img/card.jpg" class="card-img-top" alt="..."> -->
                            <img src=" ../images/<?php echo $row['photos']; ?>" class="card-img-top" alt="..." width="430px" height="600px">

                            <div class="card-body">
                                <h5 class="card-title"></h5>
                            </div>
                        </div><!-- End Card with an image on top -->
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <h3 class="box-title mt-2"><?php echo $row['judul'] ?></h3>
                        <hr>
                        <h2 class="badge bg-primary"><?php echo $row['nama_perusahaan'] ?></h2>
                        <hr>
                        <h5 class="box-title mt-2"><b>Posisi : </b> <?php echo $row['posisi'] ?></h5>
                        <hr>
                        <h5 class="box-title mt-2"><b>Deskripsi Pekerjaan : </b></h5>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-location text-success"></i><?php echo $row['deskripsi'] ?></li>
                        </ul>
                        <hr>
                        <h5 class="box-title mt-2"><b>Benefit / Gaji : </b></h5>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-location text-success"></i><?php echo $row['benefit'] ?></li>
                        </ul>
                        <hr>

                        <h5 class="box-title mt-2"><b>Lokasi / Penempatan</b></h5>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-location text-success"></i><?php echo $row['lokasi'] ?></li>
                        </ul>
                        <hr>
                        <h5 class="box-title mt-2"><b>Batas Lamaran</b></h5>
                        <ul class="badge bg-danger">
                            <li><i class="badge bg-danger"></i><?php echo date('d F Y', strtotime($row["tanggal_berakhir"])); ?></li>
                        </ul>

                        <div class="col-sm-10">
                            <a href="tambah_berkas.php?id_lowongan=<?php echo $row['id_lowongan']; ?>" class="btn btn-success" value="Kirimkan Lamaran" onClick="javascript:return confirm('Yakin Ingin Melamar ?');">Kirimkan Lamaran</a>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h3 class="box-title mt-5">Profile Perusahaan</h3>
                        <div class="table-responsive">
                            <table class="table table-striped table-product">
                                <tbody>
                                    <tr>
                                        <td width="390"><b>Nama Perusahaan :</b></td>
                                        <td><?php echo $row['nama_perusahaan'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Bidang Usaha :</b></td>
                                        <td><?php echo $row['bidang_usaha'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Deskripsi bidang :</b></td>
                                        <td><?php echo $row['deskripsi_bidang'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Alamat :</b></td>
                                        <td><?php echo $row['alamat'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Email :</b></td>
                                        <td><?php echo $row['email_perusahaan'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Telepon :</b></td>
                                        <td><?php echo $row['telepon'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Website :</b></td>
                                        <td><?php echo $row['website'] ?></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include 'footer.php';
?>