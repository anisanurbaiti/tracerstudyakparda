-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2024 pada 13.17
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracer_study_new`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` tinyint(6) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(13) NOT NULL,
  `password` char(32) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_lengkap`, `email`, `username`, `password`, `photo`) VALUES
(1, 'Admin1', 'admin230@gmail.com', 'Admin1', '2e33a9b0b06aa0a01ede70995674ee23', 'logo_akparda.jpg'),
(2, 'Admin321', 'Admin321@gmail.com', 'Admin321', '867828277d8660bbb44ebbd860d2f020', '220-messages-1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_alumni`
--

CREATE TABLE `tb_alumni` (
  `nim` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `agama` enum('Islam','Kristen','Katholik','Hindu','Budha') NOT NULL,
  `nama_orangtua` varchar(100) NOT NULL,
  `alamat_orangtua` mediumtext NOT NULL,
  `alamat_mahasiswa` mediumtext NOT NULL,
  `no_telepon` char(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` char(32) NOT NULL,
  `judul_TA` mediumtext NOT NULL,
  `dosen_pembimbing_1` varchar(50) NOT NULL,
  `dosen_pembimbing_2` varchar(50) NOT NULL,
  `total_sks` int(11) NOT NULL,
  `tanggal_wisuda` date NOT NULL,
  `ipk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_alumni`
--

INSERT INTO `tb_alumni` (`nim`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `nama_orangtua`, `alamat_orangtua`, `alamat_mahasiswa`, `no_telepon`, `email`, `password`, `judul_TA`, `dosen_pembimbing_1`, `dosen_pembimbing_2`, `total_sks`, `tanggal_wisuda`, `ipk`) VALUES
(170421793, 'Andi Setiawan', 'Yogyakarta', '1992-04-21', 'Laki-Laki', 'Katholik', 'Slamet Mulyono & Wagiah', 'Sudagaran TR 3 no.815, Tegalrejo,\r\nYogyakarta', 'Sutodirjan GT2 891, Gedongtengen,\r\nYogyakarta\r\n', '088216035087', 'andi.alusia18@gmail.com', '1217e328e8319231abc613efbe39371b', 'Upaya front desk agent untuk\r\nmeningkatkan kepuasan dalam pelayanan\r\ntamu dan meningkatkan pendapatan', 'I Ketut Suardana, S.ST. M.Sc', 'Nina Noviastuti, SP, M.Sc', 112, '2021-12-30', '2.75'),
(180421827, 'Yudanta Ari Widodo', 'Krajan', '1971-03-21', 'Laki-Laki', 'Islam', 'Martono Pawiro', 'Citra Ringin Mas Blok D 67 , Karangmojo Rt09/03 Purwomartani,Kalasan, Sleman,Yogyakarta 55571                              ', 'Citra Ringin Mas Blok D 67 , Karangmojo Rt09/03 Purwomartani,Kalasan, Sleman,Yogyakarta 55571', '081320745646', 'yudantaaw@gmail.com', 'd9b9cc2fa44d2a86b4c7ca127ff7f584', 'Peranan Cake Shop di Hotel Grand Artos Magelang', 'Nina Noviastuti, SP, M.Sc', 'I Ketut Suardana, S.ST. M.Sc', 112, '2021-12-30', '3.05'),
(190421853, 'Btarie Masitha ', 'Klaten', '1999-02-16', 'Perempuan', 'Islam', ' Hazil Aulia', 'Badegan, Bantul', 'Badegan, Bantul', '083867838862', 'tyasbtarieputri@gmail.com', 'e55262c53adac3313a49ec708ee50eeb', 'Peranan Digital Marketing Dalam\r\nMeningkatkan Revenue Ros-In Hotel Pada\r\nMasa Pandemi Covid-19', 'Nina Noviastuti, SP, M.Sc', 'Aditya Yuwana Nawing, S.T., M.Sc.', 112, '2022-12-30', ' 3.75'),
(190421854, 'Muhamad Fauzan Sulistya', 'Yogyakarta', '2002-03-11', 'Laki-Laki', 'Islam', 'Bambang Sulistyo', 'Jl Affanfi Santren Gg Menur No 19', 'Jl Affanfi Santren Gg Menur No 19', '089673743040', 'fauzansulistya02@gmail.com', '29e2da62fd17d5502bcfa86a0544f02c', 'Strategi bellboy dalam memberikan\r\npelayanan prima di hotel horison ultima\r\nriss yogyakarta', 'I Ketut Suardana, S.ST. M.Sc', 'Neneng Nurhayati, S. Sos, M.Si', 112, '2023-08-31', '3.19'),
(190421856, 'Ibnu Dariyanto', 'Klaten', '2001-05-20', 'Laki-Laki', 'Islam', 'Sudarman ', 'Gempol 01/02, Kebondalem Kidul,\r\nPrambanan, Klaten\r\n', 'Gempol 01/02, Kebondalem Kidul,\r\nPrambanan, Klaten\r\n', '0895414457878', 'ibnuprambanan86@gmail.com', '75f02636d389883462e22bd13a8c6055', 'Strategi Meningkatkan Hygiene Sanitasi\r\nDalam Pelayanan Di Rocket Chicken Breksi\r\nYogyakarta\r\n', 'Drs. H. Kukuh Setyoadmodjo, M.Pd', 'Humaera Silvia Maristy, S.Pd, M.Pd', 112, '2022-12-30', '3.07'),
(190421857, 'Widya Eva Ningrum', 'Temanggung', '2002-04-02', 'Perempuan', 'Islam', 'Jumiati', 'Pulengelo, Sidoharjo, Tepus, Kab. Gunung\r\nKidul, Prov. D.I. Yogyakarta', 'Pulengelo, Sidoharjo, Tepus, Kab. Gunung\r\nKidul, Prov. D.I. Yogyakarta', '085866175233', 'widyaeva970@gmail.com', '2d03dbce91cfeee5f6da364a2d61eaa5', 'Peran Hot Kitchen Dalam Proses Penyimpanan Bahan Makanan Yang Berkualitas Di Garden Palace Hotel Surabaya', 'I Ketut Suardana, S.ST. M.Sc', 'Humaera Silvia Maristy, S.Pd, M.Pd', 112, '2023-12-30', '3.65'),
(190421859, 'Jainal Abidin', 'Kediri', '1993-08-10', 'Laki-Laki', 'Islam', 'Wagito', 'Ngoto, Bangunharjo, Sewon, Bantul', 'Ngoto, Bangunharjo, Sewon, Bantul', '089539233379', 'janinalabidin21@gmail.com', 'b73dce9b838eb129dcda2be30a96e11c', 'Peranan Barista/Bartender Dalam Meracik Minuman Di Hotel Pandanaran Yogyakarta', 'Nina Noviastuti, SP, M.Sc', 'I Ketut Suardana, S.ST. M.Sc', 112, '2023-08-31', '2.64'),
(190421863, 'Hanifah Helmi Nurjanah', 'Sleman', '1999-09-09', 'Laki-Laki', 'Islam', ' Sugiharto', 'Randugunting 005/003, Tamanamartani,\r\nKalasan, Sleman, Yogyakarta', 'Randugunting 005/003, Tamanamartani,\r\nKalasan, Sleman, Yogyakarta', '085921780270', 'hanifahhelmi1@gmail.com', 'd3aeee7cb0df9fa758a81fcd6f3edeb4', 'Analisis Strategi Pemasaran Dalam Upaya Meningkatkan Omset Penjualan Pada Masa Pandemi Covid-19 Di Warung Kopi Ingkar Janji Kulonprogo Yogyakarta', 'Nina Noviastuti, SP, M.Sc', 'I Ketut Suardana, S.ST. M.Sc', 112, '2022-08-30', '3.32'),
(190421868, 'Maryam Umi Khabibah', 'Temanggung', '1999-08-15', 'Perempuan', 'Islam', ' Bapak Walyoto', 'Dsn. Batikan rt 02 rw 04, Ds. Soropadan,\r\nKec. Pringsurat, Kab.Temanggung, Jawa\r\nTengah', 'Dsn. Batikan rt 02 rw 04, Ds. Soropadan,\r\nKec. Pringsurat, Kab.Temanggung, Jawa\r\nTengah', ' 08886465976', 'maryamumi08@gmail.com', 'cbcd3080f7159fcf0407845535d57609', 'Penerapan Standar Operasional Prosedur Front Office Departemen Dalam Memberikan Pelayanan Kepada Tamu Pada Masa Pandemi Di Hotel The Cube Yogyakarta', 'I Ketut Suardana, S.ST. M.Sc', 'Humaera Silvia Maristy, S.Pd, M.Pd', 112, '2024-05-16', '3.25'),
(190421869, 'Jumiati Tria Ningsih', 'Sleman', '2000-11-24', 'Perempuan', 'Islam', ' Rahmadi', ' Dondong Pelem, Tegaltirto, Kec. Berbah -\r\nKab. Sleman - Prov. D.I. Yogyakarta', ' Dondong Pelem, Tegaltirto, Kec. Berbah -\r\nKab. Sleman - Prov. D.I. Yogyakarta', ' 083121237169', 'Jumiati123@gmail.com', '372a17fc63f7e6e28759a7effb5aadf5', ' Metode Penyimpanan Bahan Baku Dan Produk Pastry Di Hotel Royal Malioboro', 'Drs. H Kukuh Setyoadmodjo', 'Neneng Nurhayati, S. Sos, M.Si', 112, '2023-08-31', '3.29'),
(190421870, 'Widyartama Rahardian', 'Sleman', '2001-05-02', 'Laki-Laki', 'Islam', 'Bambang Widanarko S.E.', 'Prawirodirjan Gm2/966 RT 40 RW 12, Kota Yogyakarta            ', 'Prawirodirjan Gm2/966 RT 40 RW 12,  Kota Yogyakarta  ', ' 087772651133', 'widyartama@icloud.com', '18cc7f5924ac56ebc1f2f168e1e06eb4', 'Kualitas Pelayanan Waiter Dan Waitress Dalam Meningkatkan Kepuasan Pelanggan Di Seruni Coffee Yogyakarta', 'Nina Noviastuti, SP, M.Sc', 'Drs. H Kukuh Setyoadmodjo', 112, '2022-11-22', '3.00'),
(190421874, ' Ayu Yuliana', 'Klaten', '2023-06-10', 'Perempuan', 'Islam', 'Purwanti', 'Tegalringin sapen manisrenggo klaten', ' Jl suryopranoto no 6 Pakualaman\r\nYogyakarta', ' 085709326335', 'Ayuliana039@gmail.com', 'a7e15c594e9a64e9504d96e06ac391cb', 'Standar operasional prosedur pembuatan mojito cocktail di kimaya hotel Yogyakarta', 'I Ketut Suardana, S.ST. M.Sc', 'Drs. H Kukuh Setyoadmodjo', 112, '2022-11-28', '2.91'),
(190421877, 'Restu Putri Rusdiana', 'Klaten', '1999-05-16', 'Perempuan', 'Islam', 'Rus Handoko ', 'Magersari 1, Bendan, Manisrenggo, Klaten,\r\nJawa Tengah, Jawa, Indonesia\r\n', 'Magersari 1, Bendan, Manisrenggo, Klaten,\r\nJawa Tengah, Jawa, Indonesia\r\n', ' 085754213136', 'putrusdiana026@gmail.com', 'cc9edc202fa437428dff256c87880678', ' Strategi Greeter Dalam Meningkatkan Pelayanan Prima Untuk Meminimalisir Komplain Di Abhayagiri Restaurant Yogyakarta ', 'Neneng Nurhayati, S. Sos, M.Si', 'Aditya Yuwana Nawing, S.T, M.Sc', 112, '2022-08-30', '3.50'),
(200421885, 'Atik purnama', 'Penago', '2002-05-13', 'Perempuan', 'Islam', 'Salikin', 'Penago baru kecamatan Ilir talo kabupaten Seluma provinsi Bengkulu \r\n', 'Santa kos putri seturan \r\n', '085783497975', 'atikpurnama2002@gmail.com', '05fc17aa5edb0a5c9ca417a99359c3c9', 'STRATEGI FRONT OFFICE DALAM  MENANGANI PESANAN TAMU UNTUK  MEMINIMALISIR KESALAHAN (STUDI  KASUS DI THE JAYAKARTA HOTEL AND  SPA YOGYAKARTA) Yogyakarta', 'Nina Noviastuti, SP, M.Sc', 'Winda Rosita Dewi, S.S., M.A', 110, '2023-08-31', '3.71'),
(200421895, 'Devi Fitri Mujianti', 'Yogyakarta', '2000-12-27', 'Perempuan', 'Islam', 'Agus Mujiyanto', ' Jl. Pringgodani Gg. Brojomusti PRM\r\nRelokasi R-12G Mrican RT16 RW 06,\r\nCaturtunggal Depok Sleman', ' Jl. Pringgodani Gg. Brojomusti PRM\r\nRelokasi R-12G Mrican RT16 RW 06,\r\nCaturtunggal Depok Sleman', '0895626887447', 'mujiantidevi99@gmail.com', '1215d4891b5044132793f152b83129a2', ' Upaya Kerja Room Attendant Dalam Menciptakan Suasana Kamar Yang Bersih Dan Nyaman Di Grand Keisha Hotel Yogyakarta ', 'I Ketut Suardana, S.ST. M.Sc', 'Winda Rosita Dewi, S.S., M.A', 110, '2023-08-31', '3.64'),
(200421900, 'Febri Naldi', 'Sijunjung', '2000-02-20', 'Laki-Laki', 'Islam', 'Masnun ', 'Sijunjung, Sumatera Barat ', ' Bintaran Kulon MG II/76 Yogyakarta ', '085264680548', 'fnaldi17@gmail.com', '388fa7f827496661dd121d82b7c7b63a', 'Peran Human Resources Department Dalam Meningkatkan Profesionalisme Karyawan Di THE 1O1 Hotel Yogyakarta Tugu', 'I Ketut Suardana, S.ST. M.Sc', 'Aditya Yuwana Nawing, S.T, M.Sc', 110, '2023-08-31', '3.70'),
(200421901, ' Meriana Maria Simarmata', 'Lae Manisan', '1999-06-02', 'Perempuan', 'Katholik', 'Nelson Simarmata', 'Seribudolok, Simalungun Sumatera\r\nUtara\r\n', 'Jalan Bintaran kulon yogyakarta ', '081225875832', 'merianasimarmata@gmail.com\r\n', '61957beb8d1d99148ceb554c4f844800', 'Pengaruh Keterbatasan Tea Spoon dan\r\nNakin terhadap kinerja waiter/waitres pada\r\nsaat high season di restoran kayu manis\r\nHotel Tentrem Yogyakarta ', 'I Ketut Suardana, S.ST. M.Sc', ' Neneng Nurhayati, S. Sos, M.Si', 110, '2023-08-31', '3.67'),
(200421904, 'Karizma Putri Ramadani', 'Banyuwangi', '2002-12-04', 'Perempuan', 'Islam', 'Suprapti Halimah ', 'Klitren lor GK 3 No.43 , Rt.02, Rw.01,\r\nGondokusuman, Yogyakarta', 'Klitren lor GK 3 No.43 , Rt.02, Rw.01,\r\nGondokusuman, Yogyakarta', '088232063991', 'karizma.putri45@gmail.com\r\n', 'df4347e58fbed2e7b2ec0d5f1c444525', 'Strategi Food and Beverage Servic\r\nDepartement dalam meningkatkan kualitas\r\npelayanan dan handling complaint di\r\nChingucafe Yogyakata\r\n', 'Nina Noviastuti, SP, M.Sc', 'Winda Rosita Dewi, S.S., M.A', 110, '2023-08-31', '3.59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` tinyint(6) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `id_admin` tinyint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul_berita`, `isi_berita`, `photo`, `tanggal`, `id_admin`) VALUES
(1, 'Makrab Mahasiswa Baru Tahun 2023/2024', '<p>Malam keakraban Mahasiswa Baru tahun ajaran 2023/2024 telah diselenggarakan pada tanggal 10-11 November 2023 di Desa Wisata Dewi Pinang, Donokerto, Kabupaten Sleman, Yogyakarta. Mahasiswa berkesempatan untuk belajar hal baru, berinteraksi dengan sesama rekan mahasiswa, dan yang paling asik adalah mengeksplor&nbsp;</p>', '781-berita_4.jpg', '2024-05-12', 2),
(2, 'UJI KOMPETENSI KEAHLIAN TAHUN 2023', '<p>Front Office, HouseKeeping, F&amp;B Service dan F&amp;B Product SELAMAT &amp; SUKSES Kepada Mahasiswa AKPARDA yang pada hari Selasa, 29 Agustus 2023 telah mengikuti Uji Kompetensi Keahlian : Front Office, House Keeping, F&amp;B Service dan F&amp;B Product Well Done Guys !!!</p>', '2-berita_1.jpg', '2024-05-12', 2),
(3, 'We are ready for PKKMB AKPARDA!!', '<p>YES.. We are ready for PKKMB AKPARDA!! Periode pengenalan kampus di AKPARDA akan dimulai pada hari Senin, 4 September 2023. Hai rekan MABA … yuk persiapkan dirimu untuk mendapatkan pengalaman yang menyenangkan dan seru selama 3 hari kedepan. Banyak manfaatnyaa</p>', '245-berita_2.png', '2024-05-12', 2),
(10, 'MAKRAB MABA TAHUN AJARAN 2023/2024', '<p>WISUDA DIPLOMA III AKPARDA PERIODE XVIII TA 2023/2024 diselenggarakan di Jambuluwuk Malioboro Hotel Yogyakarta pada tanggal 11 Oktober 2023</p><p>Selamat dan Sukses Mahasiswa AKPARDA yang telah Wisuda</p>', '18-berita_3.jpg', '2024-05-12', 2),
(12, 'Serah Terima Jabatan Direktur ', '<p>Selamat Kepada Bapak Dr. (CAN) Wahyu Indro Widodo, SST., M.M.Par. sebagai Direktur Baru Akademi Pariwisata Dharma Nusantara Sakti (AKPARDA) untuk periode 2023 – 2027.Semoga Amanah dan bisa menjalankan tugas sesuai dengan tujuan yang akan dicapai.</p><p>Tidak lupa kami haturkan terima kasih kepada Ibu Nina Noviastuti, SP.,M.Sc atas dedikasinya sebagai Direktur AKPARDA selama 2 periode dan semoga kesuksesan selalu menyertai disetiap Langkah.</p>', '664071a7dee81.JPG', '2023-11-30', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berkas_pelamar`
--

CREATE TABLE `tb_berkas_pelamar` (
  `id_berkas` varchar(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `tanggal_apply` date NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `id_perusahaan` tinyint(6) NOT NULL,
  `ktp` varchar(100) NOT NULL,
  `ijazah` varchar(100) NOT NULL,
  `transkip` varchar(100) NOT NULL,
  `CV` varchar(100) NOT NULL,
  `surat_OJT` varchar(100) NOT NULL,
  `resume` varchar(100) NOT NULL,
  `status_berkas` enum('Menunggu','Di Terima','Di Tolak','') NOT NULL,
  `keterangan` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_berkas_pelamar`
--

INSERT INTO `tb_berkas_pelamar` (`id_berkas`, `nim`, `tanggal_apply`, `id_lowongan`, `id_perusahaan`, `ktp`, `ijazah`, `transkip`, `CV`, `surat_OJT`, `resume`, `status_berkas`, `keterangan`) VALUES
('BKS001', 190421857, '2024-05-26', 1, 1, 'KTP (1).jpg', 'Ijazah (1).pdf', 'Transkrip (1).pdf', 'Curricullum Vitae (1).pdf', 'Surat Ket OJT.pdf', 'Resume (1).pdf', 'Di Terima', 'ok berkas sudah lengkap'),
('BKS002', 190421870, '2024-05-26', 1, 1, 'KTP (1).png', 'Ijazah (2).pdf', 'Transkrip (2).pdf', 'Curricullum Vitae (2).pdf', 'Surat Ket OJT (2).pdf', 'Resume (2).pdf', 'Di Terima', 'ok semua berkas sudah lengkap'),
('BKS003', 180421827, '2024-05-26', 1, 1, 'KTP (2).jpg', 'Ijazah.pdf', 'Transkrip (3).pdf', 'Curricullum Vitae (3).pdf', 'Surat Ket OJT (3).pdf', 'Resume (3).pdf', 'Di Terima', 'ok semua berkas sudah lengkap'),
('BKS004', 200421885, '2024-05-26', 3, 3, 'KTP (1).png', 'Ijazah (1).pdf', 'Transkrip (4).pdf', 'Curricullum Vitae (4).pdf', 'Surat Ket OJT.pdf', 'Resume (4).pdf', 'Di Terima', 'Terimakasih berkas anda lengkap'),
('BKS005', 200421895, '2024-05-26', 3, 3, 'KTP (5).jpg', 'Ijazah (2).pdf', 'Transkrip (3).pdf', 'Curricullum Vitae (5).pdf', 'Surat Ket OJT (2).pdf', 'Resume (6).pdf', 'Di Terima', 'Terimakasih berkas anda lengkap'),
('BKS006', 190421859, '2024-05-26', 3, 3, 'KTP (2).jpg', 'Ijazah.pdf', 'Transkrip (2).pdf', 'Curricullum Vitae (5).pdf', 'Surat Ket OJT.pdf', 'Resume (7).pdf', 'Di Terima', 'okee');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_history_lamar`
--

CREATE TABLE `tb_history_lamar` (
  `id_history_lamar` varchar(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `id_perusahaan` tinyint(6) NOT NULL,
  `id_berkas` varchar(11) NOT NULL,
  `metode_interview` enum('ONLINE','OFFLINE','','') NOT NULL,
  `ket_interview` mediumtext NOT NULL,
  `tanggal_interview` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_history_lamar`
--

INSERT INTO `tb_history_lamar` (`id_history_lamar`, `nim`, `id_lowongan`, `id_perusahaan`, `id_berkas`, `metode_interview`, `ket_interview`, `tanggal_interview`) VALUES
('HIS001', 190421857, 1, 1, 'BKS001', 'OFFLINE', 'Silahkan saudara bertemu dengan bapak Aditama di ruang L 21. lt 4 Ruang HRD Recruitment', '2024-06-17'),
('HIS002', 190421870, 1, 1, 'BKS002', 'OFFLINE', 'Silahkan saudara bertemu dengan bapak Aditama di ruang L 21. lt 4 Ruang HRD Recruitment', '2024-06-17'),
('HIS003', 180421827, 1, 1, 'BKS003', 'OFFLINE', 'Silahkan saudara bertemu dengan bapak Aditama di ruang L 21. lt 4 Ruang HRD Recruitment', '2024-06-17'),
('HIS004', 200421885, 3, 3, 'BKS004', 'OFFLINE', 'Silahkan bawa semua berkas dan berteu dengan ibu diana di Ruang R1 Mawar, dengan membawa bolpoint dan catatan', '2024-06-20'),
('HIS005', 200421895, 3, 3, 'BKS005', 'OFFLINE', 'Silahkan bawa semua berkas dan berteu dengan ibu diana di Ruang R1 Mawar, dengan membawa bolpoint dan catatan', '2024-06-20'),
('HIS006', 190421859, 3, 3, 'BKS006', 'OFFLINE', 'Silahkan bawa semua berkas dan berteu dengan ibu diana di Ruang R1 Mawar, dengan membawa bolpoint dan catatan', '2024-06-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lowongan`
--

CREATE TABLE `tb_lowongan` (
  `id_lowongan` int(11) NOT NULL,
  `id_perusahaan` tinyint(6) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `posisi` varchar(50) NOT NULL,
  `benefit` varchar(50) NOT NULL,
  `tanggal_buat` date NOT NULL,
  `tanggal_berakhir` date NOT NULL,
  `deskripsi` mediumtext NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `photos` text NOT NULL,
  `status_lowker` enum('Aktif','Expired','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_lowongan`
--

INSERT INTO `tb_lowongan` (`id_lowongan`, `id_perusahaan`, `judul`, `posisi`, `benefit`, `tanggal_buat`, `tanggal_berakhir`, `deskripsi`, `lokasi`, `photos`, `status_lowker`) VALUES
(1, 1, 'DI butuhkan Segera Front Desk Agent', 'Front Desk Agent', ' 1.000.000 > 3.000.000', '2024-04-01', '2024-05-31', '<ol><li>Sistem Kerja Full Time</li><li>Gender: Pria/Wanita</li><li>Benefit : Gaji Pokok 2 Juta&nbsp;</li><li>Bonus BPJS Jenjang karir&nbsp;</li><li>Syarat Pekerjaan Pendidikan Min. SMA/SMK/D3</li><li>Bahasa Inggris Aktif&nbsp;</li><li>Berpengalaman minimal 1 tahun dibidang yang sama (diutamakan)</li><li>Menguasai Ms Office</li><li>Memiliki komunikasi yang baik&nbsp;</li><li>Dapat bekerja secara individu maupun team&nbsp;</li><li>Berkomitmen min. 6 bulan</li><li>Mampu menangani complain dengan baik.&nbsp;</li><li>Bersedia bekerja 15hari/Bulan (24jam</li></ol>', 'Kota Yogyakarta', '384-469-java-villas-hotel-yogyakarta-291118.png', 'Aktif'),
(2, 2, 'Lowongan Kerja PT Kereta Api Pariwisata', 'Customer Service', 'Kompetitif', '2024-02-28', '2024-04-03', '<p>Kualifikasi Umum:</p><ul><li>Pendidikan Min SMA/SMK/D3</li><li>Warga Negara Indonesia</li><li>Sehat jasmani dan Rohani</li><li>Belum Menikah</li><li>Berkelakuan Baik</li><li>Berkelakuan baik yang dibuktikan dengan surat keterangan dari kepolisian yang masih berlaku</li><li>IPK minimal 2.75</li><li>Tinggi badan minimal Pria 165 cm dan Wanita 158 cm</li><li>Dapat Berkomunikasi Bahasa Inggris Dengan Baik</li><li>Seluruh proses tahapan seleksi TIDAK DIPUNGUT BIAYA APAPUN.</li></ul>', 'Stasiun Besar Bandung, Jawa Barat', '732-127-yellowstar.jpg', 'Expired'),
(3, 3, 'We Are Hiring Full Time', 'Housekeeping Hotel', 'Kompetitif', '2024-04-01', '2024-05-20', '<p>Persyaratan Umum :</p><ol><li>Mampu Bekerja Full Time</li><li>Mampu Bekerja dibawah tekanan</li><li>Memiliki Etika dan Komunikasi yang baik</li><li>Mampu Bekerja dalam tim</li><li>Warga Negara Indonesia</li><li>Pria Min Usia 18 Tahun</li><li>Lebih Familiar dengan Operasional Villa/Tempat Penginapan</li><li>Pendidikan Min SMA/SMK/D3 Perhotelan</li></ol>', 'Jl. Kebon Agung, Karang Geneng, Sendangadi, Kec. Mlati. Kab Sleman', '673-181-gamaya villa.jpg', 'Expired'),
(4, 1, 'Lowongan Kerja Administrasi', 'Administrasi', '1.000.000 > 3.000.000', '2024-04-30', '2024-06-20', '<p><strong>Kualifikasi:</strong></p><ul><li>Jenis Kelamin: Wanita</li><li>Berpengalaman minimal selama 1 tahun di posisi yang sama</li><li>Jujur, Teliti, disiplin dan Inisiatif.</li><li>Paham job deskripsi</li><li>Sistem Kerja Full-Time</li></ul>', 'Prawirotaman 2, Jl. Gerilya No. 460, Brontokusuman, Mergangsan, Yogyakarta', '228-javavilla.jpg', 'Aktif'),
(6, 1, 'DI butuhkan 2 orang Karyawan', 'Marketing', ' 1.000.000 > 3.000.000', '2024-05-27', '2024-06-30', '<p>Kualifikasi :</p><ul><li>Wanita usia max 28 tahun</li><li>Jujur, teliti, mandiri dan inisiatif.</li><li>Memahami Job Deskripsi</li><li>Fasih berbahasa inggris dengan baik</li><li>Domisili Yogyakarta</li><li>Memiliki Sim C</li><li>Memahami media sosial</li></ul>', 'Java Villa Resort dan Boutique, Yogyakarta', '9-2024-05-27_122342.jpg', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perusahaan`
--

CREATE TABLE `tb_perusahaan` (
  `id_perusahaan` tinyint(6) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `bidang_usaha` varchar(100) NOT NULL,
  `deskripsi_bidang` mediumtext NOT NULL,
  `alamat` mediumtext NOT NULL,
  `email_perusahaan` varchar(100) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `website` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` char(32) NOT NULL,
  `status` enum('Aktif','Pending','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_perusahaan`
--

INSERT INTO `tb_perusahaan` (`id_perusahaan`, `tanggal_daftar`, `nama_perusahaan`, `bidang_usaha`, `deskripsi_bidang`, `alamat`, `email_perusahaan`, `telepon`, `website`, `username`, `password`, `status`) VALUES
(1, '2024-03-19', 'Java Villas Boutique Hotel & Resto', 'Perhotelan', 'Java Villas Boutique Hotel & Resto merupakan pilihan tepat saat mengunjungi Yogyakarta. Kombinasi ideal antara harga, kenyamanan, dan kepraktisan, tempat ini menawarkan suasana yang sesuai untuk keluarga dengan fasilitas yang di desain untuk wisatawan seperti Anda.\r\n\r\nKamar memiliki penyejuk udara, dan Anda dapat menggunakan internet, karena wi-fi gratis tersedia, sehingga Anda dapat beristirahat dan menyegarkan diri dengan mudah.\r\n\r\nJava Villas Boutique Hotel & Resto menawarkan resepsionis 24 jam, layanan kamar, dan teras terbuka. ', 'Jl Gerilya No. 460, No 7, Kota Yogyakarta', 'rsv@javavillageresort.com', '+622744360900', 'www.villaboutique.com', 'javavilla321', '9859f1da0e547f283d0fb88cf71cbdc5', 'Aktif'),
(2, '2024-04-01', 'PT KERETA API PARIWISATA (KAI)', 'Transportasi', 'PT Kereta Api Pariwisata diakui sebagai salah satu pelopor pariwisata berbasis kereta api di Indonesia dan merupakan organisasi mapan dalam industri pariwisata di Indonesia.\r\nProduk jasa/layanan yang ditawarkan meliputi paket-paket wisata menggunakan kereta api sebagai transportasi utama didukung dengan angkutan lanjutan, serta layanan penunjangnya seperti ticketing domestik dan internasional, membuat paket wisata baik bagi individu maupun kelompok, akomodasi, pengurusan dokumen perjalanan (Paspor, Visa & asuransi) dll.', 'Stasiun Gondangdia Pintu Selatan, Jl. Srikaya I, RT.17/RW.6, Kb. Sirih, Kec. Menteng, Kota Jakarta Pusat', 'info@kawisata.id', '+6281112207227', 'https://kaiwisata.id/', 'info@kawisata', '897326d9c896484793cc923a1b86ed25', 'Aktif'),
(3, '2024-04-07', 'Gamaya Villa Jogja ', 'Perhotelan', 'Gamaya Villa aadalah tempat penginapan yg sangat cocok untuk staycation bareng keluarga. Kolam renang bersih,hanya saja ada beberapa spot yg harus ditingkatkan lagi walopun minor saja. Menginap di Gamaya Villa Jogja With Privatepool saat anda sedang berada di Mlati adalah sebuah pilihan cerdas. WiFi tersedia di seluruh area publik.', 'Jl. Kebon Agung, Karang Geneng, Sendangadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta', 'Gamayavillajogja@gmail.com', ' 0821-3768-1400', 'Gamaya Villa Jogja (@gamayajogja)', 'Gamaya123', '31a47ba24b3a2e9c33da6fda2ece5552', 'Aktif'),
(13, '2024-05-16', 'Tujuan Jogja Villas', 'Perhotelan', 'Tujuan Jogja Villas menawarkan akomodasi di Yogyakarta dan berjarak sejauh 2 km dari Jogja City Mall. Properti ini memiliki WiFi gratis. Setiap kamar dilengkapi dengan tempat tidur yang nyaman dan air conditioner. Shower tersedia di kamar mandi. Tamu dapat menikmati makanan di May Star Restauran. Pilihan tempat makan lain juga tersedia di sekitar properti. Fasilitas lain yang tersedia di Tujuan Jogja Villas adalah kolam renang. Bandara terdekat adalah Bandar Udara Internasional Yogyakarta, 12 km dari properti.', 'Jl. Magelang.Km 5, Kutu Asem, Sinduadi, Kec. Mlati, Kab. Sleman, Yogyakarta', 'tujuanjogjavillas@gmail.com', '085867889038', 'Tujuan Jogja Villas (@tujuanjogjavillas)', 'tujuanjogjavillas', '6c0c07d0b951230b5f4d437baf2a435c', 'Pending'),
(14, '2024-05-16', 'The Amartya Jogjakarta Hotel', 'Perhotelan', 'Hotel full service yang mengusung konsep industrial secara menyeluruh di padukan dengan konsep seni lokal oleh para seniman lokal. Setiap kamar di hotel ini di design secara berbeda art-work nya sehingga pengalaman yang di dapat juga berbeda pada saat menginap di hotel ini. Kamar hotel the Amartya Jogjakarta merupakan salah satu yang terbesar di yogyakarta dengan rata-rata 32m2 (ukuran asli).', 'Jl. Ring Road Barat No. 288, Gamping, Sleman, DIY', 'staywithus@theamartya.com', '+62-858 8319 2888', 'https://theamartya.com', 'staywithus', '1ff193915374c59eeba68a94563fcc40', 'Pending'),
(15, '2024-05-20', 'Unisi Hotel Malioboro', 'Perhotelan', 'Hotel kasual dan murah yang terletak di jalan ramai di pusat kota ini dapat diakses dengan berjalan kaki 8 dari stasiun kereta Yogyakarta dan Jalan Malioboro, yang merupakan jalan perbelanjaan utama di sini.\r\n\r\nKamar nyaman yang dilengkapi dengan mural dinding dari karya fotografi menyediakan Wi-Fi gratis, TV layar datar, serta fasilitas untuk membuat teh dan kopi. Room service tersedia 24 jam.\r\n\r\nTerdapat restoran yang nyaman', 'Jl. Ps. Kembang No.42, Sosromenduran, Gedong Tengen, Kota Yogyakarta, Daerah Istimewa Yogyakarta.', 'sm@unisimalioboro.com', '+62815 7809 0999', 'https://unisimalioboro.com/', 'unisima321', '705c784109bd8aa4032abadaa1bda293', 'Pending');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tracerstudy`
--

CREATE TABLE `tb_tracerstudy` (
  `id_tracer` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `P1` varchar(200) NOT NULL,
  `P2` varchar(200) NOT NULL,
  `P3` varchar(200) NOT NULL,
  `P4` varchar(200) NOT NULL,
  `P5` varchar(200) NOT NULL,
  `P6` varchar(200) NOT NULL,
  `P7` varchar(200) NOT NULL,
  `P8` varchar(200) NOT NULL,
  `P9` varchar(200) NOT NULL,
  `P10` varchar(200) NOT NULL,
  `P11` varchar(200) NOT NULL,
  `P12` varchar(200) NOT NULL,
  `P13` varchar(200) NOT NULL,
  `P14` varchar(200) NOT NULL,
  `P15` varchar(200) NOT NULL,
  `P16` varchar(200) NOT NULL,
  `opsi_1` varchar(200) NOT NULL,
  `opsi_2` varchar(200) NOT NULL,
  `opsi_3` varchar(200) NOT NULL,
  `opsi_4` varchar(200) NOT NULL,
  `opsi_5` varchar(200) NOT NULL,
  `opsi_6` varchar(200) NOT NULL,
  `opsi_7` varchar(200) NOT NULL,
  `opsi_8` varchar(200) NOT NULL,
  `opsi_9` varchar(200) NOT NULL,
  `opsi_10` varchar(200) NOT NULL,
  `opsi_11` varchar(200) NOT NULL,
  `opsi_12` varchar(200) NOT NULL,
  `opsi_13` varchar(200) NOT NULL,
  `pesan` mediumtext NOT NULL,
  `kesan` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tracerstudy`
--

INSERT INTO `tb_tracerstudy` (`id_tracer`, `nim`, `tanggal`, `P1`, `P2`, `P3`, `P4`, `P5`, `P6`, `P7`, `P8`, `P9`, `P10`, `P11`, `P12`, `P13`, `P14`, `P15`, `P16`, `opsi_1`, `opsi_2`, `opsi_3`, `opsi_4`, `opsi_5`, `opsi_6`, `opsi_7`, `opsi_8`, `opsi_9`, `opsi_10`, `opsi_11`, `opsi_12`, `opsi_13`, `pesan`, `kesan`) VALUES
(1, 200421885, '2023-11-27', 'Melanjutkan Kuliah', '', '', '', '', '', '', '', '', '', '', 'Sarjana Terapan (D4)', 'Universitas Teknologi Yogyakarta', '2023-11-14', 'Mengisi Kekosongan Menganggur ', 'Wiraswasta', 'Kurang', 'Cukup', 'Tinggi', 'Sedang', 'Cukup', 'Sedang', 'Sedang', 'Sedang', 'Tinggi', 'Tinggi', 'Sedang', 'Sedang', 'Tinggi', 'Semoga AKPARDA semakin maju dan jaya', 'Semoga AKPARDA semakin maju dan jaya'),
(2, 180421827, '2023-11-27', 'Bekerja', 'PT. Kereta Api Indonesia', 'General Manager', '2023-11-14', 'Facebook', 'Gaji memadai', 'Rp 5.000.000 - Rp 7.500.000 ', '2023-11-15', 'PT.Hotel Indonesia', 'Resepsionis', 'Rp 1.000.000 - Rp 5.000.000', '', '', '', '', '', 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Tinggi', 'Peningkatan mutu pendidikan', 'Peningkatan mutu pendidikan'),
(22, 190421857, '2024-04-15', 'Melanjutkan Kuliah', '', '', '', '', '', '', '', '', '', '', 'Sarjana Terapan (D4)', 'Universitas Teknologi Yogyakarta', '2024-04-23', 'Mengisi Kekosongan Menganggur ', 'Hotel/Restoran', 'Sedang', 'Kurang', 'Kurang', 'Tinggi', 'Cukup', 'Sedang', 'Sedang', 'Sedang', 'Tinggi', 'Sedang', 'Cukup', 'Sedang', 'Tinggi', 'Kuliah AKPARDA Fasilitasnya makin lengkap dan nyaman', 'Kuliah AKPARDA Fasilitasnya makin lengkap dan nyaman dan saya bangga kuliah di AKPARDA'),
(23, 190421854, '2024-04-24', 'Bekerja', 'PT. Hotel Tentrem', 'Administrasi', '2024-04-24', 'Teman', 'Gaji memadai', 'Rp 500.000 - Rp 1.000.000', '2024-04-26', 'PT.Hotel Indonesia', 'Karyawan Swasta', 'Rp 1.000.000 - Rp 5.000.000', '', '', '', '', '', 'Tinggi', 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'Tinggi', 'Cukup', 'Sedang', 'Tinggi', 'Tinggi', 'Sedang', 'Cukup', 'Tinggi', 'Kuliah AKPARDA Fasilitasnya makin lengkap dan nyaman dan saya bangga kuliah di AKPARDA', 'Kuliah AKPARDA Fasilitasnya makin lengkap dan nyaman dan saya bangga kuliah di AKPARDA'),
(24, 190421870, '2024-05-05', 'Bekerja', 'PT. Novotel Yogyakarta', 'Resepsionis', '2024-05-21', 'Website', 'Sesuai hati nurani', 'Rp 5.000.000 - Rp 7.500.000 ', '2024-05-21', 'PT. Rosalia Indah Yogya', 'Administrasi', 'Rp 1.000.000 - Rp 5.000.000', '', '', '', '', '', 'Sedang', 'Kurang', 'Sedang', 'Kurang', 'Kurang', 'Sedang', 'Tinggi', 'Kurang', 'Kurang', 'Cukup', 'Sedang', 'Sedang', 'Cukup', 'Kuliah AKPARDA Fasilitasnya makin lengkap dan nyaman dan saya bangga kuliah di AKPARDA', 'Kuliah AKPARDA Fasilitasnya makin lengkap dan nyaman dan saya bangga kuliah di AKPARDA'),
(25, 190421859, '2024-05-09', 'Bekerja', 'Fave Hotel Surakarta', 'Chef', '2024-01-25', 'Dosen', 'Mendapatkan pengalaman', 'Rp 500.000 - Rp 1.000.000', '', '', '', '', '', '', '', '', '', 'Sedang', 'Tinggi', 'Tinggi', 'Sedang', 'Cukup', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Tinggi', 'Sedang', 'Tinggi', 'Tinggi', 'AKPARDA keren dan bangga sekali ', 'AKPARDA makin maju dan fasilitasnya lengkap dan ramah bagi mahasiswa dan alumni');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_alumni`
--
ALTER TABLE `tb_alumni`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `tb_berkas_pelamar`
--
ALTER TABLE `tb_berkas_pelamar`
  ADD PRIMARY KEY (`id_berkas`),
  ADD KEY `nim` (`nim`),
  ADD KEY `id_lowongan` (`id_lowongan`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indeks untuk tabel `tb_history_lamar`
--
ALTER TABLE `tb_history_lamar`
  ADD PRIMARY KEY (`id_history_lamar`),
  ADD KEY `id_lowongan` (`id_lowongan`),
  ADD KEY `id_perusahaan` (`id_perusahaan`),
  ADD KEY `id_pelamar` (`id_berkas`),
  ADD KEY `nim` (`nim`);

--
-- Indeks untuk tabel `tb_lowongan`
--
ALTER TABLE `tb_lowongan`
  ADD PRIMARY KEY (`id_lowongan`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indeks untuk tabel `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indeks untuk tabel `tb_tracerstudy`
--
ALTER TABLE `tb_tracerstudy`
  ADD PRIMARY KEY (`id_tracer`),
  ADD KEY `nim` (`nim`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` tinyint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` tinyint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_lowongan`
--
ALTER TABLE `tb_lowongan`
  MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  MODIFY `id_perusahaan` tinyint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_tracerstudy`
--
ALTER TABLE `tb_tracerstudy`
  MODIFY `id_tracer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD CONSTRAINT `tb_berita_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `tb_admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_berkas_pelamar`
--
ALTER TABLE `tb_berkas_pelamar`
  ADD CONSTRAINT `tb_berkas_pelamar_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `tb_alumni` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_berkas_pelamar_ibfk_2` FOREIGN KEY (`id_lowongan`) REFERENCES `tb_lowongan` (`id_lowongan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_berkas_pelamar_ibfk_3` FOREIGN KEY (`id_perusahaan`) REFERENCES `tb_perusahaan` (`id_perusahaan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tb_history_lamar`
--
ALTER TABLE `tb_history_lamar`
  ADD CONSTRAINT `tb_history_lamar_ibfk_1` FOREIGN KEY (`id_berkas`) REFERENCES `tb_berkas_pelamar` (`id_berkas`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_history_lamar_ibfk_2` FOREIGN KEY (`id_lowongan`) REFERENCES `tb_lowongan` (`id_lowongan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_history_lamar_ibfk_3` FOREIGN KEY (`id_perusahaan`) REFERENCES `tb_perusahaan` (`id_perusahaan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_history_lamar_ibfk_4` FOREIGN KEY (`nim`) REFERENCES `tb_alumni` (`nim`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_lowongan`
--
ALTER TABLE `tb_lowongan`
  ADD CONSTRAINT `tb_lowongan_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `tb_perusahaan` (`id_perusahaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_tracerstudy`
--
ALTER TABLE `tb_tracerstudy`
  ADD CONSTRAINT `tb_tracerstudy_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `tb_alumni` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
