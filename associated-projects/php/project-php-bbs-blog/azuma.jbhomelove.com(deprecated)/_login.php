<?php
    $id = $_POST['id'];
    $password = $_POST['password'];

    require('_conn.php');
    $sql = "select * from `azuma_a_user1` where id='$id' and password='$password'";
    $result = mysqli_query($conn, $sql);
    $row = $result->num_rows;

    if($row > 0){
        require('_loginok.php');
        echo "<script>window.alert('로그인이 완료되었습니다.')</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php'>";
    } else {
        header("Location:login.php");
    }
?>
