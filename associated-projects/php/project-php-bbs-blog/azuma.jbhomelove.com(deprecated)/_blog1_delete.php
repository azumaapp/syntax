<?php
$no = $_GET['no'];

// <!-- 잘못 입력된 경우 걸러내기 -->
if(!isset($_SESSION['nickname'])) {
  echo "<script>alert('세션이 만료되었습니다. 다시 로그인해주세요.'));history.back();</script>";
} else { // 여기서부터 페이지 끝까지 담아버리기


require('_conn.php');
$sql = "UPDATE `azuma_a_blog1` SET `del_flg` = '1' WHERE `azuma_a_blog1`.`no` = $no";
mysqli_query($conn, $sql);
// echo "<script>alert('게시물이 삭제되었습니다.');</script>";
?>

<script>
window.location.replace(document.referrer);
</script>

<!-- 잘못 입력된 경우 걸러내기 닫기 -->
<?php } ?>
