<?php
  $no=$_POST['no'];

  // <!-- [Toggle] 줄바꿈은 항상 적용, HTML 태그는 적용 ON/OFF 선택 Start -->
  $title = nl2br($_POST['title']); $content = nl2br($_POST['content']); $title = str_replace("'", "''", $title); $content = str_replace("'", "''", $content);
  // $title = nl2br(htmlspecialchars($_POST['title'], ENT_QUOTES, 'UTF-8')); $content = nl2br(htmlspecialchars($_POST['content'], ENT_QUOTES, 'UTF-8'));
  // <!-- [Toggle] 줄바꿈은 항상 적용, HTML 태그는 적용 ON/OFF 선택 End -->

  $nickname=$_POST['nickname'];
  $img1 = $_FILES['img1'];
  $img_size1 = $_FILES['img1']['size'];

  // <!-- 잘못 입력된 경우 걸러내기 -->
  if(!$title||!$content) {   // 필수항목 미입력 걸러내기
    echo "<script>alert('필수항목을 모두 작성해주세요.');history.back();</script>";
  } else if (!isset($_SESSION['nickname'])) {
    echo "<script>alert('세션이 만료되었습니다. 다시 로그인해주세요.'));history.back();</script>";
  } else { // 여기서부터 페이지 끝까지 담아버리기

  if(isset($img1)) {
      $dir = "bbs_images/";
      $file_name1 = basename($img1['name']);
      $tmp_name1 = $img1['tmp_name'];
      // <!-- 파일중복방지 -->
      $addName = strtotime(date("Y-m-d H:i:s")); // 현재날짜 시간초 구하는 변수
      // $milliseconds = round(microtime(true) * 1000); // 현재날짜를 밀리초로 바꾸는 변수 (더 확실히 중복방지할때 추가할 셋 1)
      // $addName .= $milliseconds; // 파일이름에 밀리초 추가하는 변수 (더 확실히 중복방지할때 추가할 셋 2)
      $file_name1 = $addName . "_" . $file_name1; // 변수들을 이용하여 실제 파일명변경 실행

      if(move_uploaded_file($tmp_name1, $dir.$file_name1)) {
          // 파일 입력 성공시
          require('_conn.php');
          $sql = "UPDATE `sub_secret_bbs2` SET `title` = '$title', `content` = '$content', `nickname` = '$nickname', `update_date` = CURRENT_TIMESTAMP, `img_file1` = '$file_name1', `img_size1` = '$img_size1' WHERE `sub_secret_bbs2`.`no`=$no";
          mysqli_query($conn, $sql);
          header("refresh:0.1; url=bbs.php");

      // 파일 입력 실패시
      } else {
          require('_conn.php');
          $sql = "UPDATE `sub_secret_bbs2` SET `title` = '$title', `content` = '$content', `nickname` = '$nickname', `update_date` = CURRENT_TIMESTAMP WHERE `sub_secret_bbs2`.`no`=$no";
          mysqli_query($conn, $sql);
          header("refresh:0.1; url=bbs.php");
          }

  // 파일 입력 안했을 때
  } else {
      require('_conn.php');
      $sql = "UPDATE `sub_secret_bbs2` SET `title` = '$title', `content` = '$content', `nickname` = '$nickname', `update_date` = CURRENT_TIMESTAMP WHERE `sub_secret_bbs2`.`no`=$no";
      mysqli_query($conn, $sql);
      header("refresh:0.1; url=bbs.php");
      }

// <!-- 잘못 입력된 경우 걸러내기 닫기 -->
}
?>
