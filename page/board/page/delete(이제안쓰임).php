<?php
	//include ("db.php");
    $conn = mysqli_connect("localhost", "root", "Worth@5191", "Ex_board");
    //mysqli_select_db($conn, "Ex_board");
	
	$bno = $_GET['idx'];
    //$sql = mysqli_query($conn, "delete from board where idx='$bno';");
    
    echo ('<script type="text/javascript">

    var result = confirm("정말로 삭제하시겠습니까?");
    if(result){
        location.href("delete_ok.php");
    }else{
        history.back();
    } 
    </script>');
?>
