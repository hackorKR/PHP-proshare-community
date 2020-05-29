<?php
	//include ("db.php");
    $conn = mysqli_connect("localhost", "root", "Worth@5191", "Ex_board");
    //mysqli_select_db($conn, "Ex_board");
	
	$bno = $_GET['idx'];
    $sql = mysqli_query($conn, "delete from board where idx='$bno';");
?>
<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=../main.php" />

