-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 13, 2017 lúc 04:24 AM
-- Phiên bản máy phục vụ: 10.1.28-MariaDB
-- Phiên bản PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_tin_tuc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gioithieu`
--

CREATE TABLE `gioithieu` (
  `maGioiThieu` int(11) NOT NULL,
  `tenGioiThieu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `hoatdong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `maLienHe` int(11) NOT NULL,
  `hoTen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `noiDung` text COLLATE utf8_unicode_ci NOT NULL,
  `thoiGian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`maLienHe`, `hoTen`, `Email`, `Phone`, `noiDung`, `thoiGian`) VALUES
(1, 'đâ', 'dâd', '969854561', 'adasdasdada', '0000-00-00'),
(2, 'zcfaf', 'lehuuthuan292@gmail.com', '969854561', 'dâdasd', '2017-11-13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `maTheLoai` int(11) NOT NULL,
  `tenTheLoai` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`maTheLoai`, `tenTheLoai`) VALUES
(1, 'Văn Hóa'),
(2, 'Xã hội'),
(3, 'Thể thao'),
(4, 'Giáo dục');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `maTinTuc` int(11) NOT NULL,
  `tenTinTuc` text COLLATE utf8_unicode_ci NOT NULL,
  `moTaND` text COLLATE utf8_unicode_ci NOT NULL,
  `hinhAnh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thoiGian` date NOT NULL,
  `noiDung` text COLLATE utf8_unicode_ci NOT NULL,
  `maTheLoai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`maTinTuc`, `tenTinTuc`, `moTaND`, `hinhAnh`, `thoiGian`, `noiDung`, `maTheLoai`) VALUES
(1, 'zcfaf', 'adadasdasd', '', '2017-11-13', '<p>adadasffdddddf</p>\r\n', 1),
(2, 'Roger Federer được tôn vinh', '(Tin thể thao) Với những thành tích xuất sắc nhất năm 2017, Roger Federer đã lọt vào danh sách đề cử cho giải VĐV nước ngoài xuất sắc nhất của tạp chí BBC.\r\n', 'Tin-the-thao-HOT-28-11-Roger-Federer-duoc-ton-vinh-fe1-1511802144-901-width660height371.jpg', '2017-11-28', '<p><strong>Roger Federer được BBC t&ocirc;n vinh</strong><span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">. Nhờ th&agrave;nh t&iacute;ch tuyệt vời trong m&ugrave;a giải vừa qua, tay vợt người Thụy Sĩ Roger Federer đ&atilde; lọt v&agrave;o danh s&aacute;ch đề cử cho giải VĐV nước ngo&agrave;i xuất sắc nhất năm của BBC. Trong năm 2017, &ldquo;t&agrave;u tốc h&agrave;nh&rdquo; đ&atilde; gi&agrave;nh gi&agrave;nh được 2 Grand Slam l&agrave; Australian Open v&agrave; Wimbledon (c&ugrave;ng 3 danh hiệu ATP Masters, 2 ATP 500), kết th&uacute;c cả năm với tỷ lệ thắng/thua l&agrave; 52-5.</span></p>\r\n\r\n<p><img alt=\"Tin thể thao HOT 28/11: Roger Federer được tôn vinh - 1\" src=\"http://image.24h.com.vn/upload/4-2017/images/2017-11-28/Tin-the-thao-HOT-28-11-Roger-Federer-duoc-ton-vinh-fe1-1511802144-901-width660height371.jpg\" /></p>\r\n\r\n<p style=\"text-align:justify\"><strong>Hamilton xả hơi sau khi v&ocirc; địch F1</strong>. Mặc d&ugrave; nhận thất bại ở 2 chặng gần nhất nhưng nh&agrave; v&ocirc; địch F1 vẫn tỏ ra lạc quan. &ldquo;T&ocirc;i chẳng lo lắng g&igrave; cả. Đ&acirc;y l&agrave; điều sẽ xảy ra khi bạn biết m&igrave;nh đ&atilde; đăng quang sớm. T&ocirc;i muốn chia vui với mọi người v&igrave; đ&oacute; l&agrave; điều n&ecirc;n l&agrave;m&quot;. Hamilton &aacute;m chỉ việc anh muốn nhường lại c&aacute;c vị tr&iacute; nhất chặng cho c&aacute;c đối thủ kh&aacute;c.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Tiger Woods t&aacute;i xuất ấn tượng</strong>. Hero World Challenge l&agrave; sự kiện đầu ti&ecirc;n Tiger Woods thi đấu sau 10 th&aacute;ng nghỉ chữa trị chấn thương lưng v&agrave; trải qua đợt cai nghiện ma t&uacute;y bắt buộc. Theo golfweek, Tiger Woods đ&atilde; thực hiện những c&uacute; đ&aacute;nh kh&oacute; nhất ở Trump National Golf Club nhằm kiểm tra phong độ bản th&acirc;n trước ng&agrave;y ch&iacute;nh thức t&aacute;i xuất v&agrave; anh đ&atilde; th&agrave;nh c&ocirc;ng mỹ m&atilde;n.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Nh&agrave; v&ocirc; địch UFC than v&atilde;n v&igrave; bị bỏ rơi</strong>. Nh&agrave; v&ocirc; địch UFC Amanda Nunes trong một ph&aacute;t biểu mới nhất đ&atilde; than phiền về việc c&ocirc; kh&ocirc;ng được UFC coi trọng v&agrave; khẳng định bằng những lời&nbsp;kh&aacute; phũ ph&agrave;ng rằng: &ldquo;UFC muốn t&ocirc;i thất bại v&agrave; rời khỏi đ&acirc;y. T&ocirc;i chỉ l&agrave; một kẻ kh&ocirc;ng ph&ugrave; hợp nhưng họ buộc phải l&agrave;m ăn với với t&ocirc;i mặc d&ugrave; sẽ kh&ocirc;ng bao giờ đầu tư quảng b&aacute; h&igrave;nh ảnh như&nbsp;<a class=\"TextlinkBaiviet\" href=\"http://www.24h.com.vn/ronda-rousey-c101e4419.html\" style=\"text-decoration-line: none; color: rgb(0, 0, 255);\" title=\"Ronda Rousey\">Ronda Rousey</a>&nbsp;hay Holy Holm. Họ muốn mấy ả t&oacute;c v&agrave;ng, dễ thương c&oacute; thể thi đấu v&agrave; l&agrave;m người mẫu&rdquo;.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Aldo khuy&ecirc;n UFC tước đai McGregor</strong>. Trong một chia sẻ mới nhất, Jose Aldo đ&atilde; n&ecirc;u quan điểm trước trận tranh đai với Max Holloway tại UFC 218. &quot;Trong l&uacute;c ch&uacute;ng t&ocirc;i chờ được tranh đai, Conor McGregor lại buộc cả hạng c&acirc;n phải ngừng để đợi cậu ta. Đ&atilde; đến l&uacute;c UFC phải quyết định rồi, hoặc buộc Conor bảo vệ đai, hoặc tước n&oacute; đi. T&ocirc;i nghĩ đ&acirc;y l&agrave; điều m&agrave; ai cũng đang chờ đợi&rdquo;. Hiện tại, McGregor vẫn đang trong giai đoạn t&igrave;m đối thủ để thống nhất chiếc đai hạng Lightweight.</p>\r\n', 3),
(3, 'Đề xuất viết \'giáo dục\' là \'záo zụk’: Xin đừng “mạt sát” nhà nghiên cứu', '“Dù PGS.TS Bùi Hiền có đưa ra công trình nghiên cứu nào thì tôi nghĩ việc mạt sát ông là không nên!\", nhà văn Nguyễn Một cho hay.', 'de-xuat-viet-giao-duc-la-zao-zuk-Xin-dung-mat-sat-nha-nghien-cuu-1-1511745039-444-width480height360.jpg', '2017-11-28', '<p style=\"text-align:justify\">Trước những phản ứng gay gắt của dư luận về đề xuất cải tiến tiếng Việt của PGS.TS B&ugrave;i Hiền - nguy&ecirc;n Ph&oacute; Viện trưởng Viện Nội dung v&agrave; Phương ph&aacute;p dạy - học phổ th&ocirc;ng, tr&ecirc;n trang mạng c&aacute; nh&acirc;n, nh&agrave; văn Nguyễn Một chua x&oacute;t: &ldquo;Việc PGS.TS B&ugrave;i Hiền bị mắng &quot;r&aacute;t mặt&quot; khi &ocirc;ng đưa ra đề nghị thay đổi một số c&aacute;ch k&iacute; &acirc;m kh&aacute;c với c&aacute;ch k&iacute; &acirc;m th&ocirc;ng dụng hiện nay m&agrave; t&ocirc;i thấy x&oacute;t cho &ocirc;ng!&rdquo;.</p>\r\n\r\n<p style=\"text-align:justify\">Đồng thời, nh&agrave; văn Nguyễn Một b&agrave;y tỏ, đưa ra đề nghị l&agrave; việc của nh&agrave; nghi&ecirc;n cứu, c&ograve;n được số đ&ocirc;ng &aacute;p dụng hay kh&ocirc;ng lại l&agrave; chuyện kh&aacute;c. K&iacute; &acirc;m tiếng Việt bằng chữ La tinh từ khi ra đời ở thế kỷ 17 đến nay đ&atilde; thay đổi nhiều lần.</p>\r\n\r\n<p style=\"text-align:justify\">V&iacute; dụ, c&aacute;ch k&iacute; &acirc;m đầu ti&ecirc;n được ghi nhận trong từ điển Việt - Bồ - La do tu sĩ C&ocirc;ng gi&aacute;o v&agrave; nh&agrave; từ điển học Alexandre de Rhodes bi&ecirc;n soạn sau 12 năm hoạt động ở Việt Nam, v&agrave; được Th&aacute;nh bộ truyền b&aacute; Đức Tin ấn h&agrave;nh tại Roma năm 1651 l&uacute;c &ocirc;ng về lại ch&acirc;u &Acirc;u.</p>\r\n\r\n<p style=\"text-align:justify\">Trong đ&oacute;, &ocirc;ng đưa ra c&aacute;ch k&iacute; &acirc;m nhiều từ kh&aacute;c h&ocirc;m nay như tiếng &ldquo;trời&rdquo; &ocirc;ng k&iacute; &acirc;m &ldquo;blời&rdquo;, &ldquo;dối tr&aacute;&rdquo; k&iacute; &acirc;m l&agrave; &ldquo;dối bl&aacute;&rdquo;, &ldquo;Vua&rdquo; k&iacute; &acirc;m l&agrave; &ldquo;Bua&rdquo;... Đến đầu thế kỷ 20 vẫn c&ograve;n nhiều người k&iacute; &acirc;m theo c&aacute;ch của &ocirc;ng như tiếng &quot;d&ugrave;ng&quot; k&yacute; &acirc;m l&agrave; &quot;z&ugrave;ng&quot;...</p>\r\n\r\n<p style=\"text-align:justify\">Dần dần, việc k&iacute; &acirc;m tiếng n&oacute;i người Việt bằng chữ viết thay đổi theo thời gian v&agrave; phổ biến như h&ocirc;m nay. &ldquo;Nhưng n&oacute; ho&agrave;n thiện chưa? Xin thưa l&agrave; chưa!&rdquo; &ndash; &ocirc;ng Nguyễn Một khẳng định.</p>\r\n\r\n<p style=\"text-align:justify\">Đồng thời &ocirc;ng cũng đưa l&iacute; giải: V&igrave; c&aacute;ch k&iacute; &acirc;m vẫn chưa đ&aacute;p ứng t&iacute;nh biểu cảm như khi n&oacute;i trực tiếp, bằng chứng l&agrave; thế hệ 9X đ&atilde; nghĩ ra c&aacute;ch k&iacute; &acirc;m để thể hiện biểu cảm của họ.</p>\r\n\r\n<p style=\"text-align:justify\">Khi nhắn tin thay v&igrave; viết &ldquo;Anh đang l&agrave;m g&igrave; vậy?&rdquo; th&igrave; họ viết &ldquo;Anh đang l&agrave;m z&igrave; vạiii?&rdquo;. Đọc c&acirc;u n&agrave;y, ch&agrave;ng trai sẽ h&igrave;nh dung khẩu h&igrave;nh của c&ocirc; g&aacute;i mở miệng k&eacute;o d&agrave;i chữ cuối để nh&otilde;ng nhẽo với m&igrave;nh. Hay thay v&igrave; viết &ldquo;Trời ơi!&rdquo; th&igrave; giới trẻ viết &ldquo;Ch&agrave;i ơi!&rdquo;. Khi đọc kiểu viết n&agrave;y ta h&igrave;nh dung ra khẩu h&igrave;nh của người viết.</p>\r\n\r\n<p style=\"text-align:justify\">Tất nhi&ecirc;n, c&aacute;ch viết đ&oacute; người lớn kh&ocirc;ng chịu được, nhưng đ&agrave;nh phải thừa nhận thực tế l&agrave; việc k&iacute; &acirc;m tiếng n&oacute;i bằng chữ viết c&oacute; thể sẽ thay đổi theo thời gian.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;&ldquo;D&ugrave; PGS.TS B&ugrave;i Hiền c&oacute; đưa ra c&ocirc;ng tr&igrave;nh nghi&ecirc;n cứu n&agrave;o th&igrave; t&ocirc;i nghĩ việc mạt s&aacute;t &ocirc;ng l&agrave; kh&ocirc;ng n&ecirc;n!&quot;, nh&agrave; văn Nguyễn Một cho hay.</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Đề xuất viết &amp;#39;giáo dục&amp;#39; là &amp;#39;záo zụk’: Xin đừng “mạt sát” nhà nghiên cứu - 2\" src=\"http://image.24h.com.vn/upload/4-2017/images/2017-11-27/de-xuat-viet-giao-duc-la-zao-zuk-Xin-dung-mat-sat-nha-nghien-cuu-2-1511745039-427-width480height640.jpg\" /></p>\r\n\r\n<p style=\"text-align:justify\">Trước đ&oacute;, đề xuất cải tiến bảng chữ c&aacute;i tiếng Việt từ 38 k&iacute; tự xuống c&ograve;n 31 k&iacute; tự của PGS.TS B&ugrave;i Hiền đang g&acirc;y phản ứng gay gắt. Theo đề xuất n&agrave;y, k&iacute; tự tiếng Việt sẽ trở n&ecirc;n lạ lẫm như &quot;tiếng Việt&quot; th&agrave;nh &quot;tiếq Việt&quot;, &quot;Luật gi&aacute;o dục&quot; phải viết l&agrave; &quot;luật z&aacute;o zụk&quot;, &quot;nh&agrave; nước&quot; l&agrave; &quot;n&#39;&agrave; nướk&quot;, &quot;ng&ocirc;n ngữ&quot; l&agrave; &quot;q&ocirc;n qữ&quot;.</p>\r\n\r\n<p style=\"text-align:justify\">Cũng li&ecirc;n quan đến vấn đề tr&ecirc;n, c&ocirc;&nbsp;&nbsp;Trịnh Thu Tuyết &ndash; gi&aacute;o vi&ecirc;n trường THPT Chu Văn An (H&agrave; Nội) cho hay: &ldquo;Thật ra, đ&uacute;ng l&agrave; Tiếng Việt của m&igrave;nh c&oacute; rất nhiều điều bất hợp l&yacute; cả trăm năm nay. Tuy nhi&ecirc;n, những bất hợp l&yacute; được hợp l&yacute; ho&aacute; bằng những ước lệ mang t&iacute;nh mặc định trong cộng đồng sử dụng Ng&ocirc;n ngữ Việt, v&iacute; dụ các chữ c&aacute;i c/k/q, gi/r/d, ng/ngh...</p>\r\n\r\n<p style=\"text-align:justify\">Những mặc định đ&oacute; tồn tại l&acirc;u dần th&agrave;nh th&oacute;i quen, từ th&oacute;i quen th&agrave;nh chuẩn mực ch&iacute;nh tả phổ th&ocirc;ng v&agrave; mọi người qu&aacute; quen thuộc n&ecirc;n kh&ocirc;ng thấy bất tiện...</p>\r\n\r\n<p style=\"text-align:justify\">Tuy nhi&ecirc;n, khi người nước ngo&agrave;i học tiếng Việt, khi kh&ocirc;ng c&oacute; cơ sở khoa học để giải thích th&igrave; họ đ&agrave;nh chấp nhận như một qui ước mặc định! V&iacute; dụ nhiều học vi&ecirc;n thắc mắc về c&aacute;ch viết v&agrave; c&aacute;ch đọc chữ &quot;g&igrave;&quot;...</p>\r\n\r\n<p style=\"text-align:justify\">T&ocirc;i nghĩ rằng đề xuất cải tiến tiếng Việt hiện nay cực kỳ kh&oacute; thực hiện. Bởi lẽ, c&aacute;c văn bản h&agrave;ng trăm năm nay sẽ phả xử l&yacute; sao? Rồi th&oacute;i quen đ&atilde; ăn s&acirc;u v&agrave;o tiềm thức ch&uacute;ng ta giờ thay đổi mọi người sẽ kh&oacute; tiếp nhận. Đặc biệt l&agrave; n&oacute; l&agrave;m phương hại kh&aacute; nhiều t&iacute;nh thẩm mỹ của ch&iacute;nh tả tiếng Việt</p>\r\n\r\n<p style=\"text-align:justify\">Mọi người phản ứng với phương &aacute;n do PGS B&ugrave;i Hiền đề xuất cũng l&agrave; điều dễ hiểu v&igrave; đề xuất n&agrave;y chưa thuyết phục được mọi người&rdquo;.</p>\r\n', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `IdUser` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `FullName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rights` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`IdUser`, `username`, `password`, `FullName`, `Address`, `Phone`, `Email`, `rights`) VALUES
(9, 'admin', '123', 'Admin', 'Nha Trang', '0969854561', 'nhom11@gmail.com', 1),
(25, 'HuuThuan', '123', 'Hữu Thuấn', 'nha trang', '0123342245', 'lehuuthuan292@gmail.com', 0),
(26, 'Thuy', '123', 'Thủy', 'nha trang', '0123345453', 'thuy@gmail.com', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `gioithieu`
--
ALTER TABLE `gioithieu`
  ADD PRIMARY KEY (`maGioiThieu`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`maLienHe`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`maTheLoai`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`maTinTuc`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`IdUser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `gioithieu`
--
ALTER TABLE `gioithieu`
  MODIFY `maGioiThieu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `maLienHe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `maTheLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `maTinTuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
