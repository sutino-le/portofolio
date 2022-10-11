-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Okt 2022 pada 03.15
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `penid` int(11) NOT NULL,
  `penjenjang` varchar(20) NOT NULL,
  `pennama` varchar(100) NOT NULL,
  `penalamat` text NOT NULL,
  `penmulai` year(4) NOT NULL,
  `penakhir` year(4) NOT NULL,
  `penstatus` varchar(50) NOT NULL,
  `penjurusan` varchar(100) NOT NULL,
  `pennilai` double NOT NULL,
  `penlogo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`penid`, `penjenjang`, `pennama`, `penalamat`, `penmulai`, `penakhir`, `penstatus`, `penjurusan`, `pennilai`, `penlogo`) VALUES
(1, 'SD', 'SD N Bumi Agung Wates', 'Bumi Agung Wates, Bahuga, Way Kanan - Lampung', 1997, 2003, 'Lulus', '-', 0, 'sd.png'),
(2, 'SMP', 'SMP N 1 Buay Bahuga', 'Bumi Harjo, Buay Bahuga, Way Kanan - Lampung', 2003, 2006, 'Lulus', '-', 0, 'smp.png'),
(3, 'SMA', 'SMA N 1 Buay Bahuga', 'Bumi Harjo, Buay Bahuga, Way Kanan - Lampung', 2006, 2009, 'Lulus', 'Ilmu Pengetahuan Sosial', 0, 'sma.png'),
(4, 'S1', 'Universitas Pamulang', 'Jl. Surya Kencana No.1, Pamulang Bar., Kec. Pamulang, Kota Tangerang Selatan, Banten 15417', 2010, 2015, 'Lulus', 'Teknik Informatika', 3.08, 'unpam.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengalaman`
--

CREATE TABLE `pengalaman` (
  `pengid` int(11) NOT NULL,
  `pengperusahaan` varchar(100) NOT NULL,
  `pengjobtitle` varchar(100) NOT NULL,
  `pengawal` date NOT NULL,
  `pengakhir` date NOT NULL,
  `pengstatus` varchar(100) NOT NULL,
  `pengkota` varchar(100) NOT NULL,
  `pengdekripsi` text NOT NULL,
  `penglogo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengalaman`
--

INSERT INTO `pengalaman` (`pengid`, `pengperusahaan`, `pengjobtitle`, `pengawal`, `pengakhir`, `pengstatus`, `pengkota`, `pengdekripsi`, `penglogo`) VALUES
(1, 'HARIHARI Pasar Swalayan', 'HRD', '2015-06-16', '2019-08-19', 'Keluar', 'Jakarta Barat', '<ul>\r\n    <li>Bertanggungjawab terhadap karyawan baru, pengisian formulir-formulir, perjanjian kerja, pendaftaran sidik jari, pembuatan ID card, input data karyawan baru ke program Aplikasi Persoanlia, dan penjelasan tata tertib.</li>\r\n    <li>Mengontrol atau mengawasi karyawan, SPG, PKL, agar taat peraturan perusahaan.</li>\r\n    <li>Bertanggung jawab SOP yang berlaku.</li>\r\n    <li>Bertanggung jawab atas laporan absensi karyawan, SPG, PKL, Cleaner.</li>\r\n    <li>Bertanggung jawab atas lembur, cuti, jadwal, kontrak karyawan, insentif karyawan.</li>\r\n    <li>Mengurus pendaftaran atau keluar administrasi BPJS Kesehatan maupun Ketenagakerjaan.</li>\r\n    <li>Melakukan perhitungan upah Karyawan dan lembur karyawan.</li>\r\n    <li>Mengurus izin-izin perusahaan.</li>\r\n    <li>Menganalisa sistem berjalan yang ada di HR.</li>\r\n    <li>Merancang database dan membangun sesuai dengan kebutuhan HR menggunakan database SQL.</li>\r\n    <li>Merancang design program sesuai dengan yang dibutuhkan.</li>\r\n    <li>Menganalisa data dan mengolah data untuk dimasukan kedalam database secara global.</li>\r\n    <li>Design aplikasi yang dibutuhkan sesuai alur SOP yang dibutuhkan HR.</li>\r\n    <li>Memabangun program dengan menggunakan bahasa pemrogrammasn PHP, HTML, CSS, Java Script.</li>\r\n    <li>Pengetesan Aplikasi setiap menu apakah sudah sesuai dengan SOP yang di butuhkan.</li>\r\n    <li>Mengimplementasikan atau menerapkan secara bertahap.</li>\r\n    <li>Pemeliharaan aplikasi secara berkala.</li>\r\n</ul>', 'harihari.jpg'),
(2, 'PT Servis Indo Raya', 'HR & GA', '2019-10-14', '2020-03-31', 'Keluar', 'Tangerang', '<ul class=\"text-justify\">\r\n    <li>Bertanggungjawab terhadap karyawan baru dari persiapan ruangan dan peralatan kerja, pengisian formulir-formulir , pendaftaran sidik jari, pembuatan ID card, input data karyawan baru ke program HC dan pengenalan karyawan baru ke seluruh karyawan.</li>\r\n    <li>Bertanggungjawab terhadap absensi karyawan dari tarik data mesin & upload ke program HC, monitoring kehadiran setiap hari, upload jadwal shift , ubah jadwal shift ( pertukaran shift ) dan monitor hutang cuti karyawan.</li>\r\n    <li>Memasukkan dan memperbaharui data karyawan ke dalam program HR.</li>\r\n    <li>Memastikan pendaftaran BPJS Ketenagakerjaan dan BPJS Kesehatan sesuai dengan SOP dan peraturan yang berlaku.</li>\r\n    <li>Memberikan pelayanan kepada karyawan yang membutuhkan data/informasi yang berkaitan dengan kepersonaliaan antara lain data cuti, print absen, surat kepersonaliaan, dll.</li>\r\n    <li>Mendaftarkan data ketenagakerjaan wajib lapor secara online setiap bulan.</li>\r\n    <li>Bertanggungjawab terhadap administrasi karyawan keluar dari clearance sheet , pembuatan surat jawaban pengunduran diri, memastikan barang & ID Card dikembalikan , pembuatan surat referensi kerja dan arsip dokumen.</li>\r\n    <li>Membuat laporan yang berkaitan dengan Kepersonaliaan antara lain : Grafik Lost time , Grafik MPS, Leadtime & Akurasi biaya kepersonaliaan, Jumlah Pelaksanaan Pembinaan karyawan, Laporan PA Online, LSG, dll.</li>\r\n    <li>Melakuan pengarsipan dokumen-dokumen kepersonaliaan Softcopy & hardcopy antara lain : data karyawan (FLK,dll) ,Surat Pernyataan Pajak, Clearance sheet, Surat Keterangan, Surat Peringatan ,dll dalam odner.</li>\r\n    <li>Bertanggungjawab terhadapat admin Pelatihan dari persiapan ruangan & peralatan pelatihan, undangan, daftar hadir, pencatatan pelatihan dalam program HC dan membuat sertifikat pelatihan khusus in house training sampai pada pengarsipan sertifikat untuk external training.</li>\r\n    <li>Proses penggajian karyawan harian dari memastikan kehadiran, lembur dan perhitungan upah setiap tgl 15 dan tgl akhir bulan.</li>\r\n    <li>Membuat, menginput career history dan mengarsip Surat-surat kepersonaliaan antara lain : Surat Pengangkatan Tetap, Promosi, Mutasi, Rotasi, Penugasan , Surat Peringatan.</li>\r\n    <li>Melakukan kunjungan ke masing-masing affco secara berkala untuk memastikan Personalia & GA berjalan dengan baik.</li>\r\n</ul>', 'sir.png'),
(3, 'PT Servis Indo Raya', 'HR & GA', '2020-07-01', '2021-06-30', 'Keluar', 'Tangerang', '<ul>\r\n    <li>Bertanggungjawab terhadap karyawan baru dari pengisian formulir-formulir , pendaftaran sidik jari, pembuatan ID card, input data karyawan baru ke program HC dan Sunfish, pengenalan karyawan baru ke seluruh karyawan.</li>\r\n    <li>Bertanggungjawab terhadap absensi karyawan dari tarik data mesin & upload ke program HC, monitoring kehadiran setiap hari, upload jadwal shift , ubah jadwal shift ( pertukaran shift ) dan monitor hutang cuti karyawan.</li>\r\n    <li>Memasukkan dan memperbaharui data karyawan ke dalam program HR.</li>\r\n    <li>Memastikan pendaftaran BPJS Ketenagakerjaan dan BPJS Kesehatan sesuai dengan SOP dan peraturan yang berlaku.</li>\r\n    <li>Memberikan pelayanan kepada karyawan yang membutuhkan data/informasi yang berkaitan dengan kepersonaliaan antara lain data cuti, print absen, surat kepersonaliaan, dll.</li>\r\n    <li>Mendaftarkan data ketenagakerjaan wajib lapor secara online setiap bulan.</li>\r\n    <li>Bertanggungjawab terhadap administrasi karyawan keluar dari clearance sheet , pembuatan surat jawaban pengunduran diri, memastikan barang & ID Card dikembalikan , pembuatan surat referensi kerja dan arsip dokumen.</li>\r\n    <li>Membuat laporan yang berkaitan dengan Kepersonaliaan antara lain : Pelaksanaan Pembinaan karyawan, Laporan PA Online, LSG, dll.</li>\r\n    <li>Melakuan pengarsipan dokumen-dokumen kepersonaliaan Softcopy & hardcopy antara lain : data karyawan (FLK,dll) ,Surat Pernyataan Pajak, Clearance sheet, Surat Keterangan, Surat Peringatan ,dll dalam odner.</li>\r\n    <li>Membuat, menginput career history dan mengarsip Surat-surat kepersonaliaan antara lain : Surat Pengangkatan Tetap, Promosi, Mutasi, Rotasi, Penugasan , Surat Peringatan.</li>\r\n</ul>', 'sir.png'),
(4, 'PT Platindo Cipta Raya', 'HR & GA', '2021-07-01', '2021-08-20', 'Keluar', 'Tangerang', '<ul class=\"text-justify\">\r\n    <li>Bertanggungjawab terhadap karyawan baru dari pengisian formulir-formulir , pendaftaran sidik jari, pembuatan ID card, input data karyawan baru ke program HC dan Sunfish, pengenalan karyawan baru ke seluruh karyawan.</li>\r\n    <li>Bertanggungjawab terhadap absensi karyawan dari tarik data mesin & upload ke program HC dan Sunfish, monitoring kehadiran setiap hari, upload jadwal shift , ubah jadwal shift ( pertukaran shift ) dan monitor hutang cuti karyawan.</li>\r\n    <li>Memasukkan dan memperbaharui data karyawan ke dalam program HR.</li>\r\n    <li>Memastikan pendaftaran BPJS Ketenagakerjaan dan BPJS Kesehatan sesuai dengan SOP dan peraturan yang berlaku.</li>\r\n    <li>Memberikan pelayanan kepada karyawan yang membutuhkan data/informasi yang berkaitan dengan kepersonaliaan antara lain data cuti, print absen, surat kepersonaliaan, dll.</li>\r\n    <li>Mendaftarkan data ketenagakerjaan wajib lapor secara online setiap bulan.</li>\r\n    <li>Bertanggungjawab terhadap administrasi karyawan keluar dari clearance sheet , pembuatan surat jawaban pengunduran diri, memastikan barang & ID Card dikembalikan , pembuatan surat referensi kerja dan arsip dokumen.</li>\r\n    <li>Membuat laporan yang berkaitan dengan Kepersonaliaan antara lain : Pelaksanaan Pembinaan karyawan, Laporan PA Online, LSG, dll.</li>\r\n    <li>Melakuan pengarsipan dokumen-dokumen kepersonaliaan Softcopy & hardcopy antara lain : data karyawan (FLK,dll) ,Surat Pernyataan Pajak, Clearance sheet, Surat Keterangan, Surat Peringatan ,dll dalam odner.</li>\r\n    <li>Membuat, menginput career history dan mengarsip Surat-surat kepersonaliaan antara lain : Surat Pengangkatan Tetap, Promosi, Mutasi, Rotasi, Penugasan , Surat Peringatan.</li>\r\n    <li>Bertanggung jawab mengurus izin-izin perusahaan.</li>\r\n    <li>Mengurus dan mengontrol kendaraan perusahaan, (Perpanjangan STNK, Perpanjangan KIR, Servis, pergantian sparepart).</li>\r\n    <li>Membuat proposal Rencana Perjalanan Dinas, membuat laporan dan biaya akomodasi perjalanan dinas.</li>\r\n</ul>', 'platindo.jpg'),
(7, 'PT Rackindo Setara Perkasa', 'Personalia', '2021-08-25', '0000-00-00', 'Aktif', 'Jakarta Barat', '<ul>\r\n    <li>Bertanggung jawab penerimaan karyawaan baru</li>\r\n    <li>Bertanggung jawab tentang PKWT</li>\r\n    <li>Bertanggung jawab tentang absensi dan lembur</li>\r\n    <li>Bertanggung jawab atas surat-surat ijin karyawan</li>\r\n    <li>Bertanggung jawab atas BPJS Kesehatan dan Ketenagakerjaan</li>\r\n    <li>Bertanggung jawab atas SOP perusahaan</li>\r\n    <li>Menganalisa sistem yang berjalan terkait HR</li>\r\n    <li>Menyiapkan data untuk membangun aplikasi HR</li>\r\n    <li>Membuat database sesuai dengan kebutuhan</li>\r\n    <li>Merancang/membuat aplikasi HR</li>\r\n    <li>Menjalankan aplikasi dan mengimplementasikan ke HR</li>\r\n    <li>Memperbaiki aplikasi ketika ada error</li>\r\n    <li>Merawat dan mengembangkan aplikasi yg sudah di buat</li>\r\n</ul>', 'rackindo.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`penid`);

--
-- Indeks untuk tabel `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`pengid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `penid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `pengid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
