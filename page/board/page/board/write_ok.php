<?php
session_start();
//db 파일 쓰는게 안됨 무슨 문제인지 모르겠음
  $conn = mysqli_connect("localhost", "root", "Worth@5191", "Ex_board");
  //mysqli_select_db($conn, "Ex_board");

if(!isset($_SESSION['username'])){
    //각 변수에 write.php에서 input name값들을 저장한다
    $username = $_POST['name'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = date('Y-m-d');
    $hit = 0;
    $user_like = 0;
} else {
    $username = $_SESSION['username'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = date('Y-m-d');
    $hit = 0;
    $user_like = 0;
}

if($username && $title && $content){

    //정확한 date 입력을 위해 now() php함수를 씀
    $query = "INSERT INTO board (name, title, content, date, hit, user_like) VALUES ('".$username."','".$title."','".$content."', now(),'".$hit."','".$user_like."')";
    $result = mysqli_query($conn, $query);
    if($result === false){
        echo mysqli_error($conn);
    }

    echo "<script>
    alert('글쓰기 완료되었습니다.');
    location.href='../../main.php';</script>";
}else{
    echo "<script>
    alert('글쓰기에 실패했습니다.');
    history.back();</script>";
}
?>