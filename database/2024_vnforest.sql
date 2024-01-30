-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2024 at 10:57 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2024_vnforest`
--

-- --------------------------------------------------------

--
-- Table structure for table `linhvuc`
--

CREATE TABLE `linhvuc` (
  `id` int(11) NOT NULL,
  `tenlinhvuc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `linhvuc`
--

INSERT INTO `linhvuc` (`id`, `tenlinhvuc`, `slug`) VALUES
(3, 'An ninh trật tự', 'an-ninh-trat-tu'),
(4, 'Báo chí', 'bao-chi'),
(5, 'Báo chí, CNTT, điện tử', 'bao-chi--cntt--dien-tu'),
(6, 'Báo chí, Viễn thông', 'bao-chi--vien-thong'),
(7, 'Báo chí, Xuất bản, Bưu chính, Viễn thông, CNTT, điện tử', 'bao-chi--xuat-ban--buu-chinh--vien-thong--cntt--dien-tu'),
(8, 'Báo chí, Xuất bản, Bưu chính, Viễn thông, CNTT, điện tử, Cơ cấu tổ chức', 'bao-chi--xuat-ban--buu-chinh--vien-thong--cntt--dien-tu--co-cau-to-chuc'),
(9, 'Báo chí, Xuất bản, Bưu chính, Viễn thông, CNTT, điện tử, Cơ cấu tổ chức, Lĩnh vực khác', 'bao-chi--xuat-ban--buu-chinh--vien-thong--cntt--dien-tu--co-cau-to-chuc--linh-vuc-khac'),
(10, 'Báo chí, Xuất bản, Bưu chính, Viễn thông, CNTT, điện tử, Lĩnh vực khác', 'bao-chi--xuat-ban--buu-chinh--vien-thong--cntt--dien-tu--linh-vuc-khac'),
(11, 'Bưu chính', 'buu-chinh'),
(12, 'Bưu chính, Viễn thông', 'buu-chinh--vien-thong'),
(13, 'Bưu chính, Viễn thông, CNTT, điện tử', 'buu-chinh--vien-thong--cntt--dien-tu'),
(14, 'Chính sách', 'chinh-sach'),
(15, 'Chính sách xã hội', 'chinh-sach-xa-hoi'),
(16, 'Chứng khoán', 'chung-khoan'),
(17, 'CNTT, điện tử', 'cntt--dien-tu'),
(18, 'CNTT, điện tử, Lĩnh vực khác', 'cntt--dien-tu--linh-vuc-khac'),
(19, 'Cơ cấu tổ chức', 'co-cau-to-chuc'),
(20, 'Cơ cấu tổ chức, Lĩnh vực khác', 'co-cau-to-chuc--linh-vuc-khac'),
(21, 'Công an nhân dân', 'cong-an-nhan-dan'),
(22, 'Công nghệ thông tin', 'cong-nghe-thong-tin'),
(23, 'Công nghiệp', 'cong-nghiep'),
(24, 'Đất đai - Nhà ở', 'dat-dai---nha-o'),
(25, 'Đầu tư', 'dau-tu'),
(26, 'Địa giới hành chính', 'dia-gioi-hanh-chinh'),
(27, 'Doanh nghiệp', 'doanh-nghiep'),
(28, 'Đối ngoại', 'doi-ngoai'),
(29, 'Du lịch', 'du-lich'),
(30, 'Giáo dục - Đào tạo', 'giao-duc---dao-tao'),
(31, 'Giao thông', 'giao-thong'),
(32, 'Hải quan', 'hai-quan'),
(33, 'Hàng hải', 'hang-hai'),
(34, 'hàng không', 'hang-khong'),
(35, 'Hành chính', 'hanh-chinh'),
(36, 'Khiếu nại tố cáo', 'khieu-nai-to-cao'),
(37, 'Khoa học - Công nghệ', 'khoa-hoc---cong-nghe'),
(38, 'Kinh tế xã hội', 'kinh-te-xa-hoi'),
(39, 'Lâm nghiệp', 'lam-nghiep'),
(40, 'Lao động - Tiền lương', 'lao-dong---tien-luong'),
(41, 'Lĩnh vực khác', 'linh-vuc-khac'),
(42, 'Luật', 'luat'),
(43, 'Môi trường', 'moi-truong'),
(44, 'Ngân sách Nhà nước', 'ngan-sach-nha-nuoc'),
(45, 'Ngoại giao', 'ngoai-giao'),
(46, 'Nội chính', 'noi-chinh'),
(47, 'Nông nghiệp', 'nong-nghiep'),
(48, 'Quản trị - Tài vụ', 'quan-tri---tai-vu'),
(49, 'Quốc phòng', 'quoc-phong'),
(50, 'Sở hữu công nghiệp', 'so-huu-cong-nghiep'),
(51, 'Tài chính', 'tai-chinh'),
(52, 'Tài chính - Ngân hàng', 'tai-chinh---ngan-hang'),
(53, 'Tài mậu', 'tai-mau'),
(54, 'Thể dục thể thao', 'the-duc-the-thao'),
(55, 'Thi đua Khen thưởng', 'thi-dua-khen-thuong'),
(56, 'Thủ tục hành chính', 'thu-tuc-hanh-chinh'),
(57, 'Thuế - Lệ phí', 'thue---le-phi'),
(58, 'Thương mại', 'thuong-mai'),
(59, 'Thủy sản', 'thuy-san'),
(60, 'Tổ chức - Hành chính', 'to-chuc---hanh-chinh'),
(61, 'Tòa án', 'toa-an'),
(62, 'Tổng hợp', 'tong-hop'),
(63, 'Tư pháp', 'tu-phap'),
(64, 'Văn hóa - Thông tin', 'van-hoa---thong-tin'),
(65, 'Văn xã', 'van-xa'),
(66, 'Vi phạm hành chính', 'vi-pham-hanh-chinh'),
(67, 'Viễn thông', 'vien-thong'),
(68, 'Viễn thông, CNTT, điện tử', 'vien-thong--cntt--dien-tu'),
(69, 'Viễn thông, CNTT, điện tử, Lĩnh vực khác', 'vien-thong--cntt--dien-tu--linh-vuc-khac'),
(70, 'Viễn thông, Lĩnh vực khác', 'vien-thong--linh-vuc-khac'),
(71, 'Xã hội', 'xa-hoi'),
(72, 'Xây dựng', 'xay-dung'),
(73, 'Xuất - Nhập khẩu', 'xuat---nhap-khau'),
(74, 'Xuất bản', 'xuat-ban'),
(75, 'Xuất nhập cảnh', 'xuat-nhap-canh'),
(76, 'Y tế - Sức khỏe', 'y-te---suc-khoe'),
(77, 'Khen thưởng - Kỷ luật', 'khen-thuong---ky-luat'),
(78, 'Thi đua khen thưởng', 'thi-dua-khen-thuong');

-- --------------------------------------------------------

--
-- Table structure for table `loaitintuc`
--

CREATE TABLE `loaitintuc` (
  `id` int(11) NOT NULL,
  `tenloaitt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaitintuc`
--

INSERT INTO `loaitintuc` (`id`, `tenloaitt`, `slug`) VALUES
(2, 'Tin tức sự kiện', 'tin-tuc-su-kien'),
(3, 'Tin Tổng Cục Lâm nghiệp', 'tin-tong-cuc-lam-nghiep'),
(4, 'Tin địa phương', 'tin-dia-phuong'),
(5, 'Tin đấu thầu', 'tin-dau-thau'),
(6, 'Tin tuyển dụng', 'tin-tuyen-dung'),
(7, 'Tài nguyên rừng', 'tai-nguyen-rung'),
(8, 'Thực vật rừng', 'thuc-vat-rung'),
(9, 'Động vật rừng', 'dong-vat-rung'),
(10, 'Sử dụng rừng', 'su-dung-rung'),
(11, 'Khai thác', 'khai-thac'),
(12, 'Chế biến XNK lâm sản', 'che-bien-xnk-lam-san'),
(13, 'Quản lý rừng bền vững', 'quan-ly-rung-ben-vung'),
(14, 'Giống lâm nghiệp', 'giong-lam-nghiep'),
(15, 'Khuyến lâm', 'khuyen-lam'),
(16, 'Trồng rừng', 'trong-rung'),
(17, 'Bảo tồn thiên nhiên', 'bao-ton-thien-nhien'),
(18, 'Bảo tồn đa dạng sinh học', 'bao-ton-da-dang-sinh-hoc'),
(19, 'Hệ thống rừng đặc dụng', 'he-thong-rung-dac-dung'),
(20, 'Quy hoạch', 'quy-hoach'),
(21, 'Quy hoạch, kế hoạch', 'quy-hoach--ke-hoach'),
(22, 'Chiến lược, công trình', 'chien-luoc--cong-trinh'),
(23, 'Hoạt động KHCN & MT', 'hoat-dong-khcn---mt'),
(24, 'Hoạt động HTQT', 'hoat-dong-htqt'),
(25, 'Chương trình, dự án HTQT', 'chuong-trinh--du-an-htqt'),
(26, 'Hoạt động bảo vệ rừng', 'hoat-dong-bao-ve-rung'),
(27, 'Phòng cháy, chữa cháy rừng', 'phong-chay--chua-chay-rung'),
(28, 'Giao rừng, quản lý nương rẫy', 'giao-rung--quan-ly-nuong-ray'),
(29, 'Chức năng nhiệm vụ', 'chuc-nang-nhiem-vu'),
(30, 'Hoạt động CITES', 'hoat-dong-cites'),
(31, 'Cải cách hành chính', 'cai-cach-hanh-chinh'),
(32, 'Chuyển Đổi Số', 'chuyen-doi-so');

-- --------------------------------------------------------

--
-- Table structure for table `loaivanban`
--

CREATE TABLE `loaivanban` (
  `id` int(11) NOT NULL,
  `tenloaivb` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaivanban`
--

INSERT INTO `loaivanban` (`id`, `tenloaivb`, `slug`) VALUES
(3, 'Luật', 'luat'),
(4, 'Nghị định', 'nghi-dinh'),
(5, 'Quyết định', 'quyet-dinh'),
(6, 'Thông tư', 'thong-tu'),
(7, 'Công văn, quyết định', 'cong-van--quyet-dinh'),
(8, 'Văn bản khác', 'van-ban-khac'),
(9, 'Chỉ Đạo Điều Hành', 'chi-dao-dieu-hanh');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `id_loaitt` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token_created_at` timestamp NULL DEFAULT NULL,
  `role` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `path`, `token`, `token_created_at`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$pp/JRtXhR81YkP76F6HjI.2ZxjH0JxzNBE36/xnwWK467gKDnvJW2', NULL, NULL, NULL, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `vanban`
--

CREATE TABLE `vanban` (
  `id` int(11) NOT NULL,
  `id_loaivb` int(11) NOT NULL,
  `id_linhvuc` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenvb` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sohieu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namphathanh` year(4) DEFAULT NULL,
  `donviphathanh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vanban`
--

INSERT INTO `vanban` (`id`, `id_loaivb`, `id_linhvuc`, `id_user`, `slug`, `tenvb`, `sohieu`, `namphathanh`, `donviphathanh`, `path`, `created_at`, `updated_at`) VALUES
(7, 3, 39, 1, 'luat-bao-ve-bi-mat-nha-nuoc', 'Luật Bảo vệ Bí mật Nhà nước', NULL, 2010, NULL, 'VanBan/5249963730021533305_1.-Luat-BVBNMM-QH14.pdf', NULL, NULL),
(8, 3, 39, 1, 'luat-lam-nghiep-so-16-2017-qh14', 'Luật Lâm nghiệp số 16/2017/QH14', NULL, 2010, NULL, 'VanBan/VanBanGoc_Luat_LamNghiep-2017.pdf', NULL, NULL),
(9, 4, 39, 1, 'nghi-dinh-so-156-2018-nd-cp-ngay-16-11-2018-cua-chinh-phu-quy-dinh-chi-tiet-thi-hanh-mot-so-dieu-cua-luat-lam-nghiep', 'Nghị định số 156/2018/NĐ-CP ngày 16/11/2018 của Chính phủ quy định chi tiết thi hành một số điều của Luật Lâm nghiệp', NULL, 2011, NULL, 'VanBan/156_2018_ND_CP.pdf', NULL, NULL),
(10, 4, 39, 1, 'nghi-dinh-so-01-2019-nd-cp-ngay-01-012019-cua-thu-tuong-chinh-phu-ve-kiem-lam-va-luc-luong-chuyen-trach-bao-ve-rung', 'Nghị định số 01/2019/NĐ-CP ngày 01/012019 của Thủ tướng Chính phủ về Kiểm lâm và Lực lượng chuyên trách bảo vệ rừng', NULL, 2011, NULL, 'VanBan/ND-01_2019_ND-CP-ve-Kiem-lam-va-LLCTBVR.pdf', NULL, NULL),
(11, 5, 39, 1, 'quyet-dinh-so-38-2016-qd-ttg-ngay-14-9-2016-cua-thu-tuong-chinh-phu-ve-viec-ban-hanh-mot-so-chinh-sach-bao-ve--phat-trien-rung-va-dau-tu-ho-tro-ket-cau-ha-tang--giao-nhiem-vu-cong-ich-doi-voi-cac-cong-ty-nong--lam-nghiep', 'Quyết định số 38/2016/QĐ-TTg ngày 14/9/2016 của Thủ tướng Chính phủ về việc ban hành một số chính sách bảo vệ, phát triển rừng và đầu tư hỗ trợ kết cấu hạ tầng, giao nhiệm vụ công ích đối với các công ty nông, lâm nghiệp', NULL, 2012, NULL, 'VanBan/Quyet_dinh_38_-_2016.signed.pdf', NULL, NULL),
(12, 5, 39, 1, 'quyet-dinh-1439-qd-bnn-tcln-ngay-25-4-2016-cua-bo-nong-nghiep-va-phat-trien-nong-thon-ve-viec-ban-hanh-quy-che-quan-ly-va-su-dung-he-thong-thong-tin-quan-ly-nganh-lam-nghiep', 'Quyết định 1439/QĐ-BNN-TCLN ngày 25/4/2016 của Bộ Nông nghiệp và Phát triển nông thôn về việc ban hành Quy chế quản lý và sử dụng Hệ thống Thông tin quản lý ngành Lâm nghiệp', NULL, 2012, NULL, 'VanBan/QD-1439-Quy-che-QL-va-SD-He-thong-TTQL.pdf', NULL, NULL),
(13, 6, 39, 1, 'thong-tu-so-21-2017-tt-bnnptnt-ngay-15-11-2017-cua-bo-nong-nghiep-va-phat-trien-nong-thon-huong-dan-thuc-hien-quyet-dinh-so-886-qd-ttg-ngay-16-6-2017-cua-thu-tuong-chinh-phu-phe-duyet-chuong-trinh-muc-tieu-phat-trien-lam-nghiep-ben-vung-giai-doan-2016-–-2020', 'Thông tư số 21/2017/TT-BNNPTNT ngày 15/11/2017 của Bộ Nông nghiệp và Phát triển nông thôn Hướng dẫn thực hiện Quyết định số 886/QĐ-TTg ngày 16/6/2017 của Thủ tướng Chính phủ phê duyệt Chương trình mục tiêu phát triển Lâm nghiệp bền vững giai đoạn 2016 – 2020', NULL, 2013, NULL, 'VanBan/Thong_tu_21-15.11.2017_huong_dan_CTMT.pdf', NULL, NULL),
(14, 6, 39, 1, 'thong-tu-so-04-2018-tt-btc-ngay-17-01-2018-cua-bo-tai-chinh-huong-dan-quan-ly-va-su-dung-tien-dich-vu-moi-truong-rung', 'Thông tư số 04/2018/TT-BTC ngày 17/01/2018 của Bộ Tài chính Hướng dẫn quản lý và sử dụng tiền dịch vụ môi trường rừng', NULL, 2013, NULL, 'VanBan/04_2018_TT-BTC.pdf', NULL, NULL),
(15, 7, 39, 1, 'quyet-dinh-so-5249-qd-bnn-tccb-ngay-28-12-2018-ve-viec-phat-dong-phong-trao-thi-dua-dac-biet', 'Quyết định số 5249/QĐ-BNN-TCCB ngày 28/12/2018 về việc phát động Phong trào thi đua đặc biệt', NULL, 2014, NULL, 'VanBan/QD-5249_Phongtraothidua.pdf', NULL, NULL),
(16, 7, 39, 1, 'quyet-dinh-so-2962-qd-bnn-tcln-ngay-30-7-2019-cua-bo-nong-nghiep-va-phat-trien-nong-thon-ban-hanh-huong-dan-ky-thuat-trong-rung-tham-canh-go-lon-va-chuyen-hoa-rung-trong-go-nho-sang-rung-trong-go-lon-doi-voi-loai-cay-keo-lai-va-keo-tai-tuong', 'Quyết định số 2962/QĐ-BNN-TCLN ngày 30/7/2019 của Bộ Nông nghiệp và Phát triển nông thôn Ban hành Hướng dẫn kỹ thuật trồng rừng thâm canh gỗ lớn và chuyển hóa rừng trồng gỗ nhỏ sang rừng trồng gỗ lớn đối với loài cây Keo lai và Keo tai tượng', NULL, 2014, NULL, 'VanBan/HDKT_Trong-rung-go-lon.zip', NULL, NULL),
(17, 8, 39, 1, 'nghi-quyet-so-26-nq-tw-cua-bo-chinh-tri-ngay-03-11-2022-ve-phat-trien-kinh-te-–-xa-hoi-va-bao-dam-quoc-phong--an-ninh-vung-bac-trung-bo-va-duyen-hai-trung-bo-va-duyen-hai-trung-bo-den-nam-2030--tam-nhin-den-nam-2045', 'Nghị quyết số 26-NQ/TW của Bộ Chính trị ngày 03/11/2022 về phát triển kinh tế – xã hội và bảo đảm quốc phòng, an ninh vùng Bắc Trung Bộ và duyên hải Trung Bộ và duyên hải Trung Bộ đến năm 2030, tầm nhìn đến năm 2045', NULL, 2015, NULL, 'VanBan/5249939512311428195_Nghiquyet26.signed-1.pdf', NULL, NULL),
(18, 8, 39, 1, 'nghi-quyet-so-168-nq-cp-ngay-29-12-2022-cua-chinh-phu-ban-hanh-chuong-trinh-hanh-dong-cua-chinh-phu-thuc-hien-nghi-quyet-so-26-nq-tw-ngay-03-11-2022-cua-bo-chinh-tri-ve-phat-trien-kinh-te-–-xa-hoi-va-bao-dam-quoc-phong--an-ninh-vung-bac-trung-bo-va-duyen-hai-trung-bo-den-nam-2030--tam-nhin-den-nam-2045', 'Nghị quyết số 168/NQ-CP ngày 29/12/2022 của Chính phủ Ban hành Chương trình hành động của Chính phủ thực hiện Nghị quyết số 26-NQ/TW ngày 03/11/2022 của Bộ Chính trị về phát triển kinh tế – xã hội và bảo đảm quốc phòng, an ninh vùng Bắc Trung bộ và duyên hải Trung Bộ đến năm 2030, tầm nhìn đến năm 2045', NULL, 2015, NULL, 'VanBan/5249939518056078430_168nq.signed.pdf', NULL, NULL),
(19, 9, 39, 1, 'cuc-lam-nghiep-thong-bao-gioi-thieu-chuc-danh-va-chu-ky-cua-ong-doan-hoai-nam-–-pho-cuc-truong-cuc-lam-nghiep', 'Cục Lâm nghiệp Thông báo Giới thiệu chức danh và chữ ký của ông Đoàn Hoài Nam – Phó Cục trưởng Cục Lâm nghiệp', NULL, 2015, NULL, 'VanBan/5250085684024423511_18_TB-LN-VP.pdf', NULL, NULL),
(20, 9, 39, 1, 'cuc-lam-nghiep-thong-bao-gioi-thieu-chuc-danh-va-chu-ky-cua-ong-pham-hong-luong-–-pho-cuc-truong-cuc-lam-nghiep', 'Cục Lâm nghiệp Thông báo Giới thiệu chức danh và chữ ký của ông Phạm Hồng Lượng – Phó Cục trưởng Cục Lâm nghiệp', NULL, 2015, NULL, 'VanBan/5250085684351064889_19_TB-LN-VP.pdf', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `linhvuc`
--
ALTER TABLE `linhvuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaitintuc`
--
ALTER TABLE `loaitintuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaivanban`
--
ALTER TABLE `loaivanban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_loaitt_frk` (`id_loaitt`),
  ADD KEY `id_user_frk` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vanban`
--
ALTER TABLE `vanban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_loaivb_frk` (`id_loaivb`),
  ADD KEY `id_linhvuc_frk` (`id_linhvuc`),
  ADD KEY `id_user_frk_vanban` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `linhvuc`
--
ALTER TABLE `linhvuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `loaitintuc`
--
ALTER TABLE `loaitintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `loaivanban`
--
ALTER TABLE `loaivanban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vanban`
--
ALTER TABLE `vanban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `id_loaitt_frk` FOREIGN KEY (`id_loaitt`) REFERENCES `loaitintuc` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `id_user_frk` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `vanban`
--
ALTER TABLE `vanban`
  ADD CONSTRAINT `id_linhvuc_frk` FOREIGN KEY (`id_linhvuc`) REFERENCES `linhvuc` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `id_loaivb_frk` FOREIGN KEY (`id_loaivb`) REFERENCES `loaivanban` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `id_user_frk_vanban` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
