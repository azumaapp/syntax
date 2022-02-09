<?php
$no = $_POST['no'];
require ('_conn.php');

// 세션 아이디 존재 여부 검사
if(isset($_SESSION['id'])){

  // admin이 작성한 글인지 체크
  if($_SESSION['id'] == 'admin'){
        // admin이 작성한 글일 경우 : 계속 진행 - 수정 실행을 위한 변수 설정
        // <!-- [Toggle] 줄바꿈은 항상 적용, HTML 태그는 적용 ON/OFF 선택 Start -->
        // $title = nl2br($_POST['title']); $content = nl2br($_POST['content']); $title = str_replace("'", "''", $title); $content = str_replace("'", "''", $content);
        $title = nl2br(htmlspecialchars($_POST['title'], ENT_QUOTES, 'UTF-8')); $content = nl2br(htmlspecialchars($_POST['content'], ENT_QUOTES, 'UTF-8'));
        // [참조] 게시글 자료 불러오기 문법 설명
        //        1. nl2br : php 내 게시글에 자동 줄바꿈을 적용. 2. str_replace : 치환으로서, ''일때 '하나 정상뜨고, ' 한개일 때 에러 뜨는 문제 해결2.
        //        3. htmlspecialchars : php 내 게시글에 태그 적용 끄기. 4. ENT_QUOTES : ' " 모두 앞에 \ 붙임 (기본옵션).
        // 수정이니까 (등록할 때랑 정보가 바뀌지 않으니까) 필요없는 것 : 게시물 id, 작성자 id, 작성자 nickname, 등록날짜
        // 수정이니까 (등록할 때랑 정보가 바뀌니까) 꼭 필요한 것 : 수정날짜
        // 글쓰기 선택사항의 변수처리 : 있을 경우는 태그를 삭제해야 한다. 없을 경우에도 ''; 라고 지정을 해둬야 NULL 에러가 안 뜬다.
        // 이미지는 파일의 형태이므로 태그적용에 대한 걱정은 없다. (<> 등 입력 안됨)
        $nickname = $_POST['nickname'];
        $img1 = $_FILES['img1'];
        $img_size1 = $_FILES['img1']['size'];
        $blackbox1 = $_POST['blackbox1'];
        $tag1 = htmlspecialchars($_POST['tag1'], ENT_QUOTES, 'UTF-8');

        // 잘못 입력된 경우 걸러내기
        if(!$title||!$content){   // 필수항목 미입력 걸러내기
          echo "<script>alert('필수항목을 모두 작성해주세요.');history.back();</script>";
        } else { // 여기서부터 등록 끝까지 담아버리기

        // <!-- 잘 입력 됐을 시 -->
        // 파일등록처리 : 이미지파일 있을 경우
        if(isset($img1)) {
          // 디렉토리
          $dir = "bbs_images/";
          // 파일명, 임시파일명
          $file_name1 = basename($img1['name']);
          $tmp_name1 = $img1['tmp_name'];
          // 파일중복방지 위해 파일명변경
          $addName = strtotime(date("Y-m-d H:i:s")); // 현재날짜 시간초 구하는 변수
          $milliseconds = round(microtime(true) * 1000); // 현재날짜를 밀리초로 바꾸는 변수 (더 확실히 중복방지할때 추가1)
          $addName .= $milliseconds; // 파일이름에 밀리초 추가하는 변수 (더 확실히 중복방지할때 추가2)
          $file_name1 = $addName . "_" . $file_name1; // 변수들을 이용하여 실제 파일명변경 실행
          // 파일등록처리
          if(move_uploaded_file($tmp_name1, $dir.$file_name1)){
            require ('_conn.php');
            $sql = "UPDATE `azuma_f_bbs3` SET `title` = '$title', `content` = '$content', `nickname` = '$nickname', `mod_date` = CURRENT_TIMESTAMP, `blackbox1` = '$blackbox1', `tag1` = '$tag1', `img_file1` = '$file_name1', `img_size1` = '$img_size1' WHERE `azuma_f_bbs3`.`no`=$no";
            mysqli_query($conn, $sql);
          } else {
            // 파일등록처리 : 이미지파일 업로드중 실패했을 경우
            require ('_conn.php');
            $sql = "UPDATE `azuma_f_bbs3` SET `title` = '$title', `content` = '$content', `nickname` = '$nickname', `mod_date` = CURRENT_TIMESTAMP, `blackbox1` = '$blackbox1', `tag1` = '$tag1' WHERE `azuma_f_bbs3`.`no`=$no";
            mysqli_query($conn, $sql);
          }
          } else {
          // 파일등록처리 : 이미지파일 수정하지 않았을 경우
          require ('_conn.php');
          $sql = "UPDATE `azuma_f_bbs3` SET `title` = '$title', `content` = '$content', `nickname` = '$nickname', `mod_date` = CURRENT_TIMESTAMP, `blackbox1` = '$blackbox1', `tag1` = '$tag1' WHERE `azuma_f_bbs3`.`no`=$no";
          mysqli_query($conn, $sql);
          }

        // ★ 수정 성공 후 뒤로 두번 돌아가기
        echo "<script>alert('수정완료했습니다. 확인을 클릭해주세요.');</script>";
        $_SESSION['modback'] = '1';
        echo "<script>history.go(-1);</script>";

        // "필수항목 미입력 걸러내기" 닫기
        }

    // 세션일치 성공한 경우 닫기
    }

    // 세션 아이디와 해당글 작성자 아이디가 다른 경우 = XSS 해킹이나 주소창 접근 등 비정상 경로
    else {
      echo "<script>alert('권한이 없습니다.');</script>";
      echo "<meta http-equiv='refresh' content='0.1; url=bbs.php'>";
    }

// 세션 자체가 없는 경우 = 세션 제거 당한 사람이거나 위와 동일하게 비정상 경로
} else {
echo "<script>alert('다시 로그인을 해주시기 바랍니다.');</script>";
echo "<meta http-equiv='refresh' content='0.1; url=../member1/login.php'>";
}
?>
