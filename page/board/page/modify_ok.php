<?php
session_start();
//include ("db.php");
$conn = mysqli_connect("localhost", "root", "Worth@5191", "Ex_board");
//mysqli_select_db($conn, "Ex_board");

$bno = $_GET['idx'];
$username = $_SESSION['username'];
$title = $_POST['title'];
$content = $_POST['content'];
$sql = mysqli_query($conn, "update board set name='".$username."',title='".$title."',content='".$content."' where idx='".$bno."'"); ?>

<script type="text/javascript">alert("수정되었습니다."); </script>
<meta http-equiv="refresh" content="0 url=view.php?idx=<?php echo $bno; ?>">