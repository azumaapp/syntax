<?php
// 세션 삭제
session_unset();

// 세션 파괴
SESSION_DESTROY();

// 세션 재시작
session_start();

echo "<script>alert('로그아웃 되었습니다.')</script>";
echo "<meta http-equiv='refresh' content='0;url=login.php'>";
?>
