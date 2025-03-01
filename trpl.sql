-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 01, 2025 at 07:39 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `file_upload` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `user_id`, `kategori_id`, `judul_berita`, `file_upload`, `isi_berita`, `date_created`) VALUES
(4, 2, 3, 'sLorem ipsum dolor sit amet consectetur a', '675bd75fc3a40.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis repudiandae id nisi ea dignissimos harum veritatis optio sint praesentium ut recusandae perspiciatis quos quas ipsum voluptate voluptatibus autem, consequuntur exercitationem cum asperiores nemo sunt ipsa similique ad. Voluptas libero rerum ducimus molestiae natus amet consequatur exercitationem similique maxime unde consectetur delectus, nisi aut ipsa ullam suscipit deserunt consequuntur officia maiores, harum sed, temporibus facilis! Molestias a dolorum, obcaecati cum suscipit, commodi recusandae voluptatem voluptas corrupti quos quod, velit dignissimos nemo est atque libero. Repellendus veniam amet, vero cumque sequi ad laborum explicabo laboriosam ipsum, maxime excepturi quasi sunt quia ex adipisci asperiores iste tempora eos vitae aliquam impedit! Molestias, laudantium autem ', '2024-12-13 04:06:33'),
(5, 2, 4, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga, eveniet.', '675bdd57dc4e7.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, hic ratione repellat eum qui quidem perspiciatis culpa nesciunt eveniet provident incidunt non corporis quis laborum, magnam aliquid adipisci enim at aliquam voluptas, molestias corrupti. Fugit suscipit tenetur doloribus laborum quos, esse quibusdam expedita voluptate. Maxime dolor minus corporis itaque tenetur! Consequuntur, voluptatum? Nulla quos inventore ipsam, atque maiores excepturi officiis! Totam dolore est, magnam sapiente veritatis necessitatibus! Tenetur dolore vel sunt, magni doloribus quod totam perferendis. Velit atque a optio quae beatae magni perspiciatis rem animi delectus ipsa, quas aperiam eum. Harum voluptates odio, fuga consectetur aperiam perspiciatis veritatis tempora voluptatum reiciendis debitis ipsa ratione animi aspernatur facilis, doloribus ad earum ducimus natus? Deserunt voluptas beatae esse aspernatur quidem! Non corporis similique assumenda aspernatur atque excepturi earum maxime! Voluptate quod sed pariatur quae minima, iusto autem architecto, eos ducimus numquam omnis qui! Provident quaerat laborum, nemo id quod velit architecto facilis maiores mollitia, consectetur labore ipsa earum at fuga sunt doloremque eveniet, dicta molestias suscipit corrupti magni tempora consequatur! Maxime corporis quisquam voluptatibus enim magnam ipsa. Optio, eligendi. Sapiente molestiae facere nihil, autem ex aperiam fugit odio illum ratione illo atque eos blanditiis consectetur ut quam nemo ad qui architecto recusandae, voluptatum veritatis. Quibusdam labore magnam temporibus debitis, eum cupiditate. Nulla eligendi veritatis in ad dicta! Quae qui iusto ratione quas obcaecati consectetur doloribus quos commodi eaque! Dolores hic quos sit odit perspiciatis quaerat at culpa quis cum! Tenetur animi quod dolore delectus consequatur. Asperiores accusamus corrupti cumque eveniet perspiciatis! Quaerat accusamus rerum sed, quidem ea ipsam itaque eos. Voluptas exercitationem a adipisci aut, impedit iusto odio. Nam quasi quaerat repellendus excepturi, earum distinctio voluptatibus aperiam deserunt asperiores totam minima fuga vel minus sed modi corrupti aut eius laborum laudantium commodi non soluta fugiat ipsam praesentium. Non facilis quia beatae!', '2024-12-13 04:22:06'),
(6, 2, 2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, beatae.', '675bd996456ed.png', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque est consequatur nulla obcaecati a, non qui, repellat ipsa iure sed voluptas? Tempora perferendis laudantium, nobis praesentium cum provident, eveniet sed nihil ab accusamus est nemo eius voluptas, doloribus aut laborum itaque voluptates officia culpa voluptate nostrum unde nesciunt autem? Cum porro ullam cupiditate temporibus ipsa voluptatum consectetur molestias! Ut ullam totam, temporibus, inventore magni quae corporis cupiditate, itaque veritatis laborum et corrupti! Obcaecati unde labore hic ducimus consequuntur, incidunt iusto dignissimos dolorem mollitia beatae perferendis itaque quis corporis debitis architecto, aut maiores suscipit necessitatibus, inventore sunt tempora dolor. Laboriosam ab nostrum sit, tenetur odio atque, explicabo officia et qui illo officiis quibusdam enim dolore doloribus modi incidunt dolorem consequuntur aspernatur eaque at omnis eius quia perferendis. Asperiores cum aperiam facilis ipsum molestias dignissimos id voluptatibus dolore dolorem. Possimus laudantium porro tenetur repellendus accusamus temporibus enim est culpa labore aspernatur nulla fugiat cupiditate voluptatem quas ducimus accusantium quibusdam officiis ullam aliquid sed hic quisquam, dolores ut. Sapiente unde beatae alias, est id animi, at praesentium quaerat, in asperiores dolore assumenda ipsam. Similique placeat debitis dolores quisquam sequi? Quam voluptas, esse soluta laudantium maiores expedita, in rem tempora dolor sed perspiciatis. Quaerat eum, distinctio ab error, odio ut consequuntur velit obcaecati quisquam reprehenderit animi a, temporibus nesciunt tempore earum enim reiciendis voluptas voluptate! Alias inventore velit modi fugit similique possimus, accusantium commodi qui obcaecati itaque eos. Praesentium tempore dolor commodi veritatis doloribus libero magnam cupiditate ullam molestiae nisi, delectus hic modi a dolores quos voluptates quia est consectetur quidem odit. Tempore ea odio ex non, corporis neque sed incidunt placeat. Sit, error minima eum qui blanditiis harum natus deleniti sapiente aliquid ratione explicabo! Perferendis quasi fugit aperiam quibusdam totam sit quidem dignissimos quia inventore aliquid eos sequi dolor omnis in a laboriosam dolore expedita sunt aut, nobis temporibus consectetur enim. Reiciendis beatae nesciunt vel, magni repellat, obcaecati consectetur placeat voluptatum totam, hic delectus minima adipisci ipsum ducimus! Alias officia architecto laborum quidem sed accusamus! Tempore asperiores qui cumque. Nihil alias fugit maxime est numquam corrupti sunt aliquam nisi. Ipsa doloremque incidunt dignissimos amet, quod similique eveniet ducimus explicabo voluptatum natus nihil. Recusandae vel deleniti iure consequatur natus itaque pariatur quaerat expedita iste similique, facere asperiores nisi aliquam deserunt dolorem quis voluptas, vitae nobis blanditiis adipisci, beatae voluptatibus laudantium! Perferendis excepturi nemo qui autem recusandae exercitationem dignissimos quia, nesciunt voluptatibus dolorem non unde?', '2024-12-13 06:52:06'),
(7, 2, 4, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, quod?', '675bdd306c3e8.png', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis illum minus rerum nemo soluta saepe neque quisquam quidem odio, ipsum aliquid, maxime doloribus vero consequuntur eos voluptatibus voluptas ut, sit quaerat eum illo! Sint, voluptatum ipsam aut porro debitis et dignissimos vero officia adipisci, odit facilis? Ratione debitis dicta illo a, at velit vel provident modi facere voluptate necessitatibus tenetur voluptatum autem error pariatur eligendi unde laborum harum dolorum maiores quia vero neque cumque! Aspernatur fugiat ex qui doloremque vitae aliquam, quia ea iste ratione veniam libero quidem at perspiciatis deleniti tempora ullam mollitia aut. Tempora eum perspiciatis ut saepe necessitatibus neque impedit officiis fugit perferendis alias ex cupiditate quibusdam ipsam, ullam consequatur animi. Maxime ut doloribus fuga incidunt? Exercitationem dolorem debitis eos voluptates recusandae voluptatem tempore incidunt quos obcaecati in possimus, magnam facere quae repellendus vero eveniet sit nemo maiores molestias perferendis blanditiis nostrum minus aliquam! Omnis earum aut sed iste ipsa voluptates deserunt suscipit vitae commodi officia corrupti quas animi, architecto, ut quis accusamus voluptatibus reiciendis sint aliquam nam ducimus facilis atque? Ex est, voluptatibus provident pariatur itaque incidunt deserunt ducimus veniam, soluta eum laborum consequuntur maxime voluptatem! Explicabo sequi aliquid soluta harum reprehenderit iusto corporis quae dicta rerum, praesentium maiores vero, minima eos laudantium, non ut dolorum? Delectus eaque suscipit impedit saepe aspernatur aut, esse nostrum perferendis magni minus eum quisquam dignissimos explicabo tempore consequuntur, ad earum sed. Atque culpa mollitia debitis commodi voluptatum quis expedita enim quasi ea facilis, adipisci placeat rerum aspernatur id illo ipsum repudiandae. Error, ipsa vero. Quas aspernatur alias rerum ex reprehenderit commodi voluptates corrupti reiciendis quis eaque. Nobis error cupiditate dignissimos accusamus deleniti corrupti mollitia odio numquam, quae impedit aut tenetur recusandae quia iusto architecto aliquam suscipit non voluptas. Esse fugiat a asperiores nobis ex, sed est quia sit distinctio blanditiis, minus quasi maiores corrupti quidem minima vitae? Suscipit illum corrupti facere quasi ut dolores quam nam, sint repellat ex? Neque minima ex ipsum sunt maiores cum quaerat earum eveniet, suscipit, officia quisquam. Dignissimos quod fugit aliquam tempore magnam illum iure. Officia, aspernatur aut. Esse quaerat consequuntur, illum sed facilis obcaecati adipisci deserunt commodi culpa dolorum placeat libero repudiandae eveniet unde nesciunt! Aliquid, nulla repudiandae impedit porro omnis molestiae corrupti consequatur totam odio maiores inventore laboriosam culpa a animi quis officia at magnam ex facere aspernatur hic ea. Delectus qui porro odio impedit consequatur voluptatibus! Aliquid a neque blanditiis corporis tempore!', '2024-12-13 07:04:58'),
(9, 2, 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, maiores!', '67628044dd70b.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis perferendis quas hic corrupti sunt amet quam commodi officiis ipsa numquam? Tempora facilis necessitatibus nisi reiciendis nemo quibusdam. Nisi fuga adipisci explicabo beatae pariatur consequatur tempora eveniet quibusdam expedita dolorum eos repudiandae iusto debitis eum optio itaque in quasi aliquam nihil, sunt sed! Nesciunt, itaque quasi. Tempore sed voluptas repellat nostrum modi suscipit numquam nobis, necessitatibus, et saepe aperiam laborum facilis amet deleniti reiciendis similique magnam totam distinctio ullam, maiores dolore. Temporibus sunt aperiam voluptas consequatur maiores facilis suscipit? Tempora amet omnis nostrum aperiam aspernatur voluptas ad, nihil error iure. Non.', '2024-12-18 07:56:52');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `prodi_id` int(11) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nip`, `nama_dosen`, `email`, `prodi_id`, `telp`, `alamat`) VALUES
(1, 41521521, 'ronal hasdi', 'admin@gmail.com', 10, '21', '421sa'),
(2, 421421, 'reyendra', 'reyy@gmail.com', 11, '0831', 'jalan'),
(3, 31, 'eko', 'fka@g', 10, 'ss', 's');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(2, 'Olahraga'),
(3, 'Komputer'),
(4, 'Politik');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `prodi_id` int(11) NOT NULL,
  `hobi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `tgl_lahir`, `jk`, `email`, `alamat`, `prodi_id`, `hobi`) VALUES
('124151', 'fspkafa', '2024-02-25', 'L', 'ksfoakfo@gmail.com', 'fsafsafsa', 10, 'game'),
('2311082016', 'Fazar adi putra', '2004-02-25', 'L', 'fajar@gmail.com', 'jl. kurao', 12, 'coding,game'),
('2311082102', 'fazar', '2024-02-02', 'P', 'fajar@gmail.com', 'jalan ', 10, 'coding'),
('2311928219', 'fajar', '2019-02-02', 'L', 'jafakar@gmail.com', 'jalan karafazr', 11, 'coding'),
('5892189589', 'fspkafa', '2024-02-25', 'L', 'ksfoakfo@gmail.com', 'fsafsafsa', 10, 'game');

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `kode_mk` varchar(100) NOT NULL,
  `nama_mk` varchar(100) NOT NULL,
  `sks` int(11) NOT NULL,
  `prodi_id` int(11) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`kode_mk`, `nama_mk`, `sks`, `prodi_id`, `semester`) VALUES
('KTRPL01', 'Pancasila', 2, 12, 12),
('MI01', 'Manajemens', 2, 13, 3);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `nilai` int(11) NOT NULL,
  `prodi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` int(11) NOT NULL,
  `nama_prodi` varchar(50) NOT NULL,
  `jenjang_studi` char(2) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `nama_prodi`, `jenjang_studi`, `keterangan`) VALUES
(10, 'Animasi', 'd4', 'ahay'),
(11, 'Tekkom', 'd3', 'aszlkm'),
(12, 'TRPL', 'd4', 'kwosfkaso'),
(13, 'MI', 'd3', 'iojgeaijoegva');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `full_name`, `email`, `password`, `level`) VALUES
(2, 'administrator', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(3, 'user', 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'user'),
(4, 'fsaf', 'fsafsa', 'fsafsa', 'admin'),
(5, 'fsagag', 'gsagsa@gsafsa', '85b0b62635762dd2c8168d0fe7872675', 'admin'),
(7, 'fsagag', 'fajaradiputra127@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(8, 'test user', 'tes@gmail.com', 'a19ea7dff6ced87d8cb9c62cc7922497', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `berita_ibfk_1` (`kategori_id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`nip`),
  ADD KEY `prodi_id` (`prodi_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `prodi_id` (`prodi_id`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`kode_mk`),
  ADD KEY `prodi_id` (`prodi_id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nim` (`nim`),
  ADD KEY `prodi_id` (`prodi_id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`);

--
-- Constraints for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD CONSTRAINT `mata_kuliah_ibfk_1` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`),
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
