-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jan 2023 pada 10.31
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(128) NOT NULL,
  `created` datetime DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `created`, `status`) VALUES
(1, 'Oragnisasi', NULL, 1),
(2, 'Ekstrakulikuler', NULL, 1),
(3, 'Olympiade Sains', '2022-07-30 11:32:49', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(5) NOT NULL,
  `nip` bigint(20) NOT NULL,
  `nama_pegawai` varchar(128) NOT NULL,
  `email` varchar(64) NOT NULL,
  `nohp` bigint(20) NOT NULL,
  `salary` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `nama_pegawai`, `email`, `nohp`, `salary`) VALUES
(1, 0, 'Yenni Siswanti', '', 0, ''),
(2, 0, 'Erlinawati', '', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_alumni`
--

CREATE TABLE `tbl_alumni` (
  `id_alumni` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) DEFAULT NULL,
  `nisn` bigint(20) DEFAULT NULL,
  `nama` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `tgl_lahir` varchar(64) NOT NULL,
  `alamat` text NOT NULL,
  `nama_instansi` varchar(256) NOT NULL,
  `t_msk` int(5) NOT NULL,
  `t_tmt` int(5) NOT NULL,
  `pekerjaan` varchar(64) NOT NULL,
  `prestasi` text NOT NULL,
  `img` varchar(128) DEFAULT NULL,
  `created` varchar(20) DEFAULT NULL,
  `modified` varchar(20) DEFAULT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `status` int(5) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_alumni`
--

INSERT INTO `tbl_alumni` (`id_alumni`, `username`, `password`, `nisn`, `nama`, `email`, `mobile`, `jenis_kelamin`, `tgl_lahir`, `alamat`, `nama_instansi`, `t_msk`, `t_tmt`, `pekerjaan`, `prestasi`, `img`, `created`, `modified`, `isDeleted`, `status`) VALUES
(68, 'agunglbn', '$2y$10$/kQ7x55q55XIeOAiysR.aOhNyPNuL9BH6rSEsFP/fhdfRG6H2UcNu', 981231232131, 'AgungFs', 'agung@gmail.com', '0890098900', 'L', '24/07/1977', 'Jalan Nuri Raya 209 Perumahan Sidomulyo', 'Universitas Riau', 2016, 2019, 'Mahasiswa', 'Debat, Karya Ilmia', 'Pas_Photo.jpg', '2022-06-29 07:48:49', '2022-12-05 18:54:32', 0, 1),
(73, 'aldops', '$2y$10$tuhXj7lIVxV4M9SSYeMto.X/BMIqDfiERRuyYLbakI7qw8QycPiHO', 62124123122, 'Aldo Fernando Silaban', 'aldoastek242@gmail.com', '0890098900', 'L', '2001-06-25', 'Jalan Melur Raya Pekanbaru', 'PT Jaya Serba Guna', 2010, 2013, 'Bekerja', '', 'aaaaaaaaaaaa2.jpg', '2022-07-13 04:47:06', '2022-Nov-18 18:24:16', 0, 1),
(75, 'santa25', '$2y$10$pObAPZ1W3MIA9/KOLe8FsOGjpmH4V0JCTg7KFblUQSFuq7d5aXHjm', 32423423424, 'Santa Putri', 'santa253@gmail.com', '0890098900', 'P', '12/03/1977', 'Jalan Pahlawan Perumah Citra No 198 Pekanbaru', 'PT Cahaya Sejahtera Jakarta', 2016, 2019, 'SMA', '', 'download_(1).jpeg', '2022-07-25 08:10:37', '2022-11-25 14:49:41', 0, 1),
(76, 'candra', '$2y$10$JUNwZVjjkaanX3Pj0xC3BOsnOxnVlYQKTnQWDhxALtLfTtfFTTz7O', 45232123213, 'Candra Khan', 'Candra22@gmail.com', '0890098900', 'L', '24/09/1988', 'Jalan Nuri Raya 209 Perumahan Sidomulyo', '-', 2005, 2008, 'Bekerja', '', 'download.jpeg', '2022-07-30 12:15:31', '2022-11-25 14:51:59', 0, 1),
(221, 'agungf', '$2y$10$asyNHHZoefKfTbfMdULacesDwDYd7u.O2cbG47DrNKP4QlKJULALW', 93215323443, 'Agung Ferdinan', 'agung22@gmail.com', '', 'L', '25/06/2001', 'Jalan parkit 8 Perumahan sidomulyo', 'Universitas Riau', 2013, 2016, 'Mahasiswa', '', 'default.jpg', '2022-11-23 03:37:52', '2022-11-25 14:50:29', 0, 1),
(222, 'admin', '$2y$10$xq6wvBO.tUg2cVllEJhae.Evvlc8kixt1laaMO5KpFZgL3pXe/4ka', 15252248, 'Agung Ferdinan', 'agungsilaban25@gmail.com', '0812898732', 'L', '23/04/2034', 'Jalan parkit 8 Perumahan sidomulyo', 'SMAN 4 Pekanbaru', 2013, 2016, 'SMA', '', '423c734e4ab4b4a17a4bf7a5c6b803dc1.jpg', '2022-11-25 14:51:02', '2022-11-25 15:03:24', 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `kategori` varchar(64) NOT NULL,
  `isi` text NOT NULL,
  `userid` int(5) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `img` varchar(128) NOT NULL,
  `created` varchar(20) NOT NULL,
  `modified` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`id`, `name`, `judul`, `kategori`, `isi`, `userid`, `status`, `img`, `created`, `modified`) VALUES
(16, 'System Administrator', 'Latihan Paduan Suara SMPN 25 Pekanbaru', 'Ekstrakulikuler', '<p>SMPN 25 Pekanbaru akan mengadakan latihan paduan suara untuk merayakan Acara 17 Agustus </p>', 5, 1, 'depositphotos_14171258-stock-illustration-abstract-musical-pattern-for-your-removebg-preview.png', '2022-07-12 10:32:19', '2022-Nov-22 10:05:16'),
(17, 'System Administrator', 'Membuka Ekskul Musik', 'Ekstrakulikuler', '<p>Masukkan Isi Berita ...</p>', 5, 1, 'Poster.png', '2022-07-12 10:34:58', '2022-Nov-22 10:05:57'),
(18, 'System Administrator', 'Melakukan Kegiatan Ekskul Sekolah', 'Ekstrakulikuler', '<p>Ekstra Kulikuler sangat Menyenangkan</p>', 5, 1, 'bbb.jpg', '2022-Nov-23 03:41:52', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_diskusi`
--

CREATE TABLE `tbl_diskusi` (
  `id` int(11) NOT NULL,
  `id_alumni` int(10) NOT NULL,
  `username` varchar(128) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `isi` text NOT NULL,
  `img` varchar(128) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_diskusi`
--

INSERT INTO `tbl_diskusi` (`id`, `id_alumni`, `username`, `judul`, `kategori`, `isi`, `img`, `status`, `created`, `modified`) VALUES
(19, 73, 'aldops', 'Pengalaman Hidup Selama Kerja yang Penuh Inspirasi', 'Pengalaman', '<p>         Mungkin tidak ada yang salah bagi seseorang yang ingin mengejar karir meski itu hanya sebagai seorang pekerja.</p>\r\n\r\n<p>Dan demikian pula sama halnya dengan orang yang ingin membangun usahanya sendiri. Faktanya, banyak pengusaha sukses yang bermunculan yang padahal dulunya juga adalah seorang Pekerja. Wajar kan karena hidup itu adalah pilihan. <em>Heheh</em><em>e …</em></p>\r\n\r\n<hr>\r\n<p>        Sama hanya dengan<a id=\"test\" name=\"test\"></a>ku dikala itu kerja sesaat dengan harap nantinya bisa mengubah hidup saya, dengan lantaran bisa lanjut belajar lagi, Alesan saya kenapa nggak mau kerja terus-menerus dan kenapa saya lebih menginginkan lanjut belajar lagi. Karena saya punya tujuan sendiri intinya nggak pengen ikut Oranglah.</p>\r\n\r\n<p>Padahal kalau dipikir-pikir memang Belajar itu menghabiskan Uang, sedangkan kerja itu katanya penuh dengan Uang. <em>Up !!!</em> Jangan salah. Kalau saya si mending puasa dulu nggak punya Uang nggak masalah, dan nggak jadi masalah. <em>Hehehe …</em></p>\r\n\r\n<p>Yang terpenting itu cari pengalaman dengan cara belajar baik lewat Formal maupun Non Formal yang terpenting kita tahu kalau suatu saat nanti kita pasti akan butuh pengalaman tersebut. Namun asal kita tahu Sukses itu tidak harus bersekolah tinggi juga. Kita lulus SD, SMP, SMA janganlah pernah berkecil hati. Karena menurut saya itu sudah cukuplah.</p>\r\n\r\n<p>Nah, <em>ingat !!!..</em></p>\r\n\r\n<p>Jadikanlah kerja itu hanya sebagai sampingan saja. Syukur-syukur kalian faham tentang System pengelolaan pekerjaan tersebut, Mulai dari pengelolaan kerja, maupun tentang Manajemen Keuanganya dll.</p>\r\n\r\n<p>Sedikit cerita tanpa panjang, lebar inilah kisah-kisahku tentang kerja ikut orang baca sampai selesai, <em>ya  !!!…</em></p>\r\n\r\n<p> </p>\r\n\r\n<p>           Nah, inilah kegiatan pertama dan awal pekerjaan saya yaitu jadi penjahit atau yang di kenal dengan Konveksi, yang sehari-harinya, duduk dan dan genjot mesin yang mungkin sedikit berisik.</p>\r\n\r\n<p>Konveksi- Atau yang di kenal dengan penjahit. Mungkin ada yang bilang jadi penjahit itu enak kerja hanya duduk dan duduk saja dan nggak kepanasen. Namun kata siapa kerja itu enak, yang namanya kerja itu nggak ada yang enak. Meski itu hanya seorang panjahit.</p>\r\n\r\n<p>Kita kerja dari jam 08.00 s/d 21.00  malam. Coba bayangkan siapa yang bilang kerja itu enak kerja dari Pagi sampai dengan Malem. Kerja 12 jam Non Stop. Sangat nggak enak kan, oleh sebab itulah akun putuskan dalam waktu nggak lama, mungkin 1 bulan lah aku putusakan untuk keluar.</p>\r\n\r\n<p>Namun sebelum keluar ada pelajaran yang perlu saya ambil dari hal-hal tersebut. Apa ? itu ya ada lah. Intinya setiap pekerjaan  itu ada System Manajemen waktu dan Kedisplinan. Itulah yang ada dalam system Dunia Kerja.</p>', 'aaaaaaaaaaaa2.jpg', 1, '2022-07-18 07:31:15', '0000-00-00 00:00:00'),
(20, 75, 'santa25', 'Menjadi Seorang Yang Berkopenten di Sebuah Oragnisasi', 'Organisasi', '<p>Organisasi yang saya ikuti saat saya bersekolah dulu cukup banyak dan sangat bermanfaat.</p>\r\n\r\n<p>Sekarang saya akan menceritakan sedikit pengalaman saya dalam berorganisasi. Organisasi yang saya ikuti bermacam-macam dan tentunya bermanfaat. Saya mengikuti organisasi sejak saya duduk di Sekolah Dasar (SD), saya beberapa kali menjadi pengurus kelas yaitu sekretaris dan saya juga bergabung di paduan suara sekolah. Selain untuk menyalurkan hobi menyanyi, bergabung di paduan suara saya manfaatkan untuk memperdalam ilmu tarik suara dan juga untuk menambah pertemanan. Kelompok paduan suara saya sering ikut berpartisipasi dalam acara sekolah, seperti upacara pengibaran bendera merah putih setiap hari Senin, upacara Hari Guru, dll. Sejak bergabung dalam paduan suara, kepercayaan diri dan rasa bertanggung jawab saya bertambah. Saya pun mendapat pengalaman dan pembelajaran yang sangat bermanfaat.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Saat saya duduk di Sekolah Menengah Pertama (SMP), saya kembali mengikuti paduan suara sekolah dan OSIS. Karena saat Sekolah Dasar (SD) dulu saya pernah mengikuti paduan suara, saya dipercaya menjadi seorang Ketua. Menjadi seorang ketua paduan suara sekolah adalah tantangan yang cukup berat untuk saya karena saya harus bertanggung jawab atas kelompok saya. Agar menjadi contoh bagi anggota kelompok paduan suara, saya harus bersikap tegas dan disiplin. Atas kerja keras saya dan juga anggota kelompok paduan suara yang saya pimpin, kami berhasil menjuarai beberapa lomba paduan suara antar sekolah. Kelompok paduan suara saya juga ikut berpartisipasi dalam acara sekolah dan acara Yayasan Perguruan sekolah saya. Di OSIS saya bergabung menjadi anggota Hubungan Masyarakat (Humas) yang bertugas menjadi penghubung OSIS ke siswa dan siswi bila ada event atau kegiatan dan perayaan di sekolah. Menjadi seorang anggota HUMAS OSIS memberi dampak positif kepada saya, seperti membantu saya bersosialisasi dengan teman-teman dan menambah wawasan yang luas. Dan juga menjadi seorang Ketua paduan suara sekolah membuat saya menjadi seorang pribadi yang tegas, disiplin, bertanggung jawab, dan berwibawa.</p>\r\n\r\n<p> </p>\r\n\r\n<p> </p>\r\n\r\n<p>Saat saya duduk di Sekolah Menengah Atas (SMA) saya bergabung dalam kelompok Teater sekolah yang bernama Enceng Gondok dan juga OSIS. Walaupun bergabung dalam Teater sekolah dan OSIS hanya sebentar, saya mendapatkan pengalaman yang berarti dan berkesan. Bergabung dalam Teater sekolah membuat saya lebih percaya diri, bakat acting saya bertambah, menambah ilmu seni pertunjukan teater, disiplin, dan bertanggung jawab.</p>\r\n\r\n<p> </p>\r\n\r\n<p> </p>\r\n\r\n<p>Organisasi berasal dari kata Yunani yaitu organon atau alat. Organisasi adalah sekumpulan atau beberapa orang yang melakukan sesuatu hal untuk tujuan tertentu. Organisasi itu multi disiplioner yaitu bisa digunakan oleh bidang manapun. Sebuah organisasi dapat terbentuk karena dipengaruhi oleh beberapa aspek seperti penyatuan visi dan misi serta tujuan yang sama dengan perwujudan eksistensi sekelompok orang tersebut terhadap masyarakat.<br>\r\n<br>\r\nManfaat-manfaat dalam mengikuti kegiatan berorganisasi adalah :</p>\r\n\r\n<p>1.    Menambah wawasan.</p>\r\n\r\n<p>2.    Menambah pengalaman dan pembelajaran.</p>\r\n\r\n<p>3.    Disiplin.</p>\r\n\r\n<p>4.    Bertanggung jawab.</p>\r\n\r\n<p>5.    Bersosialisasi.</p>\r\n\r\n<p>6.    Melatih diri sebagai pemimpin (leadership).</p>\r\n\r\n<p>7.    Mandiri.</p>\r\n\r\n<p>8.    Dan hal positif lainnya.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Berikut ini adalah karakteristik organisasi menurut para ahli, yaitu :</p>\r\n\r\n<p>1.   Abdul Azis Wahab (2008:4) menjelaskan beberapa karakteristik dari organisasi diantaranya adalah sebuah entitas sosial, bertujuan atau diarahkan oleh tujuan, memiliki sistem kegiatan terstruktur yang disengaja dan dengan batas-batas yang jelas.</p>\r\n\r\n<p>2.    Sedangkan menurut Gerlof (1998:6) karakteristik dari sebuah organiasi yaitu tujuan, orang, dan rencana.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Sedangkan beberapa pendapat lain mengenai karakteristik organisasi adalah:</p>\r\n\r\n<p>1.  Lembaga sosial yang terdiri atas kumpulan orang dengan berbagai pola interaksi yang ditetapkan.</p>\r\n\r\n<p>2.    Dikembangkan untuk mencapai tujuan.</p>\r\n\r\n<p>3.    Secara sadar dikoordinasi dan dengan sengaja disusun.</p>\r\n\r\n<p>4.    Instrumen sosial yang mempunyai batasan yang secara relatif dapat diidentifikasi.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Itulah beberapa pengalaman saya dalam berorganisasi saat bersekolah. Organisasi tidak akan ada jika tidak ada manusia dan keinginan. Organisasi terbentuk karena dipengaruhi beberapa aspek seperti penyatuan visi dan misi serta tujuan yang sama. Oleh karena itu, pilihlah organisasi yang sesuai dengan visi dan misi serta tujuan anda.</p>', 'download_(1).jpeg', 1, '2022-07-27 20:46:47', '0000-00-00 00:00:00'),
(26, 221, 'agungf', 'Menjadi Mahasiswa Ilmu Komputer Universitas Riau', 'Pengalaman', '<p>Menjadi Mahasiswa Universitas Riau Sangat Menyenangkan</p>', 'default.jpg', 1, '2022-11-23 03:40:20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_items`
--

CREATE TABLE `tbl_items` (
  `itemId` int(11) NOT NULL,
  `itemHeader` varchar(512) NOT NULL COMMENT 'Heading',
  `itemSub` varchar(1021) NOT NULL COMMENT 'sub heading',
  `itemDesc` text DEFAULT NULL COMMENT 'content or description',
  `itemImage` varchar(80) DEFAULT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedDtm` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_items`
--

INSERT INTO `tbl_items` (`itemId`, `itemHeader`, `itemSub`, `itemDesc`, `itemImage`, `isDeleted`, `createdBy`, `createdDtm`, `updatedDtm`, `updatedBy`) VALUES
(1, 'jquery.validation.js', 'Contribution towards jquery.validation.js', 'jquery.validation.js is the client side javascript validation library authored by Jörn Zaefferer hosted on github for us and we are trying to contribute to it. Working on localization now', 'validation.png', 0, 1, '2015-09-02 00:00:00', NULL, NULL),
(2, 'CodeIgniter User Management', 'Demo for user management system', 'This the demo of User Management System (Admin Panel) using CodeIgniter PHP MVC Framework and AdminLTE bootstrap theme. You can download the code from the repository or forked it to contribute. Usage and installation instructions are provided in ReadMe.MD', 'cias.png', 0, 1, '2015-09-02 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(128) NOT NULL,
  `created` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id`, `nama_kategori`, `created`, `status`) VALUES
(2, 'Pengalaman', '2022-07-04 11:21:21', 1),
(3, 'Organisasi', '2022-07-08 08:05:48', 1),
(4, 'Pekerjaan', '2022-07-13 04:27:10', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_reset_password`
--

CREATE TABLE `tbl_reset_password` (
  `id` bigint(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `createdBy` bigint(20) NOT NULL DEFAULT 1,
  `createdDtm` datetime NOT NULL,
  `updatedBy` bigint(20) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_reset_password`
--

INSERT INTO `tbl_reset_password` (`id`, `email`, `activation_id`, `agent`, `client_ip`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(22, 'agungsilaban25@gmail.com', 'F7bSsk5N1WPeh0Z', 'Chrome 98.0.4758.102', '::1', 0, 1, '2022-02-22 05:46:29', NULL, NULL),
(23, 'agungsilaban25@gmail.com', 'rl8y0NKLpsXUn3C', 'Chrome 98.0.4758.102', '::1', 0, 1, '2022-02-22 05:46:33', NULL, NULL),
(24, 'agungsilaban25@gmail.com', 'sHvLENnyT9RUzKF', 'Chrome 102.0.0.0', '::1', 0, 1, '2022-06-13 08:31:54', NULL, NULL),
(25, 'agungsilaban25@gmail.com', 'uhMYw5tEyZfkPxW', 'Chrome 102.0.0.0', '::1', 0, 1, '2022-06-26 19:33:32', NULL, NULL),
(26, 'admin@bewithdhanu.in', 'uWq9jVRZH2FUXkS', 'Chrome 102.0.0.0', '::1', 0, 1, '2022-06-26 19:33:42', NULL, NULL),
(27, 'admin@bewithdhanu.in', 'aQtpEzWi0r13dTM', 'Chrome 102.0.0.0', '::1', 0, 1, '2022-06-26 19:33:56', NULL, NULL),
(28, 'agungsilaban25@gmail.com', 'fm97NVuHdgIEkwn', 'Chrome 102.0.0.0', '::1', 0, 1, '2022-06-27 11:04:19', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `roleId` tinyint(4) NOT NULL COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_roles`
--

INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES
(1, 'System Administrator'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int(11) NOT NULL,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) DEFAULT NULL,
  `roleId` tinyint(4) NOT NULL DEFAULT 3,
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL,
  `level` int(2) NOT NULL COMMENT '1:admin,2:user'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`, `level`) VALUES
(1, 'admin@bewithdhanu.in', '$2y$10$SAvFim22ptA9gHVORtIaru1dn9rhgerJlJCPxRNA02MjQaJnkxawq', 'System Administrator', '9890098900', 1, 1, 0, '2015-07-01 18:56:49', 5, '2022-11-21 02:54:20', 1),
(2, 'manager@bewithdhanu.in', '$2y$10$xPAkBCPKgiCP5O03E48PGetadVjelOoJdVoCMiAtSrPRDQqCaJl5q', 'Agung', '0890098900', 2, 0, 1, '2016-12-09 17:49:56', 5, '2022-04-22 12:46:19', 0),
(3, 'employee@bewithdhanu.in', '$2y$10$MB5NIu8i28XtMCnuExyFB.Ao1OXSteNpCiZSiaMSRPQx1F1WLRId2', 'Employee', '9890098900', 3, 1, 1, '2016-12-09 17:50:22', 5, '2022-09-26 18:42:33', 0),
(5, 'agungsilaban25@gmail.com', '$2y$10$KmzCL24GjX5yvsaQGw8oAOOYvAlMUfof2FXyr03iYV9qMYtRnXSre', 'Agung', '0812898732', 1, 0, 1, '2022-02-22 05:45:42', 1, '2022-02-28 13:08:52', 0),
(20, 'caca@gmail.com', '$2y$10$vvnZsXX1rCsCt8U57Wd9ne5TH5CQah2k44/S1VGOT4VFU9J1ub6BS', 'Caca', '0895088371', 1, 1, 5, '0000-00-00 00:00:00', 5, '2022-11-22 16:45:49', 0),
(19, 'tumbal.game25@gmail.com', '$2y$10$Bsonyf3nZnRzGLf.mKhTse/s8D9AcvfQSg4kGvVY58bdAp9ApJZV2', 'Agung', '0812898732', 1, 0, 5, '0000-00-00 00:00:00', NULL, NULL, 0),
(21, 'agung23@gmail.com', '$2y$10$NvdQ2wsBxk1.WwL3KvKaoOEPIx3uA4XqDrbOHxBJdPOCic90IRNRi', 'Agung F', '0890098900', 1, 0, 5, '0000-00-00 00:00:00', NULL, NULL, 0),
(18, 'qeqweqwe@gmail.com', '$2y$10$mb0/qtwLwD4F9lzsQFrBxePwQScD9doQUTPmISWCT24Pa44gFi2P2', 'Agung', '0890098900', 2, 0, 5, '2022-07-11 03:31:43', NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_alumni`
--
ALTER TABLE `tbl_alumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- Indeks untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_diskusi`
--
ALTER TABLE `tbl_diskusi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_items`
--
ALTER TABLE `tbl_items`
  ADD PRIMARY KEY (`itemId`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`roleId`);

--
-- Indeks untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_alumni`
--
ALTER TABLE `tbl_alumni`
  MODIFY `id_alumni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;

--
-- AUTO_INCREMENT untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tbl_diskusi`
--
ALTER TABLE `tbl_diskusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tbl_items`
--
ALTER TABLE `tbl_items`
  MODIFY `itemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `roleId` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'role id', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
