<?php
require('_conn.php');

if(isset($_GET['current_bbs_page'])){
    $current_bbs_page=$_GET['current_bbs_page'];
} else {
    $current_bbs_page=1;
}

$start = ($current_bbs_page-1)*12;
// ▲ ★ 넘기는 개수 수정할 때 맨 끝 숫자 수정

$sqlall = "SELECT * FROM `sub_secret_bbs5` where del_flg = '0'";
$count = mysqli_query($conn, $sqlall)->num_rows;
$end_bbs_page = ceil($count/12);
// ▲ ★ 넘기는 개수 수정할 때 맨 끝 숫자 수정

$sql = "SELECT * FROM `sub_secret_bbs5` where del_flg = '0' order by no desc limit $start, 12";
// ▲ ★ 넘기는 개수 수정할 때 맨 끝 숫자 수정
// ▲ limit a, 5 = a 부터 5개

$result = mysqli_query($conn, $sql);

$prev_bbs_page = $current_bbs_page-1;
$next_bbs_page = $current_bbs_page+1;

?>
