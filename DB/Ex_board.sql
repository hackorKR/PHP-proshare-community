-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- 생성 시간: 20-05-29 10:48
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
-- 데이터베이스: `Ex_board`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `board`
--

CREATE TABLE `board` (
  `idx` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `hit` int(11) NOT NULL,
  `user_like` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 테이블의 덤프 데이터 `board`
--

INSERT INTO `board` (`idx`, `name`, `title`, `content`, `date`, `hit`, `user_like`) VALUES
(1, 'admin', 'First Writing', '처음으로 쓰는 글\r\n잘되는지 확인하기\r\n드디어 수정기능 완성!\r\n', '2020-05-18', 14, 0),
(2, 'admin2', 'Second Writing', '처음으로 쓰는 글2\r\n잘되는지 확인하기\r\n2', '2020-05-18', 13, 0),
(3, 'admin33', 'Third writing', '벌써 3번째 글이다. \r\n내 자신이 두렵다 ', '2020-05-17', 20, 0),
(4, 'admin33', 'four writing', '벌써 4번째 글이다. \r\n내 자신이 두렵다 ', '2020-05-17', 25, 0),
(10, 'admin', '제목', '123cfjdshk', '1998-12-31', 8, 0),
(17, 'admin', '제목123', '123cfjdshk \r\n변경좀 해보자', '2020-05-18', 5, 0),
(27, '끌쓴이', '드디어', '잘 저장된다고~!@\r\n확인 한번 제대로 해봐라', '2020-05-18', 3, 0),
(34, '6사무실에서 5시간 공부', '추가, 보기 기능 완성', '솔직히 시간이 너무 많이 걸린듯 하다. ㅠㅠ', '2020-05-18', 7, 0),
(35, '자기전에', '복습타임', '추가 기능 복습함', '2020-05-18', 3, 0),
(37, '닉변', '지금 글쓴다', '나는 나', '2020-05-19', 20, 0),
(38, '나 ', '수정 기능 완성!', '수정 기능 완성 기념 작성 20일 되고 나서 수정하면 날짜 바뀌는지 확인하기<br>\r\n엔터치고 치는 글자도 띄어쓰기로 인식되는 문제 해결하기\r\n레이아웃 조금 고치기\r\n삭제 기능 만들기 \r\n로그인 기능 만들고 작성자와 비밀번호 연동하기(시간 오래 걸릴듯 관계형 데이터 베이스)\r\n', '2020-05-19', 12, 0),
(39, '나', '문제점', '현재 가장 큰 문제중 하나 <br>\r\ntextarea에서 엔터키는 안먹히면서 html코드는 작동한다. 고쳐야함. 보안 취약점임\r\n엔터키 먹힘', '2020-05-19', 18, 0),
(49, '대현', '게시판 CRUD 기능 완성!', '다 완성함', '2020-05-19', 25, 0),
(51, '대현', '오늘 새로운 글 하나 작성', '팀노바에서 작성 중 ', '2020-05-20', 7, 0),
(53, '늦엇어', '이제 메인 페이지 디자인 시작', '오소이...', '2020-05-20', 12, 0),
(56, '나', '5월 21일 밤 4시 40분', '자유게시판 옮기기 까지 성공', '2020-05-21', 12, 0),
(59, '123', '글에 수정 삭제 권한 부여', '작성자만 수정 삭제가 가능', '2020-05-21', 11, 0),
(60, 'asd123', '123', '123', '2020-05-21', 8, 0),
(64, 'team', 'team', 'nova123', '2020-05-21', 47, 0),
(65, '1212', '나의 비번은', '1번만 반복하면됨', '2020-05-21', 10, 0),
(66, 'team', '6:38', '메인화면 카드에 글 뿌리기 완성', '2020-05-21', 8, 0),
(67, 'team', '123123123123123123123123123132123123', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2020-05-21', 7, 0),
(68, '123', '조회수 쿠키 적용', '방금', '2020-05-21', 3, 0),
(70, '123', '후 몇일만이냐', '다시 공부 시작하자.\r\n일단 해야 할 것\r\n0. 글작성, 글수정 뷰 이쁘게 만들기\r\n1. 이미지 첨부\r\n2. 메인에서 이미지 뷰 띄우기\r\n3. 아이디, 비밀번호 찾기 만들기(비번은 메일로 인증 거치기)\r\n4. 게시판 여러개 만들기(하나의 php파일만 만들고 카테고리로 글들을 구별하기)\r\n5. 페이징 적용하기\r\n', '2020-05-25', 1, 0),
(71, '123', '오늘 이미지로 첨부하러 왔다', '빨리좀 하자', '2020-05-27', 1, 0);

-- --------------------------------------------------------

--
-- 테이블 구조 `reply`
--

CREATE TABLE `reply` (
  `idx` int(11) NOT NULL,
  `con_num` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pw` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `board`
--
ALTER TABLE `board`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- 테이블의 AUTO_INCREMENT `reply`
--
ALTER TABLE `reply`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
