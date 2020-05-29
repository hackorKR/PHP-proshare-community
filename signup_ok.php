<?php
//db 파일 쓰는게 안됨 무슨 문제인지 모르겠음
  $conn = mysqli_connect("localhost", "root", "Worth@5191", "ProShare");
  //mysqli_select_db($conn, "Ex_board");

//각 변수에 write.php에서 input name값들을 저장한다
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password_1'], PASSWORD_DEFAULT);

if($username && $email && $password){

    //정확한 date 입력을 위해 now() php함수를 씀
    $query = "INSERT INTO user (username, email, password) VALUES ('".$username."','".$email."','".$password."')";
    $result = mysqli_query($conn, $query);
    if($result === false){
        echo mysqli_error($conn);
    }

    echo "<script>
    alert('회원가입이 완료되었습니다..');
    location.href='../index.php';</script>";
}else{
    echo "<script>
    alert('회원가입에 실패하셨습니다..');
    history.back();</script>";
}
?>?>
