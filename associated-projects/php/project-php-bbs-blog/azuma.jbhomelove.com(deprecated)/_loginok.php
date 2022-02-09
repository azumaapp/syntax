<?
// <!-- 로그인 성공시의 처리 -->
$sql_user_info = "SELECT * FROM `azuma_a_user1` where id='$id'";
$result_user_info = mysqli_query($conn, $sql_user_info);
foreach($result_user_info as $user){
    $nickname=$user['nickname'];
}
$_SESSION['id'] = $id;
$_SESSION['nickname'] = $nickname;
?>
