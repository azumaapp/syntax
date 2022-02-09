CREATE TABLE `sub_spring_bbs1` (
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
ALTER TABLE `sub_spring_bbs1`
  ADD PRIMARY KEY (`no`);
ALTER TABLE `sub_spring_bbs1`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
