<?php
    session_start();
   //include ("db.php");
   $conn = mysqli_connect("localhost", "root", "Worth@5191", "Ex_board");
  //mysqli_select_db($conn, "Ex_board");
?>

<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>게시판</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>

</head>
<body>
    <div id="board_area">
        <h1>
            <a href="../main.php">자유게시판</a>
        </h1>
        <h4>글을 읽는 페이지 입니다.</h4>
        <?php 
            $bno = $_GET['idx'];

            $query = "SELECT * FROM board WHERE idx ='".$bno."'";
            $result = mysqli_query($conn, $query);
            $board = mysqli_fetch_array($result);

	    	$hit = $board['hit']+1;
            // $fet = mysqli_query($conn, "UPDATE board SET hit = '".$hit."' where idx = '".$bno."'");

            if(!empty($bno) && empty($_COOKIE['board' . $bno])) {
                $sql = "UPDATE board SET hit = '".$hit."' WHERE idx = '".$bno."'";
                $hit_result = mysqli_query($conn, $sql);
                if(empty($hit_result)) {
                    ?>
                    <script>
                        alert('오류가 발생했습니다.');
                        history.back();
                    </script>
                    <?php 
                } else {
                    setcookie('board' . $bno, TRUE, time() + (60 * 60 * 24), '/');
                }
            }
        ?>
        <!-- 글 불러오기-->
        <!-- <div class="container">
            <div class="row">
                <table
                    class="table table-striped"
                    style="text-align: center; border: 1px solid #dddddd">
                    <thead>
                        <tr>
                            <th width="500" colspan="2" style="background-color: #eeeeee; text-align: center;">게시판</th>
                        </tr>
                    </thead>
                    <tbody id="table_body">
                        <tr>
                            <td width="500", align="left"> 제목: <?php echo $board['title']?></td>
                        </tr>
                        <tr>
                            <td width="500", align="left">내용: <?php echo $board['content']?></td>
                        </tr>
                        <tr>
                            <td width="500">작성자: <?php echo $board['name']?></td>
                        </tr>
                        <tr>
                            <td width="500">날짜: <?php echo $board['date']?></td>
                        </tr>
                        <tr>
                            <td width="500">좋아요: <?php echo $board['user_like']?></td>
                        </tr>
                        <tr>
                            <td width="500">조회수: <?php echo $board['hit']?></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div> -->
        <div id="board_read">
            <h2><?php echo $board['title']; ?></h2>
                <div id="user_info">
                    <?php echo $board['name'] ."<br/n>"; ?> 
                    <?php echo $board['date'] ."<br/n>";; ?> 
                    조회:<?php echo $board['hit'] ."<br/n>";; ?>
                        <div id="bo_line"></div>
                    </div>
                    <div id="bo_content">
                        <?php echo nl2br("$board[content]"); ?>
                    </div>
        </div>
        <!-- 목록, 수정, 삭제 -->
        <div id="bo_ser">
            <ul>
                <li>
                    <a href="../main.php">[목록으로]</a>
                </li>
                <?php
                    if($board['name'] != $_SESSION['username']){

                    } else{
                        echo "<input type='BUTTON' value='수정' onclick=\"modify()\"> ";
                        echo "<input type='BUTTON' value='삭제' onclick=\"delete1()\"> ";
                    }
                ?>
            </ul>
        </div>
        <!--자바 스크립트-->
        <script language='javascript'>
        window.modify = function(){
            var result = confirm("정말로 수정하시겠습니까?");
                if(result){
                    location.href = "modify.php?idx=<?php echo $board['idx']; ?>";
                }else{

                } 
        }
        window.delete1 = function(){
            var result = confirm("정말로 삭제하시겠습니까?");
                if(result){
                    location.href = "delete_ok.php?idx=<?php echo $board['idx']; ?>";
                }else{

                } 
        }
        </script>
    </body>
</html>