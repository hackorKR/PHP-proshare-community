-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- 생성 시간: 20-05-29 10:47
-- 서버 버전: 8.0.17
-- PHP 버전: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `ProShare`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `user`
--

CREATE TABLE `user` (
  `idx` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 테이블의 덤프 데이터 `user`
--

INSERT INTO `user` (`idx`, `username`, `email`, `password`) VALUES
(1, '123', '123', '$2y$10$QoslZHjo.GmPBvJ46SLRlOzQKSNDGqFD4hD3ESQcBQ873q/REzGCq'),
(4, '123', '123123', '$2y$10$zU1P8jz7U./Sea6Cm465LOFCLE4MsvYdTdxgMyAu7h9n64s4MC/DK'),
(5, '123123123', '123123123', '$2y$10$1i7khFbWnV4ttgRPJ18/8e8Yp7RjNGaarxSj7OVq7EHHOctr5qy1u'),
(6, 'asd', 'asd', '$2y$10$h9lNzbwSq7HlKY/O.ZNOWODgRxGl7kRh.K.JYI2tk3aPp9VZ2Zf8K'),
(7, 'asd123', 'asd123', '$2y$10$log.HFdRX.srrJfPXaFdXOH7C6OKWn3gKHQthecZOhydfjyT6OoDe'),
(8, '1234', '123321', '$2y$10$LM/Cdn5vi98fk6x83eIeN.eCWzFB7fXIbHEC3HnIzrSsUvMEtbPQm'),
(9, '1231231', '1231231', '$2y$10$MgkL9S5lUwEjkC.X1xmGHeegqsKbSSogAcf3F3shIiDXDsp/OZ2RK'),
(10, '12', '12', '$2y$10$Nyz3ZANfT.jZ.sOCPkztl.jm47K5MyYFsdS5hQwU86fx3xQYDsnpi'),
(11, '122', '122', '$2y$10$Z4nHWoLS59V4Plo3.dffOOqTh7SE1GMNp/VwJwrw8.9QROvBCz2ry'),
(12, '1212', '1212', '$2y$10$ae9OGryWbanuThHoYTHTNuqHRNeIOJjYtQUl2kj380RQRAI6YLbwe'),
(13, 'teamnova', 'teamnova@gmail.com', '$2y$10$1kjk7qR/Xex0p7iYJ18bJekqFvHt7uNFS20RBob33dJ7TVI/qihy.'),
(14, '12321', '12321', '$2y$10$Q4IOEHOMsM.Hewxsm6hQsuHmOzKFQTZfV92lrwnH0rDt9hvZmirvG'),
(15, 'abc', 'abc@gmail.com', '$2y$10$HEjZU4NjoT0hbwJZJihSve009qQr6sOOcwsX5JTC.2YDE4Hfe1Z96'),
(18, 'qwe', 'qwe', '$2y$10$jhe5aJDH68.ue2IpOCOEDezig5.KoY1VAj.jVzeuVybySZzGJCZjq'),
(19, 'team', 'nova', '$2y$10$wMfOCBYjr5E7UvtjXzrYdemFPXiApaG6uKxUGzjIHmLTyxb73ngQ.'),
(20, 'nova123', 'nova@gmail.com', '$2y$10$JWFIqLBGwK.QbJpGZvmNseR5Pe/rI8p7K86Vx2JLTg0euMsZ4R0iy');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
