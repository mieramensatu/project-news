-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2020 at 02:55 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project16`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `berita_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `berita_slug` varchar(255) NOT NULL,
  `berita_judul` varchar(255) NOT NULL,
  `berita_isi` text NOT NULL,
  `berita_status` varchar(20) NOT NULL,
  `berita_jenis` varchar(20) NOT NULL,
  `keywords` text NOT NULL,
  `berita_gambar` varchar(255) NOT NULL,
  `hits` int(11) NOT NULL,
  `tanggal_post` date NOT NULL,
  `berita_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`berita_id`, `user_id`, `kategori_id`, `berita_slug`, `berita_judul`, `berita_isi`, `berita_status`, `berita_jenis`, `keywords`, `berita_gambar`, `hits`, `tanggal_post`, `berita_tanggal`) VALUES
(3, 1, 5, 'klasemen-liga-spanyol-tanpa-var-real-madrid-tetap-di-atas-barcelona', ' Klasemen Liga Spanyol Tanpa VAR: Real Madrid Tetap di Atas Barcelona', '<p><strong>Jakarta</strong><span style=\"color:rgb(45,45,45);\"> -</span></p><p>Terkait persaingan di <a href=\"https://www.detik.com/tag/klasemen-liga-spanyol\"><strong>klasemen Liga Spanyol</strong></a>, <a href=\"https://www.detik.com/tag/barcelona\"><strong>Barcelona</strong></a> menggerutu karena menganggap <a href=\"https://www.detik.com/tag/real-madrid\"><strong>Real Madrid</strong></a> diuntungkan VAR. Tapi tanpa VAR sekalipun, El Real rupanya tetap di atas Barca.</p><p>Los Cules berbalik tertinggal dari Real Madrid setelah lockdown. Sampai jornada 35, Barca nangkring di posisi kedua dengan selisih satu poin dari rival abadinya itu yang menempati posisi teratas tapi masih memiliki satu pertandingan di tangan.</p><p>&nbsp;</p><p>Barcelona memang punya laju kurang oke dengan tiga kali menang dari enam pertandingan terakhirnya, sementara Madrid justru melaju dengan tujuh kemenangan. Meski demikian, di balik laju sempurna Madrid itu, Presiden Barcelona Josep Maria Bartomeu tidak suka.</p><p>&nbsp;</p><p>Sebab, menurut Bartomeu, Madrid banyak dibantu keputusan wasit atau VAR sehingga bisa mengungguli timnya. Sontak pernyaan Bartomeu ini jadi bumbu penyedap persaingan keduanya menuju titel LaLiga 2019/2020.</p><p>Tapi, pertanyaannya kini, apakah memang Madrid sebegitu diuntungkannya oleh VAR? <i>AS</i>, media yang dikenal condong ke Madrid, coba membedah setiap keputusan wasit atau VAR sepanjang LaLiga bergulir 35 pekan ini, terkait posisi di papan <a href=\"https://www.detik.com/tag/klasemen-liga-spanyol\"><strong>klasemen Liga Spanyol</strong></a>.</p><p>Sepanjang musim ini, Madrid disebut diuntungkan lima kali oleh keputusan wasit atau VAR, terutama setelah lockdown. Tapi, mereka juga lima kali dirugikan oleh keputusan yang membuat mereka gagal meraih angka penuh atau bahkan kalah.</p>', 'Publish', 'Berita', 'Sport', '1594373165_c7398fc3a378cac9307e.jpeg', 0, '0000-00-00', '2020-07-10 09:26:05'),
(4, 1, 5, 'de-gea-catatkan-rekor-baru-di-man-united', 'De Gea Catatkan Rekor Baru di Man United', '<p><strong>Birmingham</strong><span style=\"color:rgb(45,45,45);\"> -</span></p><p><a href=\"https://www.detik.com/tag/david-de-gea\"><strong>David de Gea</strong></a> tak cuma mencatatkan clean sheet dan membawa <a href=\"https://www.detik.com/tag/manchester-united\"><strong>Manchester United</strong></a> mengalahkan Aston Villa. Tapi, ada satu rekor baru dibuat De Gea, apa itu?</p><p>Man United melanjutkan tren positifnya saat menyambangi Villa Park menghadapi Aston Villa, Jumat (10/7/2020) dini hari WIB. Setelah 90 menit laga tuntas, MU menang tiga gol tanpa balas.</p><p>Gol-gol kemenangan MU dibuat Bruno Fernandes (penalti) dan Mason Greenwood di babak pertama, yang dilanjutkan gol Paul Pogba di babak kedua. Ingin melihat gol-gol cantik MU tersebut? Tengok cuplikannya di Mola TV lewat link ini.</p><p>&nbsp;</p><p>MU pun menjaga peluang untuk finis empat besar karena kini berada di posisi kelima klasemen Liga Inggris dengan 58 poin, selisih satu angka dengan Leicester City di posisi keempat.</p><p>Tak cuma itu, MU juga berhasil melanjutkan tren positifnya selepas jeda pandemi virus corona, empat kemenangan dan satu imbang. <a href=\"https://www.detik.com/tag/david-de-gea\"><strong>David de Gea</strong></a> untuk ketiga kalinya dari lima laga terakhir mencatatkan clean sheet.</p><p>&nbsp;</p><p>Dengan tambahan satu penampilannya ini, De Gea menahbiskan diri sebagai pemain asing MU dengan jumlah laga terbanyak. De Gea sudah tampil 399 kali sejak gabung pada 2011, mengalahkan rekor Peter Schmeichel yang sama-sama berposisi penjaga gawang.</p><p>De Gea memang belum masuk 10 besar penampilan terbanyak di MU dan masih kalah jauh dari rekor Ryan Giggs dengan 963 penampilan. Untuk masuk ke 10 besar saja, De Gea masih harus melewati Joe Spence, pemain MU era 1919-1933, dengan 510 penampilan.</p><p>&nbsp;</p><p>Sejak gabung MU dari Atletico Madrid, <a href=\"https://www.detik.com/tag/david-de-gea\"><strong>David de Gea</strong></a> sudah memberikan satu gelar Premier League, satu Piala Liga Inggris, satu Piala FA, dan satu Liga Europa. Dia punya 141 clean sheet dan kebobolan 409 gol.</p><p>&nbsp;</p>', 'Publish', 'Berita', 'Degea', '1594373016_e4717ceea10932abf434.jpeg', 0, '2020-07-10', '2020-07-10 09:23:36'),
(5, 1, 3, 'prabowo-paling-banyak-kelola-aset-negara-capai-rp-1645-t', 'Prabowo Paling Banyak Kelola Aset Negara, Capai Rp 1.645 T', '<p><strong>Jakarta</strong><span style=\"color:rgb(0,0,0);\"> -</span></p><p>Direktorat Jenderal Kekayaan Negara (DJKN) Kementerian Keuangan mengumumkan nilai <a href=\"https://www.detik.com/tag/aset-negara\">aset negara</a> yang dikelola Kementerian Pertahanan (<a href=\"https://www.detik.com/tag/kemenhan\">Kemenhan</a>) paling tinggi di antara kementerian dan lembaga (K/L) lainnya.</p><p>Nilai aset institusi yang dipimpin oleh <a href=\"https://www.detik.com/tag/prabowo-subianto\">Prabowo Subianto</a> ini berhasil menyalip Kementerian PUPR yang semula berada di urutan nomor satu.</p><p>\"Kita juga punya daftar 10 K/L terbesar ada, yang paling kaya adalah Kemenhan,\" kata Direktur Barang Milik Negara (BMN) Kementerian Keuangan Encep Sudarwan saat media briefing secara virtual, Jumat (10/7/2020).</p><p>&nbsp;</p><figure class=\"table\"><table style=\"background-color:rgb(255, 255, 255);border-left:5px solid var(--finance-blue-1);\"><tbody><tr><td><strong>Baca juga:</strong><a href=\"https://finance.detik.com/properti/d-5088177/apa-kabar-rencana-oyo-dan-reddoorz-kelola-apartemen-negara\"><strong>Apa Kabar Rencana OYO dan RedDoorz Kelola Apartemen Negara?</strong></a></td></tr></tbody></table></figure><p>Encep mengungkapkan salah satu faktor nilai aset aset negara yang dikelola Kemenhan bisa berada di nomor satu.</p><p>\"Dulu Kementerian PUPR sekarang kesalip karena sekarang aset-aset Kementerian Pertahanan yang dulu di pinggir kota, sekarang di tengah kota, makanya meningkat,\" jelasnya.</p><p>Berdasarkan data DJKN, sebanyak 10 K/L dengan nilai aset tertinggi saat ini, Kemenhan berada di urutan nomor satu dengan nilai Rp 1.645,56 triliun, Kementerian PUPR sebesar Rp 1.564,61 triliun, Kementerian Sekretariat Negara Rp 575,41 triliun, Kementerian Perhubungan Rp 493,90 triliun, Kementerian Ristek dan Dikti sebesar Rp 399,97 triliun.</p><figure class=\"table\"><table style=\"background-color:rgb(255, 255, 255);border-left:5px solid var(--finance-blue-1);\"><tbody><tr><td><strong>Baca juga:</strong><a href=\"https://finance.detik.com/properti/d-5051613/pemetaan-aset-negara-di-jakarta-dan-ibu-kota-baru-terganjal-corona\"><strong>Pemetaan Aset Negara di Jakarta dan Ibu Kota Baru Terganjal Corona</strong></a></td></tr></tbody></table></figure><p>Selanjutnya Kepolisian Republik Indonesia sebesar Rp 295,66 triliun, Kementerian Keuangan Rp 114,50 triliun, Kementerian Agama Rp 94,19 triliun, dan Kementerian Pertanian sebesar Rp 84,09 triliun.</p><p>\"Data mengenai aset di KL, 10 KL ini menguasai 90% BMN,\" ungkapnya.</p>', 'Publish', 'Berita', 'Prabowo', '1594373261_cba31913a13eb0f5457e.jpeg', 0, '2020-07-10', '2020-07-10 09:27:41'),
(6, 1, 4, 'tips-mencuci-pakaian-yang-maksimal-di-era-new-normal', 'Tips Mencuci Pakaian yang Maksimal di Era New Normal', '<p><strong>Jakarta</strong><span style=\"color:rgb(68,68,68);\"> -</span></p><p>Setelah beraktivitas di luar rumah, ada banyak bakteri dan kuman yang menempel pada tubuh dan pakaian. Hal ini tentu akan membahayakan anggota keluarga Anda yang lain karena mereka bisa saja terserang penyakit akibat bakteri dan kuman yang tak sengaja terbawa dari luar.</p><p>Oleh karena itu, Anda wajib untuk mandi dan mencuci pakaian hingga bersih setelah masuk ke rumah agar bakteri dan kuman segera hilang. Sebab, jika Anda terus membiarkan pakaian kotor menumpuk, apalagi jika menaruhnya sembarangan, maka kuman bisa dengan mudah menyebar ke ruang sekitar.</p><p>Untuk mengurangi jumlah bakteri, Anda bisa mulai merendam pakaian, selimut, seprei menggunakan air yang cukup panas dan juga deterjen. Namun air dan deterjen saja sebenarnya tidak cukup untuk membersihkan pakaian. Tambahkan Proclin Penghilang Noda bersamaan dengan deterjen untuk memaksimalkan proses mencuci pakaian menjadi lebih bersih sempurna.</p><p>Pastikan untuk segera menjemur pakaian setelah selesai mencuci. Sebab, pakaian yang didiamkan terlalu lama dalam kondisi basah bisa meningkatkan pertumbuhan jamur dan bakteri serta bisa memicu bau yang tidak sedap pada pakaian. Selain itu, Anda juga harus ingat untuk mencuci tangan dengan sabun setelah menangani cucian kotor.</p><p>Jangan lupa, beli Proclin Penghilang Noda di Godrej Indonesia Official Store di Tokopedia ya, lagi ada Promo Spesial.</p>', 'Publish', 'Berita', 'Cuci', '1594373320_2f9f81dae127f2ae1dc0.jpeg', 0, '2020-07-10', '2020-07-10 09:28:40'),
(7, 1, 4, 'bioskop-buka-lagi-29-juli-ini-5-protokol-yang-harus-dipatuhi', 'Bioskop Buka Lagi 29 Juli? Ini 5 Protokol yang Harus Dipatuhi', '<p><strong>Jakarta</strong><span style=\"color:rgb(68,68,68);\"> -</span></p><p>Penggemar film yang hobi nonton tengah berharap-harap cemas terkait rencana <a href=\"https://www.detik.com/tag/bioskop\"><i><strong>bioskop</strong></i></a> akan dibuka lagi 29 Juli. Kapan pastinya bioskop akan kembali buka akan segera ditentukan hari ini, Jumat (10/7/2020).</p><p>Kalaupun kelak bioskop sudah bisa buka, akan ada beberapa penyesuaian yang disebut new normal. Hal itu diterapkan untuk mencegah risiko penularan virus Corona COVID-19 yang hingga kini masih belum teratasi.</p><p>Dirangkum dari berbagai sumber, berikut ini beberapa protokol new normal yang bakal berlaku di <a href=\"https://www.detik.com/tag/bioskop\"><i><strong>bioskop</strong></i></a>.</p><p>&nbsp;</p><h2><strong>1. Menggunakan masker</strong></h2><p>Wajib menggunakan masker adalah aturan terpenting ketika kamu mengunjungi bioskop. Hal ini dikarenakan pihak manajemen diwajibkan untuk mengabaikan pengunjung tanpa masker. Artinya, tanpa masker kamu nggak bakal diizinkan masuk.</p><h2><strong>2. Penjualan tiket online</strong></h2><p>Pembelian tiket secara konvensional, tidak lagi diberlakukan. Penjualan tiket nantinya akan dilakukan lewat transaksi secara online.</p><figure class=\"table\" style=\"width:641px;\"><table style=\"background-color:rgb(255, 255, 255);\"><tbody><tr><td><figure class=\"image\"><img src=\"https://akcdn.detik.net.id/community/media/visual/2020/07/09/simulasi-pembukaan-bioskop-di-era-normal-baru-2_169.jpeg?w=620\" alt=\"Suasana simulasi pembukaan dan peninjauan tempat hiburan bioskop CGV Cinemas di Bandung Electronic Center (BEC), Bandung, Jawa Barat, Kamis (9/7/2020). Simulasi tersebut dilakukan dalam rangka peninjauan kesiapan tempat hiburan bioskop dalam penerapan protokol kesehatan seperti penggunaan alat pelindung wajah bagi karyawan, pembatas jaga jarak, masker, sarung tangan dan cairan disinfektan seiring tatanan normal baru di tengah pandemi COVID-19. ANTARA FOTO/M Agung Rajasa/aww.\"></figure><p>&nbsp;</p><p>&nbsp;</p><p>Suasana simulasi pembukaan dan peninjauan tempat hiburan bioskop CGV Cinemas di Bandung Electronic Center (BEC), Bandung, Jawa Barat, Kamis (9/7/2020). Simulasi tersebut dilakukan dalam rangka peninjauan kesiapan tempat hiburan bioskop dalam penerapan protokol kesehatan seperti penggunaan alat pelindung wajah bagi karyawan, pembatas jaga jarak, masker, sarung tangan dan cairan disinfektan seiring tatanan normal baru di tengah pandemi COVID-19. ANTARA FOTO/M Agung Rajasa/aww. Foto: ANTARA FOTO/M Agung Rajasa</p></td></tr></tbody></table></figure><h2><strong>3. Kapasitas dikurangi</strong></h2><p>Biasanya, kapasitas bioskop disesuaikan dengan jumlah kursi yang mengisi studio. Akan tetapi selama ditetapkan protokol kesehatan, kapasitas studio hanya diterapkan 50 persen atau setengah dari jumlah keseluruhan kursi pada studio bioskop. Oleh karena itu, kamu hanya diperbolehkan mengisi kursi bioskop yang tidak dipasang label silang.</p><h2><strong>4. Penjualan makanan dan minuman yang dibatasi</strong></h2><p>Penjualan makanan dan minuman di ruang theater tidak diberlakukan lagi karena hanya diberlakukan mengantarkan hantaran makanan dan minuman yang telah dipesan saja.</p><h2><strong>5. Hindari kontak fisik</strong></h2><p><br><br>Pihak bioskop akan melakukan berbagai upaya untuk menerapkan social distancing bagi pengunjung. Salah satunya adalah pemberlakuan physical distancing di toilet bioskop, dengan menetapkan penggunaan urinoir dan kubikel secara selang-seling.</p><p>Protokol kesehatan sudah dibuat dengan baik. Oleh karena itu, sebagai pengunjung <a href=\"https://www.detik.com/tag/bioskop\"><i><strong>bioskop</strong></i></a>, kamu harus menjalankan protokol tersebut dengan sebaik mungkin.</p>', 'Publish', 'Berita', 'Helath', '1594373492_f16c0a8cd4a9e82f9d43.jpeg', 0, '0000-00-00', '2020-07-10 09:31:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kategori_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `kategori_slug` varchar(255) NOT NULL,
  `kategori_nama` varchar(255) NOT NULL,
  `urutan` int(11) NOT NULL,
  `hits` int(11) NOT NULL,
  `kategori_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kategori_id`, `user_id`, `kategori_slug`, `kategori_nama`, `urutan`, `hits`, `kategori_tanggal`) VALUES
(3, 0, 'Politik', 'Politik', 1, 0, '2020-07-10 09:24:14'),
(4, 0, 'Health', 'Health', 2, 0, '2020-07-10 09:24:04'),
(5, 0, 'Sport', 'Sport', 3, 0, '2020-07-10 09:23:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(50) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `user_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_nama`, `user_email`, `username`, `password`, `akses_level`, `user_tanggal`) VALUES
(1, 'Anandela Titis', 'anan@gmail.com', 'anan', '4169c013bf7234e5f23edb9ed31c3936b3cef3b5', 'Admin', '2020-07-09 23:55:55'),
(3, 'Sena', 'sena@gmail.com', 'sena', '2cb22d6d49151f3f806cb8a3c4e92df8290b3ee3', 'User', '2020-07-10 09:35:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
