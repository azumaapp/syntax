CREATE TABLE `azuma_a_blog1` (
  `no` int(10) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `nickname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp(),
  `update_date` datetime DEFAULT NULL,
  `img_file1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_size1` int(255) DEFAULT NULL,
  `del_flg` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='프로젝트 블로그';

CREATE TABLE `azuma_a_blog2` (
  `no` int(10) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `nickname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp(),
  `update_date` datetime DEFAULT NULL,
  `img_file1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_size1` int(255) DEFAULT NULL,
  `del_flg` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='스킬 블로그';

CREATE TABLE `azuma_a_blog3` (
  `no` int(10) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `nickname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp(),
  `update_date` datetime DEFAULT NULL,
  `img_file1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_size1` int(255) DEFAULT NULL,
  `del_flg` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='';

CREATE TABLE `azuma_a_letter1` (
  `no` int(10) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(15000) COLLATE utf8_unicode_ci NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='편지함';

CREATE TABLE `azuma_a_user1` (
  `id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nickname` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='유저정보';

INSERT INTO `azuma_a_user1` (`id`, `password`, `nickname`) VALUES
('azuma', 'zix7211', 'Admin');





ALTER TABLE `azuma_a_blog1`
  ADD PRIMARY KEY (`no`);
ALTER TABLE `azuma_a_blog2`
  ADD PRIMARY KEY (`no`);
ALTER TABLE `azuma_a_blog3`
  ADD PRIMARY KEY (`no`);
ALTER TABLE `azuma_a_letter1`
  ADD PRIMARY KEY (`no`);
ALTER TABLE `azuma_a_user1`
  ADD PRIMARY KEY (`id`);






INSERT INTO `azuma_a_blog1` (`no`, `title`, `content`, `nickname`, `reg_date`, `update_date`, `img_file1`, `img_size1`, `del_flg`) VALUES
(1, 'Dummy Data Test 입니다.', '제목과 내용을 수정해서 사용하시기 바랍니다.', 'Admin', current_timestamp(), NULL, NULL, NULL, '0');
INSERT INTO `azuma_a_blog2` (`no`, `title`, `content`, `nickname`, `reg_date`, `update_date`, `img_file1`, `img_size1`, `del_flg`) VALUES
(1, 'Dummy Data Test 입니다.', '제목과 내용을 수정해서 사용하시기 바랍니다.', 'Admin', current_timestamp(), NULL, NULL, NULL, '0');
INSERT INTO `azuma_a_blog3` (`no`, `title`, `content`, `nickname`, `reg_date`, `update_date`, `img_file1`, `img_size1`, `del_flg`) VALUES
(1, 'Dummy Data Test 입니다.', '제목과 내용을 수정해서 사용하시기 바랍니다.', 'Admin', current_timestamp(), NULL, NULL, NULL, '0');
ALTER TABLE `azuma_a_blog1`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
ALTER TABLE `azuma_a_blog2`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
ALTER TABLE `azuma_a_blog3`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
ALTER TABLE `azuma_a_letter1`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
