-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 29, 2021 lúc 05:39 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `course`
--

CREATE TABLE `course` (
  `id_course` int(10) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `course`
--

INSERT INTO `course` (`id_course`, `Name`, `type`, `cost`, `price`, `desc`, `image`) VALUES
(1, 'Reading Master [Bình dân học vụ]', 'online', 1600000, 599001, 'Cách đọc đúng mọi từ tiếng Anh trong 4 bước, học đến đâu đọc ngay đến đấy kèm tài liệu luyện tập liên tục...', './imgs/ngaybinhdanhocvutienganh1212.jpg'),
(2, 'Premium Rules (Đánh vần Nâng cao)', 'online', 1600000, 599000, 'Hoàn thiện Tiếng Anh với cách đọc các từ dài và khó 1 quy luật, đọc ngàn từ. Không cần bắt chước. Không cần file âm…', './imgs/anh-1.png'),
(3, 'Basic Rules (Đánh vần Cơ bản)', 'online', 1600000, 599000, 'Sử dụng cho các từ thường gặp nhất trong đời sống, 1 quy luật, đọc ngàn từ. Không cần bắt chước. Không cần file âm…', './imgs/anh-2.png'),
(4, 'Speaking Rules [Nói câu theo Quy luật]', 'online', 1600000, 599000, 'Ở khoá học này bạn sẽ được tiếp cận và ôn luyện liên tục về các quy tắc nói câu để thành thục nói bất…', './imgs/speakrulesmall.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `content`, `post_date`) VALUES
(1, 'Làm thế nào để tìm ra được quy luật Đánh vần Tiếng Anh', './imgs/lamthenaodetaoraquytacdanhvantienganh.jpg', 'Với đa số người học tiếng Anh, khi đọc 1 từ tiếng Anh thường chỉ…', '2021-08-08'),
(2, 'Sứ mệnh của Đánh vần Tiếng Anh', './imgs/sumenhdanhvantienganhenpro.jpg', 'Sứ mệnh của Đánh vần Tiếng Anh là gì? Tại sao chúng tôi đi theo…', '2021-08-15'),
(3, 'Đánh vần tiếng Anh khác gì với Phát âm tiếng Anh?', './imgs/khacbietphatamdanhvantienganh.jpg', 'Khái niệm Đánh vần Tiếng Anh rất mới so với khái niệm phiên âm, vậy…', '2021-08-03'),
(4, 'Điều khoản bảo mật tại Enpro Đánh vần Tiếng Anh', './imgs/dieukhoanbaomatenprodanhvantienganh.jpg', 'Học ở Đánh vần Tiếng Anh- Enpro được bảo mật về thông tin cá nhân,…', '2021-08-03'),
(5, 'Học ở Đánh vần Tiếng Anh- Enpro được bảo mật về thông tin cá nhân,…', './imgs/dieukhoanhoanhuyenprodanhvantienganh.jpg', 'Enpro có chính sách hoàn- huy đơn hàng minh bạch và rõ ràng, tạo điều…', '2021-08-03'),
(6, 'Buổi nhượng quyền chương trình Đánh vần Tiếng Anh', './imgs/nhuongquyentrungtamtienganhdanhvan.jpg', 'Nhượng quyền trung tâm Tiếng Anh bản quyền từ tác giả Nguyễn Ngọc Nam ngày…', '2021-08-05'),
(7, 'Ngày \"Bình dân học vụ Tiếng Anh\" 12-12 hằng năm', './imgs/ngaybinhdanhocvutienganh1212.jpg', 'Ngày \"Bình dân học vụ Tiếng Anh ?\" là ngày truyền thống hàng năm của ENPRO…', '2021-08-11'),
(8, 'Hướng dẫn sử dụng phần mềm zoom', './imgs/huongdandungzoomhocdanhvantienganh.jpg', 'Hướng dẫn để bạn có thể học trên phần mềm Zoom, tương tác trực tuyến…', '2021-08-01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `ID` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`ID`, `full_name`, `phone_number`, `account`, `password`, `permission`) VALUES
(1, 'Nguyễn Cường', 3243243, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(2, 'Vũ Minh Hiếu', 23432, 'hieu', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(17, 'Vũ Minh Hiếu', 23432, 'hieu1', 'b59c67bf196a4758191e42f76670ceba', 0),
(18, 'Nguyễn Cường', 3243243, 'cuong1', '81dc9bdb52d04dc20036dbd8313ed055', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_course`
--

CREATE TABLE `user_course` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_course` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_course`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `user_course`
--
ALTER TABLE `user_course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_course` (`id_course`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `course`
--
ALTER TABLE `course`
  MODIFY `id_course` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `user_course`
--
ALTER TABLE `user_course`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `user_course`
--
ALTER TABLE `user_course`
  ADD CONSTRAINT `user_course_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `user_course_ibfk_2` FOREIGN KEY (`id_course`) REFERENCES `course` (`id_course`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
