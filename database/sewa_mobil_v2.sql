-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2024 at 07:42 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewa_mobil_v2`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `article_category_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int NOT NULL DEFAULT '0',
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `user_id`, `article_category_id`, `title`, `slug`, `desc`, `img`, `views`, `status`, `publish_date`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'Wisata Sejuk Tlogo Putri Kaliurang', 'wisata-sejuk-tlogo-putri-kaliurang', '<p>Hai para kaum Travaller, bagaimana nih kabarnya? kali ini mimin mau spill tempat wisata yang ada di dekat Gunung Merapi nih gengs. Kalo kata anak zaman sekarang sih Hidden Gems gengs. Bayangin aja ada suatu tempat yang letaknya tidak jauh dari puncak Gunung Merapi, kalian bisa melihat pohon-pohon besar pemandangan yang masih asri, sejuk, dan seringkali kalian juga bisa melihat hewan primata disini lho gengs.</p>\r\n\r\n<p>Yups, Tlogo Putri Kaliurang adalah tempat yang menyajikan seperti itu, dimana tempatnya yang masih asri karena banyak pepohonan yang rimbun, serta primata yang sering menyapa kalian juga gengs. Pokoknya Tlogo Putri Kaliurang ini cocok banget buat kalian yang haus akan travelling, karena Tlogo Putri Kaliurang ini salah satu tempat wisata paling sering dikunjungi oleh para wisatawan lho gengs.</p>\r\n\r\n<p><strong>Mengenal Tlogo Putri Kaliurang</strong></p>\r\n\r\n<p>Tlogo Putri merupakan tempat wisata yang masih sangat asri karena berada di kawasan lereng gunung Merapi, masih begitu banyak pepohonan dan banyak juga hewan-hewan yang tinggal dikawasan Tlogo Putri salah satunya burung, monyet, elang jawa. Pokoknya dijamin bikin pikiran jadi tenang dengan mendengar suara kicau burung, udara yang masih segar, masih sejuk, jauh dari hiruk pikuknya kota deh pokoknya gengs.</p>\r\n\r\n<p>Tak hanya itu gengs di Tlogo Putri Kaliurang juga terdapat danau air tawar yang jernih gengs. Danau ini memiliki air yang jernih berwarna kehijauan gengs, serta permukaan air yang tenang gengs.</p>\r\n\r\n<p>Danau yang ada di Tlogo Putri Kaliurang ini juga cocok banget untuk spot foto nih gengs pokoknya tempatnya cocok banget buat posting Instagram kalian nih gengs.</p>\r\n\r\n<p><strong>Sejarah Tlogo Putri Kaliurang</strong></p>\r\n\r\n<p>Jadi gengs nama Tlogo Putri itu berasal dari kata &quot;Tlogo&quot; yang mempunyai arti Telaga dan &quot;Putri&quot; yang memiliki arti Putri atau Bidadari nih gengs. Hal ini tidak jauh dari cerita rakyat setempat nih gengs.</p>\r\n\r\n<p>Karena menurut cerita dulunya danau ini konon adalah tempat mandi para bidadari dari kahayangan gengs. Tentu ini merupakan cerita turun temurun yang berkembang di masyarakat sekitar gengs yang belum tentu memiliki buktinya. Meski begitu, masyarakat tetap meyakini cerita yang berkembang ini dan telah menjadi daya tarik tersendiri bagi wisatawan.</p>\r\n\r\n<p>Selain itu, diyakini juga nih gengs bahwa jika air telaga dapat membawa kebaikan, jika kita membasuh wajah dengan air dari telaga ini gengs, katanya dapat membuat wajah kita awet muda gengs.</p>\r\n\r\n<p><strong>Tiket Masuk Tlogo Putri Kaliurang</strong></p>\r\n\r\n<p>Tiket Masuk&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rp 6.000</p>\r\n\r\n<p>Sewa Skuter&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rp 15.000-Rp 35.000</p>\r\n\r\n<p>Parkir Motor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rp 2.000</p>\r\n\r\n<p>Parkir Mobil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rp 10.000</p>\r\n\r\n<p>Parkir Bus&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rp 20.000</p>\r\n\r\n<p><strong>Jam Buka Tlogo Putri Kaliurang</strong></p>\r\n\r\n<p>Jangan khawatir gengs karena objek wisata ini buka setiap hari kok gengs dan dapat dinikmati dari pagi hingga sore. Saat libur ataupun akhir pekan, tempat ini seringkali ramai wisatawan. Jika inging tidak terlalu ramai temen-temen bisa datang dihari biasa atau weekdays.</p>\r\n\r\n<p>Jam operasional Tlogo Putri Kaliurang mulai dari jam 07:00 - 18:00 WIB</p>\r\n\r\n<p><strong>Lokasi dan Rute Menuju Tlogo Putri Kaliurang</strong></p>\r\n\r\n<p>Kawasan wisata Tlogo Putri Kaliurang ini berlokasi di Jalan Tlogo Putri, Kaliurang, Hargobinangun, Kecamatan Pakem, Kabupaten Sleman, Daerah Istimewa Yogyakarta.</p>\r\n\r\n<p>Temen - temen bisa menaiki kendaraan pribadi dari pusat kota Yogyakarta menuju ke arah utara di Jalan Kaliurang sekitar 1 jam 30 menit perjalanan dari pusat kota, jika temen - temen bingung mencari kendaraan tenang aja nih gengs di Jogja banyak jasa yang melayani sewa motor dan mobil. Salah satunya sewa Bus dan Mobil di JM Transindo nih gengs, JM Transindo merupakan usaha yang berkembang di bidang jasa sewa Bus dan Mobil gengs, jadi temen - temen gak perlu bingung lagi, dan tenang aja mobilnya bersih, wangi, dan dijamin nyaman gengs.</p>\r\n\r\n<p><strong>Fasilitas Tlogo Putri Kaliurang</strong></p>\r\n\r\n<p>Adapun fasilitas yang disediakan di objek wisata Tlogo Putri Kaliurang ini ada banyak gengs, seperti :</p>\r\n\r\n<ul>\r\n	<li>Mushola</li>\r\n	<li>Lahan Parkir</li>\r\n	<li>Toilet</li>\r\n	<li>Fasilitas Hiburan</li>\r\n	<li>Stand Makanan</li>\r\n</ul>\r\n\r\n<p>Terlebih lagi pada saat hari peringatan khusus, hari libur, atau akhir pekan akan ada berbagai acara yang berlangsung, seperti pementasan wayang kulit, campur sari, grup band musik, hingga lakon pelawak gengs.</p>', 'article/01JEE9F23VD0CJDCCNQ5QY3G0D.jpg', 2, 'private', '2024-10-22', '2023-12-08 23:32:29', '2024-12-06 22:57:45'),
(2, 1, 1, 'Berwisata Kuliner Kopi Klotok', 'berwisata-kuliner-kopi-klotok', '<p>Hallo sobat traveller yang budiman, gimana nih udah pada kangen liburan ke Jogja belum nih? Kali ini mimin akan spill satu tempat kuliner yang paling legend di Jogja nih gengs, dijamin kalian gak akan nyesel kalo ke tempat ini nih karena makanannya yang wuenakk, murah, pokoknya the best bangetlah.</p>\r\n\r\n<p>Jadi gengs nama tempat yang super duper keren itu namanya Kopi Klotjok gengs. Apa sih Kopi Klothok itu? sama gak sih sama kopi kopi cafe lainnya?. Tenang - tenang pasti mimin akan spill kok, karena kebetulan pas nulis artikel ini mimin habis dari sana nih gengs, dan makanannya enak - enak banget lho gengs. Kalo di rating 10 dari 10 gengs, wah makin penasaran gak tuh? Yuk tanpa berlama - lama lagi nih mimin jelasin lengkap yaa, cekidot.</p>\r\n\r\n<p><strong>Mengenal Warung Kopi Klotok</strong></p>\r\n\r\n<p>Jadi gengs Kopi Klotok adalah minuman kopi tradisional yang berasal dari kota Yogyakarta, Indonesia nih gengs. Cara penyajian yang unik menjadi daya tarik wisatawan untuk mengunjungi warung Kopi Klotok ini gengs. Berbeda dengan cara pembuatan modern yang diseduh, Kopi Klotok terlebih dahulu direbus dalam panci diatas tungku arang sehingga mengeluarkan bunyi <em>klotok-klotok </em>yang khas ketika mendidih. Kata kebanyakan orang metode pembuatan kopi seperti in sangat mirip seperti cara pembuatan kopi tradisional di Turki.</p>\r\n\r\n<p><strong>Sejarah dan Asal Usul Kopi Klotok</strong></p>\r\n\r\n<p>Kopi Klotok memiliki sejarah dan asal usulnya juga lho gengs, mau tau? Jadi konon katanya, kopi klotok ini dulu disajikan kepada para raja dan bangsawan Keraton Yogyakarta pada masa kejayaan Kerajaan Mataram. Alat tradisional atau &quot;klotok&quot; sendiri dapat dikatakan sangat tua usianya lho gengs, bahkan sudah digunakan sejak nenek moyang kita sejak zaman dahulu kala. Hingga saat ini, Warung Kopi Klotok Jogja masih menggunakan cara tradisional dengan mempertahankan alat dan teknik pembuatan yang masih tradisional. Karena bagi masyarakat Yogyakarta sendiri kopi ini bukan hanya sekedar minuman gengs, melainkan juga merupakan bagian budaya dan tradisi mereka yang harus dilestarikan.</p>\r\n\r\n<p><strong>Tarif Harga di Warung Kopi Klotok</strong></p>\r\n\r\n<ul>\r\n	<li>Parkir Motor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rp 2.000</li>\r\n	<li>Parkir Mobil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rp 5.000</li>\r\n</ul>\r\n\r\n<p>Paket Makan PUAS Rp 13.500 (per orang, makan nasi sayur sepuasnya ditempat)</p>\r\n\r\n<ul>\r\n	<li>Lodeh Tempe Lombok Ijo</li>\r\n	<li>Lodeh Kluwih</li>\r\n	<li>Lodeh Terong</li>\r\n	<li>Sambel Dadak</li>\r\n	<li>Nasi Putih</li>\r\n	<li>Sego Megono</li>\r\n</ul>\r\n\r\n<p>Lauk</p>\r\n\r\n<ul>\r\n	<li>Tempe Garit&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Rp 2.000</li>\r\n	<li>Tahu Bacem&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; Rp 3.500</li>\r\n	<li>Telur Krispi&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; Rp 7.500</li>\r\n	<li>Ayam Goreng &nbsp;&nbsp; &nbsp; Rp 7.500</li>\r\n	<li>Pindang Goreng&nbsp; Rp 3.500</li>\r\n</ul>\r\n\r\n<p>Jajanan</p>\r\n\r\n<ul>\r\n	<li>Jadah Tempe (isi 3) Rp 6.000</li>\r\n	<li>Pisang Goreng (isi 2) Rp 6.500</li>\r\n</ul>\r\n\r\n<p>Minuman</p>\r\n\r\n<ul>\r\n	<li>Teh Tawar&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Rp 1.000</li>\r\n	<li>Teh Manis Panas&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Rp 3.500</li>\r\n	<li>Es Teh Manis&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Rp 4.500</li>\r\n	<li>Jeruk Panas/ Es Jeruk&nbsp;&nbsp;&nbsp; Rp 4.900</li>\r\n	<li>Wedhang Jahe Gepuk&nbsp;&nbsp;&nbsp; Rp 6.500</li>\r\n	<li>Teh Tubruk Gula Batu&nbsp;&nbsp;&nbsp;&nbsp; Rp 6.500</li>\r\n	<li>Kopi Klotok&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rp 5.000</li>\r\n</ul>\r\n\r\n<p><strong>Jam Buka Warung Kopi Klotok</strong></p>\r\n\r\n<p>Kopi Klotok buka setiap hari lho gengs mulai dari jam 07.00 hingga jam 21.30, tapi jangan kaget bila antrean di tempat makan ini sangat panjang, terutama saat liburan gengs, tapi mimin kasih tips untuk kalian nih gengs :</p>\r\n\r\n<ul>\r\n	<li>Jangan datang sendirian agar ada yang mencari tempat duduk dan mengantre pesanan</li>\r\n	<li>Datanglah sebelum pukul 7 pagi, warungnya memang belum buka, tetapi kita sudah bisa masuk dan belum ramai pengunjung gengs.</li>\r\n</ul>\r\n\r\n<p><strong>Lokasi dan Rute ke Warung Kopi Klotok</strong></p>\r\n\r\n<p>1. Dari pusat Kota Yogyakarta</p>\r\n\r\n<ul>\r\n	<li>Naik angkutan umum TransJogja rute 2A dari halte Jl. Malioboro menuju Kaliurang</li>\r\n	<li>Turun di halte Terminal Kaliurang, lalu naik angkutan umum berupa ojek atau kendaraan pribadi menuju Kopi Klotok Kaliurang. Jarak dari terminal ke kedai Kopi sekitar 3 KM.</li>\r\n</ul>\r\n\r\n<p>2. Dari Bandara Adisucipto Yogyakarta</p>\r\n\r\n<ul>\r\n	<li>Naik angkutan umum TransJogja rute 3A dari halte Bandara Adisucipto menuju Jl. Malioboro.</li>\r\n	<li>Turun di halte Jl. Urip sumoharjo, lalu naik angkutan umum TransJogja rute 2A menuju Kaliurang.</li>\r\n	<li>Turun di halte Kaliurang, lalu naik angkutan umum berupa ojek atau kendaraan pribadi menuju Kopi Klotok Kaliuang. Jarak dari terminal ke kedai kopi sekitar 3 KM.</li>\r\n</ul>\r\n\r\n<p><strong>Fasilitas di Warung Kopi Klotok</strong></p>\r\n\r\n<p>Di warung Kopi Klotok ini sudah memiliki beberapa fasilitas yang memadai seperti :</p>\r\n\r\n<ul>\r\n	<li>Lahan Parkir yang luas</li>\r\n	<li>Kamar Mandi</li>\r\n	<li>Tempat makan yang sejuk</li>\r\n	<li>Tempat makan outdoor sambil menikmati pemandangan sawah dan Gunung Merapi</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 'article/01JEFTR8SASSJ3NJCB5H2240KN.jpg', 0, 'publish', '2024-10-21', '2023-12-09 02:15:56', '2024-12-06 22:57:36'),
(3, 1, 4, 'Wisata Edukasi Ullen Sentalu', 'wisata-edukasi-ullen-sentalu', '<p>Hai hai gengs, gimana nih kabar sobat traveller sekalian? sudah kangen liburan belum nih gengs? Kali ini mimin akan bawa kalian semua ke wisata edukasi nih gengs yang berada di wilayah Kota Yogyakarta gengs. Tepatnya tidak jauh dari lereng Gunung Merapi nih gengs, hayo ada yang pernah kesini belum? Museum Ullen Sentalu nih gengs tempatnya, jadi siapa yang pernah kesini? Tempat ini worth it banget buat kalian yang suka pelajaran sejarah sambil menikmati udara segar serta alami.</p>\r\n\r\n<p>Mimin akan spill destinasi bersejarah yang ada di Kota Yogyakarta atas ini nih gengs, Mulai dari harga tiket masuk, rute perjalanan, sejarah dari Museum Ullen Sentalu itu sendiri, pokoknya disini nanti lengkap banget. Jadi disimak sampai habis ya gengs. Siapa tau jadi wishlist kalian buat mengunjungi tempat ini di hari liburan kalian nih gengs, jadi tanpa berlama - lama lagi langsung disimak gengs, cekidottt.</p>\r\n\r\n<p><strong>Mengenal Museum Ullen Sentalu</strong></p>\r\n\r\n<p>Museum yang beralamat di Jl. Boyong Kaliurang, Sleman, DI Yogyakarta ini diresmikan Pertama kali oleh Gubernur DI Yogyakarta Sri Paduka Paku Alam VIII pada tanggal 1 Maret 1997. Ullen Sentalu memiliki nama yang berarti keren banget lho gengs, berasal dari akronim suatu falsafah dalam Bahasa Jawa &quot;<em>Ulating Blencong Sejatining Tataraning Lumaku&quot; </em>yang bermakna &quot;terang adalah penuntun jalan kehidupan&quot;. keren banget gak tuh gengs artinya.</p>\r\n\r\n<p>Museum Ullen Sentalu hadir berlandaskan inklusivitas dan merupakan ruang bagi dialog budaya dari masa lalu, kini, hingga mendatang. Ullen Sentalu berperan dalam menjembatani tantangan proses budaya masa kini melalui memori kolektif yang menjadi identitas budaya bangsa. Museum Ullen Sentalu banyak mengisahkan tentang peradaban Kerajaan Mataram yang terpecah menjadi 4 Keraton di Solo dan Yogyakarta, yaitu Kasunanan Surakarta, Kesultanan Yogyakarta, Praja Mangkunegaran, dan Kadipaten Pakualaman.&nbsp;</p>\r\n\r\n<p>Para pengunjung dapat melihat banyak lukisan dan foto bangsawan pada zaman tersebut, koleksi kain batik Solo dan Yogyakarta yang ternyata memiliki makna tersendiri, gamelan kuno, arca - arca budaya Hindu dan Budha, serta peninggalan lainnya. Tahu gak gengs kalau kalian mencari foto koleksi Museum Ullen Sentalu di internet dan media sosial pasti akan sangat minim banget gengs, itu karena memang ada peraturan yang tidak diperbolehkan pengunjung untuk mengambil gambar dalam bentuk apapun di hampir seluruh area museum.</p>\r\n\r\n<p>Tapi gengs jangan khawatir, masih ada beberapa spot khusus yang disediakan untuk berfoto. Salah satunya adalah di area replika relief Candi Borrobudur yang dibuat miring, yang menggambarkan penurunan minat generasi muda akan seni dan budaya Jawa. Jadi yuk gengs kita lestarikan budaya apapun itu karena itu budaya dari nenek moyang kita gengs.</p>\r\n\r\n<p><strong>Sejarah dan Asal Usul Museum Ullen Sentalu</strong></p>\r\n\r\n<p>Museum Ullen Sentalu adalah museum swasta yang didirikan oleh Haryono dan dikembangkan bersama keluarganya dibawah naungan Yayasan <em>Ulating Belencong&nbsp; </em>sejak 1994. Nama Ullen Sentalu yang sudah mimin sebutkan diatas tadi mengandung harapan mulia yang tersirat dari pemiliknya agar museum dan koleksi bersejarah didalamnya dapat memperkaya wawasan sejarah budaya Jawa masa lalu dan sebagai cerminan budaya masa kini nih gengs. Sebagai lembaga yang permanen yang bertanggung jawab menjaga dan melestarikan warisan budaya <em>tangible&nbsp; </em>(bendawi) dan terutama <em>intangible (tak bendawi), </em>Museum Ullen Sentalu berperan penting sebagai zona pertemuan antara pewaris budaya dengan warisannya.</p>\r\n\r\n<p>Di samping itu, pengunjung akan dimanjakan dengan keelokan etnis budaya Jawa yang ditengarai pada pintu masuk pintu museum yang bertuliskan &#39;Ullen Sentalu-Museum Seni dan Budaya Jawa&#39; (<em>Javanese Culture and Art Museum</em>). Dan juga gengs Museum ini secara khusus memamerkan koleksi yang memberikan refleksi mengenai aspek kehidupan anggota keluarga bangsawan yang kurang diekspos pada masyarakat luar gengs.</p>\r\n\r\n<p>Kualitas dan keunikan Museum Ullen Sentalu dalam menghadirkan koleksi bersejarah dan mengemas budaya Jawa mampu membuat kawan GNFI terpukau lho gengs. Museum ini pernah disebut sebagai museum terbaik di Indonesia dan peringkat ke-2 menurut pilihan <em>Traveler&#39;s Choice Awards </em>berkat keunikan dan kualitas sistem pengelolaannya gengs.</p>\r\n\r\n<p><strong>Tarif Harga di Museum Ullen Sentalu</strong></p>\r\n\r\n<p>Mimim spill nih gengs harga tiket masuk di Museum Ullen Sentalu nih gengss, cekidott :</p>\r\n\r\n<ul>\r\n	<li>Pengunjung domestik&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp 40.000,-(Dewasa), Rp 20.000,- (5 - 12 Tahun)</li>\r\n	<li>Pengunjung Mancanegara&nbsp;&nbsp; : Rp 100.000,-(Dewasa), Rp 60.000,- (5 - 12 Tahun)</li>\r\n</ul>\r\n\r\n<p><strong>Jam Operasional Museum Ullen Sentalu</strong></p>\r\n\r\n<p>Jadi gengs Museum Ullen Sentalu ini buka setiap hari gengs kecuali di hari Senin ya gengs</p>\r\n\r\n<p>Jam Buka :</p>\r\n\r\n<p>Senin : Tutup</p>\r\n\r\n<p>Selasa - Jumat : 08.00 - 16.00 WIB</p>\r\n\r\n<p>Minggu : 08.30 - 17.00 WIB</p>\r\n\r\n<p>Perlu dicatat juga nih gengs bahwa pembelian tiket dan tur terakhir 30 menit sebelum museum tutup gengs.</p>\r\n\r\n<p><strong>Lokasi dan Rute ke Museum Ullen Sentalu</strong></p>\r\n\r\n<p>Dari pusat Kota Yogyakarta, temen - temen dapat menuju Museum Ullen Sentalu dengan menggunakan kendaraan pribadi atau ojek online. Atau bisa juga temen - temen memakai jasa persewaan mobil dan bis Jogja, salah satunya di JM Transido nih gengs, dijamin supirnya berpengalaman, kendaraannya bersih dan wangi, dijamin deh perjalanan kalian bakalan seru, nyaman, dan full senyum gengs. Nah jarak dari Kota Jogja ke Museum Ullen Sentalu sekitar 27 KM dengan waktu tempuh sekitar 45-60 menit gengs tergantung kondisi kemacetan dijalan gengs.</p>\r\n\r\n<p><strong>Fasilitas di Museum Ullen Sentalu</strong></p>\r\n\r\n<p>Tentu saja di destinasi wisata memiliki fasilitas, nah ini dia fasilitas yang disediakan di Museum Ullen Sentalu :</p>\r\n\r\n<ul>\r\n	<li>Toilet</li>\r\n	<li>Lahan Parkir yang Luas</li>\r\n	<li>Spot foto yang klasik</li>\r\n	<li>Kalau beruntung ketemu jodoh juga gengs, hihihi</li>\r\n</ul>\r\n\r\n<p>So, liburan sebentar lagi nih gengs kapan mau main - main ke Jogja geng? Siapa tau Museum Ullen Sentalu jadi tujuan kalian yang lagi liburan ke Yogyakarta. Tunggu apalagi nih gengs, jangan lupa kalau kalian butuh sewa mobil dan bis di JM Transindo aja gengs, dijamin perjalanan kalian aman dan nyaman gengs, oke cukup sekian ulasan mimin tentang Museum Ullen Sentalu, see you teman - teman.</p>', 'article/01JEFVCT1S4PQ0P4MKXSJ3P3ZZ.jpeg', 10, 'publish', '2024-10-20', '2023-12-09 07:39:02', '2024-12-06 23:02:31'),
(4, 1, 3, 'Desa Wisata Segudang Prestasi di Yogyakarta', 'desa-wisata-segudang-prestasi-di-yogyakarta', '<p>Gengs gengs tau gak ada Desa Wisata di Kota Yogyakarta yang keren abis lho gengs, tempatnya tidak jauh dari lereng Gunung Merapi gengs. Kalian juga tau gak Desa Wisata ini punya segudang prestasi lho gengs, baik dari Dalam Negeri maupun dari Luar Negeri. Desa Wisata Pentingsari, nah ini dia nama desanya gengs ada yang pernah kesini belum nih gengs?</p>\r\n\r\n<p>Wah wah wah mimin excited banget nih gengs mau bahas salah satu obyek wisata dari Kota Gudeg ini nih gengs. Karena kalian tau gak sih gengs? Desa Wisata ini pernah di datangin oleh bapak Menteri Pariwisata Kreatif, Bapak Sandiaga Uno lho gengs. Bukan hanya itu gengs bahkan Youtuber terkenal di Indonesia yaitu Atta Halilintar dan pasangannya Aurel Hermansyah juga pernah datang ke Desa Wisata ini lho gengs. Kalian penasaran gak sih tempatnya dimana, Harganya berapa, fasilitasnya apa aja, ada apa aja di Desa Wisata itu? Tenang - tenang mimin kasih tau kok gengs, jadi disimak ya gengs, buat tambah referensi liburan kalian juga nih gengs, so tanpa basa - basi lagi nih gengs langsung di scroll sampe bawah gengs. asd</p>\r\n\r\n<p><strong>Mengenal Desa Wisata Pentingsari</strong></p>\r\n\r\n<p>Desa yang terletak di lereng Gunung Merapi dan sekitar 22,5 Kilometer dari pusat Kota Yogyakarta ini sudah dikenal di mancanegara sebagai salah satu Desa Wisata dengan segudang penghargaan. Di Desa Wisata Pentingsari ini menyediakan berbagai macam kegiatan wisata gengs, seperti Kenduri adat Jawa, belajar bermain alat musik gamelan, membuat kerajinan tangan seperti batik, wayang rumput, kreasi dari daun janur, dan masih banyak banget gengs kegiatan yang ada di Desa Wisata Pentingsari ini, mimin sampe terpukau saking banyaknya.</p>\r\n\r\n<p>Nah, yang paling unik di Desa Wisata Pentingsari ini kita bisa menginap di rumah - rumah warga gengs, coba bayanging gengs setelah banyak kegiatan yang seru - seru kita tidak perlu repot - repot lagi cari tempat istirahat, yang pastinya sudah tersedia makanan yang disediakan oleh induk semangnya gengs, enak banget gak tuh gengs liburan di Desa Wisata Pentingsari.</p>\r\n\r\n<p>Sudah tempatnya di lereng Gunung Merapi yang pastinya sejuk banget, udaranya sejuk, tenang, damai yang dimana pastinya berasa banget vibes pedesaan yang tentram, damai, pokoknya bikin tenang banget lah gengs. Dimana lagi sih ada kegiatan yang sebanyak itu lengkap dengan penginapannya, makanannya, dan lain-lainnya gengs. Disamping itu gengs kita juga akan di pandu oleh warga lokal yang ada di Desa Wisata Pentingsari, yang dijamin sangat sopan, santun, ramah, pokoknya cerminan masyarakat Jogja banget gengs yang terkenal dengan keramah tamah- an nya.</p>\r\n\r\n<p><strong>Sejarah Desa Wisata Pentingsari</strong></p>\r\n\r\n<p>Sejak dirintisnya Desa Wisata ini tak lepas dari peran yang sangat hebat dari Bapak Doto Yogantoro, menceritakan awal mula Desa Wisata Pentingsari dibangun hingga menjadi Desa Wisata. Bapak Doto Yogantoro bercerita, awalnya beliau bermimpi untuk memberi nilai tambah agar dikenal masyarakat. Bapak Doto Yogantoro juga bercerita, kurang lebih sudah 13 tahun yang lalu, desa kami bermimpi bagaimana kegiatan masyarakat bisa kita kemas, bisa kita tempilkan, dan diapresiasi oleh orang luar atau wisatawan, dan akhirnya hal itu dapat memberikan dampak positif dari sektor ekonomi maupun lingkungan.</p>\r\n\r\n<p>Seperti yang kita ketahui bersama nih gengs, bahwasannya Kota Yogyakarta telah lama orang mengenalnya dengan Pantai Parangtritis dan Candi Prambanan, dari sana Bapak Doto juga ingin mendapatkan rezeki itu dari sisi pariwisata, dalam arti mereka tetap bertani, tapi mereka mendapatkan tambahan bonus dari pariwisata, salah satu cara untuk mendapatkan bonus ya dengan membangun desa wisata, wah keren banget ya geng gagasan dari Bapak Doto.</p>\r\n\r\n<p>Oleh karena itu, bersama warga desa setempat sepakat untuk menjadikan aktivitas sehari - hari di desa sebagai daya tarik wisata. Ternyata para wisatawan tertarik tinggal di desa, menginap di homestay, makan ala orang desa, dan aktivitas layaknya orang desa. Karena kegigihan menjual aktivitas masyarakat desa, Pentingsari telah mendapat penghargaan mulai dari Indonesia Suistainable Tourism Awards (ISTA) pada tahun 2017 dalam kategori ekonomi. Tidak hanya itu nih gengs Desa Wisata Pentingsari juga pernah masuk 100 Top destinasi pariwisata berkelanjutan di dunia versi Global Green Destinations Days (GGDD) 2019. Diberitakan <em>Kompas.com</em>, Selasa (29/10/2019), hanya ada empat desa di Indonesia yang masuk penghargaan tersebut, yaitu Desa Pemuteran (Bali), Desa Panglipuran (Bali), Desa Wisata Nglanggeran (Yogyakarta), dan Desa Wisata Pentingsari (Yogyakarta). Wah keren banget gak tuh gengs.</p>\r\n\r\n<p><strong>Harga Paket yang Ada di Desa Wisata Pentingsari</strong></p>\r\n\r\n<p>Nah gengs untuk harga paket di Desa Wisata Pentingsari untuk selengkapnya nanti kalian hubungi marketing yang ada di web Desa Wisata Pentingsari ya gengs, soalnya banyak banget kegiatan yang disediakan di Desa Wisata Pentingsari ini gengs, mimin akan spill sedikit aja ya gengs, cekidott :</p>\r\n\r\n<ul>\r\n	<li>Tanam Padi : Rp 35.000,-/orang</li>\r\n	<li>Belajar Membatik : Rp 45.000,-/orang</li>\r\n	<li>Kreasi Wayang Suket : Rp 25.000,-/orang</li>\r\n	<li>Membajak Sawah : Rp 35.000,-/orang</li>\r\n	<li>Menginap di Homestay(include makan 2x) : Rp 150.000,-/orang</li>\r\n	<li>Tarian Penyambutan : Rp 45.000,-/orang</li>\r\n</ul>\r\n\r\n<p>Nah itu dia gengs, sebagian kecil harga paket yang ada di Desa Wisata Pentingsari karena banyak banget gengs, untuk selengkapnya kalian cek website Desa Wisata Pentingsari atau menghubungi langsung marketing Desa Wisata Pentingsari ya gengs.</p>\r\n\r\n<p><strong>Jam Buka Desa Wisata Pentingsari</strong></p>\r\n\r\n<p>Untuk jam buka Desa Wisata Pentingsari itu setiap hari gengs mulai jam 08.00 - 16.00, tapi gengs jika kalian ingin reservasi terlebih dahulu tengan aja gengs marketing di Desa Wisata Pentingsari selalu standby selama 24 jam kok gengs. Jadi tunggu apa lagi gengs kapan nih mau berkunjung ke Desa Wisata yang super duper keren ini gengs, dijamin healing kalian akan berasa seru banget gengs.</p>\r\n\r\n<p><strong>Lokasi dan Rute ke Desa Wisata Pentingsari</strong></p>\r\n\r\n<p>Temen - temen bisa menaiki kendaraan pribadi dari pusat kota Yogyakarta menuju ke arah utara di Jalan Kaliurang sekitar 1 jam 30 menit perjalanan dari pusat kota, jika kalian mencari di google maps langsung saja gengs ketik Desa Wisata Pentingsari gengs pasti langsung ketemu. Nah, jika temen - temen bingung mencari kendaraan tenang aja nih gengs di Jogja banyak jasa yang melayani sewa motor dan mobil. Salah satunya sewa Bus dan Mobil di JM Transindo nih gengs, JM Transindo merupakan usaha yang berkembang di bidang jasa sewa Bus dan Mobil gengs, jadi temen - temen gak perlu bingung lagi, dan tenang aja mobilnya bersih, wangi, dan dijamin nyaman gengs.</p>\r\n\r\n<p><strong>Fasilitas di Desa Wisata Pentingsari</strong></p>\r\n\r\n<p>Adapun fasilitas yang disediakan di Desa Wisata Pentingsari ini ada banyak banget gengs, seperti :</p>\r\n\r\n<ul>\r\n	<li>Lahan Parkir yang luas dan mampu menampung 13 Bus sekaligus</li>\r\n	<li>Toilet umum yang memadai</li>\r\n	<li>Masjid Desa</li>\r\n	<li>Pemandu yang profesional</li>\r\n	<li>Jaringan internet di tempat umum</li>\r\n	<li>Makanan yang enak ala desa</li>\r\n</ul>\r\n\r\n<p>Nah itu dia mengenai Desa Wisata yang keren banget nih, coba nih kalian jadwalin agenda untuk ke Desa Wisata Pentingsari, cobain deh gengs orang - orangnya ramah banget gengs, mana makanannya enak - enak banget gengs, kegiatan seru - seru semua gengs, dan terlebih udaranya sejuk juga jauh dari polusi dan hiruk pikuk kota gengs, pokoknya paket lengkap banget deh gengs.</p>', 'article/01JEFVDFDZQSQGPKG9D9EB0TTH.webp', 3, 'publish', '2024-10-10', '2023-12-09 23:19:39', '2024-12-06 23:02:53'),
(5, 1, 3, 'Tempat Perlindungan yang Kini jadi Obyek Wisata', 'tempat-perlindungan-yang-kini-jadi-obyek-wisata', '<p>Hallo gengs ketemu lagi nih sama mimin, kalo miminada disini kalian tidak perlu khawatir nih gengs, karena mimin hadir untuk memenuhi asupan liburan kalian gengs. Mulai dari spill tempat - tempat menarik yang harus kalian kunjungi, lokasinya dimana, harga tiket masuknya berapa, fasilitasnya apa aja, pokoknya lengkap banget deh gengs.</p>\r\n\r\n<p>Nah, harini banget nih mimin mau bahas tempat wisata yang memiliki sejarah yang keren banget gengs, yang kini menjadi salah satu obyek wisata yang paling sering di kunjungi apalagi kalau lagi libur sekolah gengs. Berlokasi di Kepuharjo, Kapanewon Cangkringan, Kabupaten Sleman, namanya adalah Bunker Kaliadem gengs. Menjadi salah satu <em>spot </em>destinasi wisata di kawasan lereng Gunung Merapi para wisatawan yang berkunjung dapat melihat langsung bangunan bunker, bahkan masuk ke bagian dalamnya gengs.</p>\r\n\r\n<p><strong>Mengenal Bunker kaliadem</strong></p>\r\n\r\n<p>Bunker Kaliadem merupakan bangunan bersejarah bagi masyarakat Yogyakarta nih gengs. Karena bangunan ini dulunya digunakan untuk tempat berlindungnya masyarakat Desa Kepuharjo dari letusan Gunung Merapi. Karena erupsi Gunung Merapi pada tahun 2006 mengakibatkan Bunker Kaliadem ini sudah tidak berfungsi lagi sebagai tempat perlindungan, dan oleh masyarakat setempat bangunan ini dijadikan sebagai obyek wisata yang dimana setiap harinya ramai pengunjung yang datang, apalagi jika hari libur sudah tiba, bahakan tidak sedikit wisatawan mancanegara yang datang mengunjungi tempat ini.</p>\r\n\r\n<p>Selain cerita dibalik bangunan Bunker ini, tempat yang terletak dikawasan lereng Gunung Merapi ini sangat cocok dikunjungi karena pemandangannya yang super keren banget dengan background langsung Gunung Merapi. Udara yang masih asri dan sejuk juga mendukung tempat wisata ini sebagai destinasi yang layak dikunjungi sebagai obyek wisata di Kota Yogyakarta. Biasanya wisatawan yang datang ke Bunker Kaliadem ini berkunjung dengan menyewa jasa persewaan jeep yang juga tersedia di kawasan kaliadem tersebut.</p>\r\n\r\n<p><strong>Sejarah Obyek Wisata Bunker Kaliadem</strong></p>\r\n\r\n<p>Bunker Kaliadem dibangun oleh Pemerintah Kabupaten Sleman sekitar 2000-an dan mulanya difungsikan sebagai tempat berlindung dari awan panas Gunung Merapi. Proses pembangunan Bunker Kaliadem berlangsung selama 2 tahun, dan seperti yang mimin bilang tadi pada erupsi Gunung Merapi pada tahun 2006 yang dimana material vulkanik dari Gunung Merapi menutup seluruh bangunan Bunker Kaliadem gengs.</p>\r\n\r\n<p>Nah gengs, tadinya Bunker Kaliadem ini mau dijadikan sebagai monumen dan dibuat seperti museum alam, tetapi pihak desa setempat berkeinginan untuk mengelola Bunker Kaliadem kemudian mengirimkan surat izin, dan itulah mengapa hingga saat ini Bunker Kaliadem menjadi obyek wisata yang dikelola langsung oleh pihak wraga setempat gengs. Dibalik obyek wisata yang bersejarah sekali, Bunker Kaliadem ini juga mempunyai kisah pilu tersendiri bagi warga desa setempat gengs, karena bencana alam erupsi Gunung Merapi yang melanda desa tersebut.</p>\r\n\r\n<p><strong>Harga Tiket Masuk Bunker Kaliadem</strong></p>\r\n\r\n<p>Harga tiket masuk Retribusi TPR Kaliadem adalah Rp 6.000. per orang. Harga karcis tersebut belum termasuk sewa Jeep Merapi dan sewa motor Trail Kaliadem.Jika kamu menggunakan kendaraan pribadi seperti mobil dan bus pariwisata, sebaiknya sewa Jeep Lava Tour Merapi dengan kapasitas 4-5 orang per Jeep.</p>\r\n\r\n<p>Nah, mimin juga akan spill nih harga jeep lava tour buat kalian temen - temen travelling mimin, langsung aja ya :</p>\r\n\r\n<ul>\r\n	<li>Paket Short: Rp 350.000</li>\r\n	<li>Paket Medium: Rp 450.000</li>\r\n	<li>Paket Long: 550.000</li>\r\n	<li>Paket Sunrise: Rp 700.000</li>\r\n</ul>\r\n\r\n<p>Beberapa rute tempat yang didatangi atau di lewati oleh Lava Tour adalah:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Rumah mbah maridjan</li>\r\n	<li>Bunker Kaliadem</li>\r\n	<li>Kopi Merapi</li>\r\n	<li>Stone Hange</li>\r\n	<li>The Lost World Castle</li>\r\n	<li>Bukit Klangon</li>\r\n	<li>Batu Alien</li>\r\n	<li>Kali Kuning</li>\r\n</ol>\r\n\r\n<p>Namun, tidak semua tempat diatas dilewati. Banyaknya jumlah tempat yang di lewati sesuai paket Lava Tour Jeep merapi yang kita ambil. Ada beberapa paket yang bisa kita pilih.</p>\r\n\r\n<p><strong>Fasilitas di Bunker Kaliadem</strong></p>\r\n\r\n<p>Walaupun lokasi Objek wisata Kaliadem berada di lereng Gunung Merapi, namun secara fasilitas yang ada sudah memenuhi kebutuhan wisatawan. Berikut beberapa fasilitas umum yang tersedia di Bunker Kaliadem Jogja:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Area Parkir khusus sepeda motor. Area parkir dikhususkan untuk sepeda motor karena kendaraan roda empat dilarang naik sampai atas.</li>\r\n	<li>Warung makan dan oleh-oleh khas Kaliadem. Banyak berderet warung-warung makan warga yang menjajakan menu kuliner sederhana seperti mie instan, bakso, soto, nasi goreng.</li>\r\n	<li>Toilet. Walaupun lokasinya jauh dari sumber air, namun keberadaan WC umum sudah ada di tempat ini.</li>\r\n	<li>Jeep Merapi Lava Tour. Bagi yang naik mobil atau bus besar, bisa sewa Jeep lava Tour dengan harga sesuai paket.</li>\r\n	<li>Motor Trail. Bagi yang pengen nyobain berpetualang menggunakan motor, ada persewaan motor Trail di kawasan Bunker Kaliadem.</li>\r\n</ol>\r\n\r\n<p><strong>Lokasi dan Rute ke Bunker Kaliadem</strong></p>\r\n\r\n<p><strong>Transportasi menuju Bunker Kaliadem Merapi</strong></p>\r\n\r\n<p>Kendaraan umum untuk menuju Kaliadem bisa dengan kendaraan pribadi, seperti mobil dan sepeda motor. Bagi anda yang dari luar kota, bisa sewa mobil Jogja dengan cara chat admin di tombol hijau dibawah.</p>\r\n\r\n<p>Tidak ada kendaraan transportasi umum seperti angkot, ataupun bus yang menuju Bunker Kaliadem dari pusat kota Jogja, Malioboro ataupun stasiun Tugu Yogyakarta.</p>\r\n\r\n<p><strong>Rute menuju Kaliadem dari Malioboro Jogja</strong></p>\r\n\r\n<p>Akses jalan menuju Bunker Kaliadem memang sudah beraspal halus. Dari kota hingga sampai TPR Kaliadem masih bisa diakses menggunakan sepeda motor, mobil, bahkan Bus pariwisata. Namun, mulai dari operator Jeep terakhir cuma bisa diakses menggunakan sepeda motor.<br />\r\n&nbsp;</p>\r\n\r\n<p>Mobil, dan bus tidak diperbolehkan menuju Bunker Kaliadem. Kita harus sewa Jeep Merapi atau sewa Motor Trail.</p>\r\n\r\n<p>Kamu dari Stasiun Tugu Yogyakarta? Bingung mau ke Kaliadem dari Malioboro? Berikut rute menuju Kawasan Lava Tour Jeep Merapi dari pusat kota Jogja:<br />\r\n&nbsp;</p>\r\n\r\n<p>Arahkan kendaraan menuju jalan Abu Bakar Ali kearah Stadion Kridosono. belok kiri ke Jalan Suroto lurus terus sampai di Bundaran Kampus UGM. Dari bundaran belok kiri ke Jalan Terban hingga sampai di perempatan Mirota Kampus UGM dan KFC UGM. Belok kanan ke Jalan Persatuan hingga sampai di perempatan Jalan Kaliurang MM UGM.<br />\r\n&nbsp;</p>\r\n\r\n<p>Mulai dari Jalan Kaliurang, laju kendaraanmu lurus tanpa belok, ikuti jalan sejauh 17,5 kilometer hingga sampai pada sebuah petunjuk arah yang menunjukan ke Kaliadem. Belok kanan menuju jalan kalikuning lurus terus ikuti jalan sampai di perempatan Kelurahan Umbularjo. Belok kiri lurus ikuti jalan menanjak ke Jalan Raya Merapi Golf. Nanti akan sampai di TPR Kaliadem.</p>\r\n\r\n<p><strong>Jam Operasional Bunker Kaliadem</strong></p>\r\n\r\n<p>Waktu yang pas untuk berkunjung, berwisata ke Bunker Kaliadem adalah pagi hari. Kenapa harus pagi hari ke Kaliadem? Biasanya saat pagi, Gunung Merapi menampakan keindahan dan kegagahanya, jika waktu sudah agak siang, Merapi sudah tertutup awan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Jam Operasional TPR Kaliadem sekitar Jam 08:00 sampai jam 16:00. Namun jika kamu pengen menikmati sunrise kesini, diperbolekan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 'article/01JEFVE811P2Y32R0WGXQGXBMV.jpg', 86, 'publish', '2024-10-11', '2023-12-10 01:24:23', '2024-12-06 23:03:18');

-- --------------------------------------------------------

--
-- Table structure for table `article_categories`
--

CREATE TABLE `article_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article_categories`
--

INSERT INTO `article_categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'KULINER', 'kuliner', '2024-12-19 07:22:46', '2024-12-19 07:22:46'),
(2, 'TRANSPORTASI', 'transportasi', '2024-12-19 07:22:46', '2024-12-19 07:22:46'),
(3, 'DESTINASI', 'destinasi', '2024-12-12 07:23:30', '2024-12-19 07:23:30'),
(4, 'SEJARAH', 'sejarah', '2024-12-19 07:23:30', '2024-12-19 07:23:30'),
(5, 'KEUNIKAN ALAM', 'keunikan-alam', '2024-12-06 00:57:18', '2024-12-06 01:11:18');

-- --------------------------------------------------------

--
-- Table structure for table `article_category_article`
--

CREATE TABLE `article_category_article` (
  `id` bigint UNSIGNED NOT NULL,
  `article_id` bigint UNSIGNED NOT NULL,
  `article_category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('356a192b7913b04c54574d18c28d46e6395428ab', 'i:3;', 1733551409),
('356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1733551409;', 1733551409),
('a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1733541883),
('a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1733541883;', 1733541883),
('article_categories', 'a:0:{}', 1733553460);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_12_06_071147_create_article_categories_table', 1),
(5, '2024_12_06_071243_create_vehicle_categories_table', 1),
(6, '2024_12_06_071249_create_package_categories_table', 1),
(7, '2024_12_06_071258_create_articles_table', 1),
(8, '2024_12_06_071304_create_vehicles_table', 1),
(9, '2024_12_06_071313_create_package_tours_table', 1),
(10, '2024_12_06_071320_create_regulations_table', 1),
(11, '2024_12_06_071326_create_configs_table', 1),
(12, '2024_12_07_041513_create_personal_access_tokens_table', 2),
(13, '2024_12_07_064519_create_article_category_article_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `package_categories`
--

CREATE TABLE `package_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_categories`
--

INSERT INTO `package_categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Paket 1 2D1M', 'paket-1-2d1m', '2024-12-06 20:38:34', '2024-12-06 20:38:34');

-- --------------------------------------------------------

--
-- Table structure for table `package_tours`
--

CREATE TABLE `package_tours` (
  `id` bigint UNSIGNED NOT NULL,
  `package_category_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int NOT NULL DEFAULT '0',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `regulations`
--

CREATE TABLE `regulations` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('wdHjpDg3GwTv0fQKNh90fOkXpXKFlY8jZdzLaVI9', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:133.0) Gecko/20100101 Firefox/133.0', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiSTlUdGRDenYxY3hmTHM2NUtsQXNOU2FqTjBjVEh0NVp6b29nUEVtaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9hcnRpY2xlcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkaEZZdVpqcnBjV3RaNU9mNEV2RTRNLjVLR3U0SmduQUJiRU1tZjZqZjBpN3A0b09FZ3N4QVciO3M6ODoiZmlsYW1lbnQiO2E6MDp7fX0=', 1733556095);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'reihan', 'reihannanda11@gmail.com', NULL, '$2y$12$hFYuZjrpcWtZ5Of4EvE4M.5KGu4JgnABbEMmf6jf0i7p4oOEgsxAW', NULL, '2024-12-06 00:20:48', '2024-12-06 00:20:48');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint UNSIGNED NOT NULL,
  `vehicle_category_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int NOT NULL DEFAULT '0',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_categories`
--

CREATE TABLE `vehicle_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_category_id_index` (`article_category_id`);

--
-- Indexes for table `article_categories`
--
ALTER TABLE `article_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_category_article`
--
ALTER TABLE `article_category_article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_category_article_article_id_foreign` (`article_id`),
  ADD KEY `article_category_article_article_category_id_foreign` (`article_category_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_categories`
--
ALTER TABLE `package_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_tours`
--
ALTER TABLE `package_tours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_tours_package_category_id_index` (`package_category_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `regulations`
--
ALTER TABLE `regulations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicles_vehicle_category_id_index` (`vehicle_category_id`);

--
-- Indexes for table `vehicle_categories`
--
ALTER TABLE `vehicle_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `article_categories`
--
ALTER TABLE `article_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `article_category_article`
--
ALTER TABLE `article_category_article`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `package_categories`
--
ALTER TABLE `package_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `package_tours`
--
ALTER TABLE `package_tours`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regulations`
--
ALTER TABLE `regulations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicle_categories`
--
ALTER TABLE `vehicle_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article_category_article`
--
ALTER TABLE `article_category_article`
  ADD CONSTRAINT `article_category_article_article_category_id_foreign` FOREIGN KEY (`article_category_id`) REFERENCES `article_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `article_category_article_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `package_tours`
--
ALTER TABLE `package_tours`
  ADD CONSTRAINT `package_tours_package_category_id_foreign` FOREIGN KEY (`package_category_id`) REFERENCES `package_categories` (`id`);

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_vehicle_category_id_foreign` FOREIGN KEY (`vehicle_category_id`) REFERENCES `vehicle_categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
