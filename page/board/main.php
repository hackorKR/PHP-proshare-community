<?php
  require_once("db.php");
?>

<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>게시판</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
    <div id="board_area">
    <h1 id="title">
        <a href="http://localhost/ProShare/index.php">ProShare</a>
    </h1>
        <h1>
            <a href="main.php">자유게시판</a>
        </h1>
        <h4>자유롭게 글을 쓸 수 있는 게시판입니다.</h4>
        
        <table class="list-table">
            <thead>
                <tr>
                    <th width="70">번호</th>
                    <th width="500">제목</th>
                    <th width="120">글쓴이</th>
                    <th width="100">작성일</th>
                    <th width="100">조회수</th>
                </tr>
            </thead>

            <?php
                //최초 페이지에서도 page는 1
                $page = ($_GET['page'])?$_GET['page']:1;

                $data = mysqli_query("SELECT idx FROM board ORDER BY idx EDSC");
                $num = mysqli_num_rows($data);
                $list = 10;
                $block = 3;

                $pageNum = ceil($num/$list); //총페이지
                $blockNum = ceil($pageNum/$block); //총 블록
                $nowBlock = ceil($page/$block);

                $s_page = ($nowBlock * $block) - ($black -1);
                if($s_page <= 1){
                    $s_page = 1;
                }
                $e_page = $nowBlock*$block;
                if($pageNum <= $e_page){
                    $e_page = $pageNum;
                }
                for($p=$s_page; $p=$e_page; $p++){
            ?>
      

            <?php
                }
              $query = "SELECT * FROM board ORDER BY idx DESC LIMIT 0,10";
              $result = mysqli_query($conn, $query);
              // $sql = 'SELECT * FROM topic WHERE id='.$_GET['id'];
              while($board = mysqli_fetch_array($result)){
                  //title변수에 DB에서 가져온 title을 선택
                    $title=$board["title"]; 
                    if(strlen($title)>30)
                    { 
                        //title이 30을 넘어서면 ...표시
                        $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]);
                    }
            ?>

            <tbody>
                <tr>
                    <td width="70"><?php echo $board['user_like']; ?></td>
                    <td width="500">
                        <?php
                          echo '<a href="page/view.php?idx='.$board['idx'].'"> '.$board['title'].'</a>'."\n";
                        ?>
                    </td>
                    <td width="120"><?php echo $board['name']?></td>
                    <td width="100"><?php echo $board['date']?></td>
                    <td width="100"><?php echo $board['hit']?></td>
                </tr>
            </tbody>
            <?php } mysqli_free_result($result); ?>
            
        </table>
        <div id="write_btn">
            <a href="page/board/write.php">
                <button>글쓰기</button>
            </a>
        </div>
    </div>
</body>
</html>