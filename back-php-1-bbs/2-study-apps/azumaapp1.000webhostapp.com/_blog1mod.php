<?php
    require('_conn.php');
    $no = $_POST['no'];
    $name = $_SESSION['name'];
    $category = $_POST['category'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $img_file = $_FILES['img_file'];
    $img_size = $_FILES['img_file']['size'];

    require('_blog_file_upload.php');

    if($result) {
        $sql = "UPDATE `blog1` SET `name`='$name', `category`='$category', `title`='$title', `img_file`='$file_name', `img_size`='$img_size', `mod_date`=CURRENT_TIMESTAMP(), `content`='$content' WHERE `no`='$no'";
    } else {
        // 파일이 없을 경우
        $sql = "UPDATE `blog1` SET `name`='$name', `category`='$category', `title`='$title', `mod_date`=CURRENT_TIMESTAMP(), `content`='$content' WHERE `no`='$no'";
    }

    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('글 수정이 완료되었습니다.');location.href='blog.php'</script>";
    }
?>