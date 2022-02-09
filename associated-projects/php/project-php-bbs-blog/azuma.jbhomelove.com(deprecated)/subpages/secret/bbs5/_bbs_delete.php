<?php
$no = $_GET['no'];

// <!-- 잘못 입력된 경우 걸러내기 -->
if(!isset($_SESSION['nickname'])) {
  echo "<script>alert('세션이 만료되었습니다. 다시 로그인해주세요.'));history.back();</script>";
} else { // 여기서부터 페이지 끝까지 담아버리기


require('_conn.php');
$sql = "UPDATE `sub_secret_bbs5` SET `del_flg` = '1' WHERE `sub_secret_bbs5`.`no` = $no";
mysqli_query($conn, $sql);
// echo "<script>alert('게시물이 삭제되었습니다.');</script>";
?>

<!-- 삭제 성공후 뒤로 돌아가기 -->
<script>alert('게시물이 삭제되었습니다.');</script>
<?php $_SESSION['delback'] = '1'; ?>
<script>history.go(-1);</script>";


<!-- 잘못 입력된 경우 걸러내기 닫기 -->
<?php } ?>
