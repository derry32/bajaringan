-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2020 at 04:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bajaringan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'tunasbaja', 'admin20', 'CV. Tunas Baja Cibinong');

-- --------------------------------------------------------

--
-- Table structure for table `baja_benefits`
--

CREATE TABLE `baja_benefits` (
  `id_benefits` int(5) NOT NULL,
  `deskripsi_benefits` text NOT NULL,
  `foto_benefits` varchar(15) NOT NULL,
  `judul_benefits` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baja_benefits`
--

INSERT INTO `baja_benefits` (`id_benefits`, `deskripsi_benefits`, `foto_benefits`, `judul_benefits`) VALUES
(8, 'Reng Baja Ringan adalah sebuah batangan baja ringan yang digunakan sebagai dudukan atap dari sebuah rangka atap. Reng, kadang disebut profil B, namun orang-orang di lapangan biasa menyebutnya reng baja ringan. Fungsi reng bajaringan ini sama seperti reng pada rangka kayu. Yaitu untuk tempat bertumpu genteng atau penutup atap. Reng juga berfungsi untuk mengikat kuda kuda baja tau Truss Baja Ringan dalam pembuatan rangka atap rumah/bangunan.\r\n																', 'HB_1.jpg', 'Kegunaan Reng '),
(9, 'Atap baja ringan memang sedang banyak diperbincangkan karena keunggulannya dan memiliki keunggulan yang lumayan banyak. Tapi tahukah kamu apa saja keunggulan nya? Berikut 5 contoh keunggulan dari atap baja ringan :\r\n1. Ringan dan Mudah dipasang\r\nSeperti namanya, berat atap baja ringan hanya ± 9 kg / m2. \r\nSifatnya yang ringan memudahkan kita untuk memasang rangka atap, sehingga dapat menghemat biaya penyewaan tukang dan menghemat waktu. \r\nRangka atap baja juga memiliki sistem sambungan yang mudah. \r\nKamu bisa menyambungnya dengan baut besi, sekrup, keling, ataupun dengan cara las.\r\n\r\n2. Kuat dan Tahan Lama\r\nWalaupun ringan, atap baja jenis terbaru ini sangat kuat, lho!\r\nMaterialnya tidak akan berkarat dan tahan menghadapi cuaca ekstrem, sehingga bisa melindungi rumahmu dengan maksimal.\r\nKualitas bahannya sudah disempurnakan hingga tahan lebih lama dibandingkan dengan atap kayu yang mudah keropos dan atap baja konvensional yang mudah mengarat.\r\nWalaupun terlihat ringan dan lebih tipis dari baja biasa, materialnya tidak mudah memuai dan menyusut.\r\n\r\n3. Mudah dibentuk dan disambung\r\nSetiap orang pasti memiliki rumah impian tersendiri, tapi terkadang susah dikabulkan karena desainnya yang cukup rumit.\r\nAtap baja ringan bisa menjadi solusinya.\r\nBaja ringan dapat dengan mudah dipotong dan dibentuk mengikuti bentuk rangka atap yang kita inginkan.\r\nSetelah terpasang, atap baja ringan bisa disambungkan dengan jenis atap lainnya menggunakan material penghubung baja.\r\n\r\n4. Tegangan Tarik Tinggi\r\nAtap baja ringan lebih lentur dari jenis atap lainnya.\r\nKelenturan rangka atap sangat penting karena semakin besar tegangan tarik atap, semakin banyak energi yang bisa diserap.\r\nTidak seperti baja konvensional, tegangan tarik atap baja ringan terbilang tinggi.\r\nTegangan tariknya berkisar sekitar 550 Mpa.\r\nTegangan tarik ini lebih tinggi dibandingkan dengan atap baja konvensional yang hanya memiliki tegangan tarik sekitar 300 Mpa.\r\n\r\n5. Dapat didaur ulang\r\nSisa atap baja ringan yang sudah terpakai bisa digunakan lagi untuk bagian lain konstruksi rumahmu karena sifatnya yang kuat dan tahan lama.\r\nKamu juga bisa membongkar materialnya dengan cara dilelehkan dan dibentuk menjadi salah satu bahan bangunan atau bahkan fondasi rumah.\r\nMenggunakan atap baja ringan juga mendukung program pemerintah dalam menghemat penggunaan kayu di negeri kita.\r\nDengan menghemat kayu, kita dapat menghentikan penebangan pohon dan membantu melestarikan hutan dan lingkungan di sekitar kita.		', 'HB_2.jpg', 'Keunggulan Atap Baja Ringan'),
(10, 'Di sini kami akan memberikan sedikit informasi tentang keunggulan Truss kepada konsumen, berikut adalah kelebihan dari Truss Baja Ringan :\r\nDiantara keunggulan baja ringan IBI Truss yakni :\r\n\r\na. Memiliki keunggulan daya tahan terhadap korosi yang tinggi. Sehingga baja ringan dapat berkilau dan tidak cepat kusam, dibandingkan dengan produk sejenis lainnya.\r\n\r\nb. Stabil dalam kualitas lapisan perlindungan terhadap berbagai partikel penyebab korosi. Bisa dilihat dari permukaan yang memperlihatkan adanya tekstur mozaik berupa potongan segitiga tertata acak dengan ukuran bervariasi yang bermakna homogenitas unsur aluminium dan zinc terjadi dengan baik.\r\n\r\nc. Komposisi kimia yakni aluminium 55 %, zinc 42 %-44 %, dan Si 1 %-1.5 %.\r\n\r\nd. Baja ringan IBI Truss telah memiliki sertifikat SNI melalui pengujian dari Badan Standarisasi Nasional Indonesia untuk memastikan kualitas setiap item baja ringan IBI Truss.\r\n\r\ne. Garansi produk yang diberikan baja ringan IBI Truss sesuai dengan aplikasinya. Bertujuan untuk memberikan keamanan dan kenyamanan terhadap setiap konsumen setia IBI Truss.\r\n\r\nf. Daya pantul pada panas dan cahaya yang baik, memberikan efek suhu ruangan lebih dingin.\r\n\r\ng. Tampak baru lebih lama, dikarenakan memiliki permukaan yang bersih dan lembut. Sehingga memberikan tampilan yang indah, lebih terlihat baru dan bisa bertahan lama, serta tidak mudah ternoda.\r\n\r\nh. Dengan usia pakai yang panjang, baja ringan IBI Truss akan memberikan nilai ekonomis sebab lebih hemat dalam pemakaiannya.\r\n\r\ni. Mudah dibentuk, sehingga dalam pengaplikasiannya akan memberikan banyak kemudahan kepada aplikator.\r\n\r\nj. Tahan terhadap korosi, sebab penggunaan material terbaik dan berkualitas serta homogenitas unsur aluminium dan zinc, mejadikan baja ringan IBI Truss mampu menahan korosi lebih baik dari produk sejenis lainnya.\r\n\r\nk. Tahan suhu tinggi, karena hasil proses pada suhu permukaan yang mencapai 600 derajat membuat baja ringan IBI Truss mampu bertahan pada suhu tinggi tanpa takut akan terjadinya pemudaran warna.	', 'HB_3.jfif', 'Keunggulan Truss Baja Ringan');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `email_pelanggan` varchar(25) NOT NULL,
  `password_pelanggan` varchar(8) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `telepon_pelanggan` varchar(13) NOT NULL,
  `alamat_pelanggan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `email_pelanggan`, `password_pelanggan`, `nama_pelanggan`, `telepon_pelanggan`, `alamat_pelanggan`) VALUES
(7, 'derryronaldo7@gmail.com', 'abc12345', 'A. Derry Ramadhan', '081288848397', 'Bambu Kuning ');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(5) NOT NULL,
  `id_pembelian` int(5) NOT NULL,
  `nama_penyetor` varchar(50) NOT NULL,
  `bank_transfer` varchar(25) NOT NULL,
  `jumlah_pembayaran` varchar(50) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `bukti_pembayaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pembelian`, `nama_penyetor`, `bank_transfer`, `jumlah_pembayaran`, `tanggal_pembayaran`, `bukti_pembayaran`) VALUES
(46, 81, 'aderry', 'bca', '200000', '2020-09-11', '20200911135948WhatsApp Image 2020-09-09 at 1.31.31'),
(47, 85, 'aderry', 'bca', '90000', '2020-09-11', '20200911144446WhatsApp Image 2020-09-09 at 1.31.31'),
(48, 86, 'aderry', 'bca', '360000', '2020-09-14', '20200914092226tampilan.jpg'),
(49, 87, 'aderry', 'bca', '1125000', '2020-09-14', '20200914095018Annotation 2020-04-03 174131.png'),
(50, 89, 'aderry', 'bca', '1125000', '2020-09-14', '202009141614481.png'),
(51, 90, 'aderry', 'bca', '1125000', '2020-09-14', '20200914165921ibyzd6zuz5lymhpkihsw.jpg'),
(52, 91, 'aderry', 'bca', '500000', '2020-09-14', '20200914174846Annotation 2020-04-03 174131.png');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(5) NOT NULL,
  `id_pelanggan` int(5) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(10) NOT NULL,
  `alamat_pengiriman` text NOT NULL,
  `status_pembelian` varchar(25) NOT NULL DEFAULT 'pending',
  `resi_pengiriman` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_pelanggan`, `id_produk`, `tanggal_pembelian`, `total_pembelian`, `alamat_pengiriman`, `status_pembelian`, `resi_pengiriman`) VALUES
(85, 9, 3, '2020-09-11', 90000, 'b', 'sudah kirim pembayaran', NULL),
(86, 9, 3, '2020-09-11', 360000, 'b', 'sudah kirim pembayaran', NULL),
(88, 1, 2, '2020-09-11', 200000, 'b', 'pending', NULL),
(89, 9, 1, '2020-09-14', 1125000, 'bojonggede', 'Dikemas', '101993029381943'),
(90, 9, 1, '2020-09-14', 1125000, 'Bojonggede bogor', 'sudah kirim pembayaran', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int(5) NOT NULL,
  `id_pembelian` int(5) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `id_pelanggan` int(5) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `subharga` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `id_pelanggan`, `jumlah`, `subharga`) VALUES
(98, 84, 2, 9, 3, 150000),
(99, 85, 3, 9, 1, 90000),
(100, 86, 3, 9, 4, 360000),
(101, 87, 4, 9, 9, 1125000),
(102, 88, 2, 0, 4, 200000),
(103, 89, 1, 9, 15, 1125000),
(104, 90, 1, 0, 15, 1125000),
(105, 91, 2, 7, 10, 500000);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_sukses`
--

CREATE TABLE `pembelian_sukses` (
  `id_pembelian` int(5) NOT NULL,
  `id_pelanggan` int(5) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(10) NOT NULL,
  `alamat_pengiriman` text NOT NULL,
  `status_pembelian` varchar(25) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian_sukses`
--

INSERT INTO `pembelian_sukses` (`id_pembelian`, `id_pelanggan`, `id_produk`, `tanggal_pembelian`, `total_pembelian`, `alamat_pengiriman`, `status_pembelian`) VALUES
(67, 7, 32, '2020-08-03', 140000, 'Kp. Bambu Kuning Kec. Bojonggede Rt/Rw. 003/006 No. 65', 'Pembelian Sukses'),
(68, 7, 30, '2020-08-03', 109000, 'Kp. Bambu Kuning Kec. Bojonggede Rt/Rw. 003/006 No. 65', 'Pembelian Sukses'),
(69, 7, 30, '2020-08-27', 98000, 'Kp. Bambu Kuning Kec. Bojonggede Rt/Rw. 003/006 No. 65', 'Pembelian Sukses'),
(71, 7, 30, '2020-09-01', 105000, 'Kp. Bambu Kuning Kec. Bojonggede Rt/Rw. 003/006 No. 65', 'Pembelian Sukses'),
(72, 7, 29, '2020-09-02', 218000, 'Kp. Bambu Kuning Kec. Bojonggede Rt/Rw. 003/006 No. 65', 'Pembelian Sukses'),
(74, 7, 1, '2020-09-09', 75000, 'aaddffvdfgf', 'Pembelian Sukses');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(5) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_produk` int(5) NOT NULL,
  `kategori_produk` varchar(50) NOT NULL,
  `foto_produk` varchar(15) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `stok_produk` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `kategori_produk`, `foto_produk`, `deskripsi_produk`, `stok_produk`) VALUES
(1, 'Reng', 75000, 'reng', 'reng1.jpg', '	', 112),
(2, 'Atap', 50000, 'atap', 'atap1.jpg', '', 112),
(3, 'Reng 28.45**', 90000, 'reng', 'reng1.jpg', '', 128),
(4, 'Truss', 125000, 'truss', 'Truss1.jpg', '', 136);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `baja_benefits`
--
ALTER TABLE `baja_benefits`
  ADD PRIMARY KEY (`id_benefits`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indexes for table `pembelian_sukses`
--
ALTER TABLE `pembelian_sukses`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `baja_benefits`
--
ALTER TABLE `baja_benefits`
  MODIFY `id_benefits` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `pembelian_sukses`
--
ALTER TABLE `pembelian_sukses`
  MODIFY `id_pembelian` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
