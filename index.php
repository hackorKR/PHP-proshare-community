<?php
session_start();
require_once("db.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- bootstrap 4.5 -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        
        <!-- 내 css 파일-->
        <link 
            rel="stylesheet"
            href="css/main_style.css">

        <title>ProShare</title>

        <style type="text/css">
            .a_link { color: black; }
            .a_link:hover { text-decoration:none; };
            
            .footer { 
                display:inline-block;
                text-align: center;
            }

            .card{
                margin: 10px;
            }

            #navbar{
                float: right;
            }
            #title {
                float: left;
            }
        </style>

        <!-- jQuery cdn 사용 -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
       
        <!-- jquery에서 제공하는 최신 버전의 jQuery url -->
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        
        <script>
            function fnMove(seq){
                var offset = $("#card" + seq).offset();
                $('html, body').animate({scrollTop : offset.top}, 800);
            }
        </script>

    </head>

    <body>


        <header>
            <div class="container">
                <!-- <nav class="nav justify-content-end" id="navbar">
                    <a class="nav-link" href="#">구독</a>
                    <a class="nav-link" href="page/login.php">로그인</a>
                    <a class="nav-link" href="page/signup.php">회원가입</a>
                </nav> -->
                <?php
                    if(!isset($_SESSION['username'])){
                        echo "<nav class='nav justify-content-end' id='navbar'>
                        <a class='nav-link' href='page/login.php'>로그인</a>
                        <a class='nav-link' href='page/signup.php'>회원가입</a></nav>";
                    } else {
                        $username = $_SESSION['username'];
                        echo "<nav class='nav justify-content-end' id='navbar'>
                        <a class='nav-link' href='#'>구독 목록</a>
                        <a class='nav-link' href='page/profile.php'>[<strong>$username</strong>님 환영합니다.]</a>
                        <a class='nav-link' href='page/logout.php'>로그아웃</a></nav>";
                    }
                ?>
                <h1 id="title">
                    <a href="http://localhost/ProShare/index.php">ProShare</a>
                </h1>
            </div>
        </header>
        <br><br><br><br>
        <div class="container">
            <div class="jumbotron" style="background-color:#FFFFFF;">
                <h1 class="display-4" style="text-align:center; color: #007BFF;">Project Shared<br>By Pro</h1><br>
                <p class="lead" style="text-align:center;">전문가들이 자신의 프로젝트를 정리해서 공유하는 블로그 사이트입니다.</p><br><br><br>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="프로젝트 검색 또는 작성자 검색" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <?php $search = $_GET['search'] ?>
                        <form action="./index.php?search='<?php $search ?>'" method="get">
                            <button name="search" class="btn btn-outline-secondary" type="submit" id="button-addon2" onclick="fnMove('1')">검색</button>
                        </form>
                    </div>
                </div>
                <hr class="my-4">
                <div style="text-align: center";>
                    <button type="button" class="btn btn-secondary" onclick="fnMove('1')">#인기</button>
                    <button type="button" class="btn btn-secondary">#최신</button>
                    <button type="button" class="btn btn-secondary">프로그래밍</button>
                    <button type="button" class="btn btn-secondary">디자인</button>
                    <button type="button" class="btn btn-secondary">음악</button>
                    <button type="button" class="btn btn-secondary"><a href="page/board/main.php" style="color:white">#자유게시판</a></button>
                    <br><br>
                    <button type="button" class="btn btn-secondary">자기관리</button>
                    <button type="button" class="btn btn-secondary">테크</button>
                    <button type="button" class="btn btn-secondary">정치</button>
                    <button type="button" class="btn btn-secondary">기업운영·창업</button>
                    <button type="button" class="btn btn-secondary">음식</button>
                    <button type="button" class="btn btn-secondary">건강·헬스</button>
                    <button type="button" class="btn btn-secondary">패션 트렌드</button>
                    <br><br>
                    <button type="button" class="btn btn-secondary">인간관계</button>
                    <button type="button" class="btn btn-secondary">데이터 사이언스</button>
                    <button type="button" class="btn btn-secondary">뇌과학</button>
                    <button type="button" class="btn btn-secondary">경제·투자</button>
                    <button type="button" class="btn btn-secondary">건축·설계</button>
                </div>
            </div>

            <p style="text-align: left; font-size: 22px;" id="card1">#자유게시판</p>
            <p style="text-align: right;"><a href="page/board/main.php" style="color: black">[더보기]</a></p>
            <div>
                <?php
                $query = "SELECT * FROM board ORDER BY idx DESC LIMIT 0,15";
                $result = mysqli_query($conn, $query);
                // $sql = 'SELECT * FROM topic WHERE id='.$_GET['id'];
                    // while($board = mysqli_fetch_assoc($result)){
                    //     echo "<div class='row'>";
                    //     for($j = 0; $j < 3; $j++){
                    //         echo "<div class='col-4'>
                    //                 <div class='card'>
                    //                     <img src='https://hireindianprogrammers.com/wp-content/uploads/2018/05/44.png' class='card-img-top' alt='뭐냐고'>
                    //                     <div class='card-body'>
                    //                         <h5 class='card-title'><a class='a_link' href='/ProShare/index.php'>"; echo $board['title']; echo"</a></h5>
                    //                         <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    //                     </div>
                    //                 </div>
                    //             </div>";
                    //     }
                    //     echo "</div>";
                    // }
                    $count = 0;
                    echo "<div class='row'>";
                    while($board = mysqli_fetch_assoc($result)){
                        //title변수에 DB에서 가져온 title을 선택
                        $title=$board["title"]; 
                        if(strlen($title)>15)
                        { 
                            //title이 15을 넘어서면 ...표시
                            $title=str_replace($board["title"],mb_substr($board["title"],0,15,"utf-8")."...",$board["title"]);
                        }
                        //content변수에 DB에서 가져온 content을 선택
                        $content=$board["content"]; 
                        if(mb_strlen($content, 'utf-8') > 30)
                        { 
                            //content이 25을 넘어서면 ...표시
                            $content=str_replace($board["content"],mb_substr($board["conetent"],0,20,"utf-8")."...",$board["content"]);
                        }


                        if($count % 3 == 0){
                            echo "<div class='row'>";
                        }
                        echo "<div class='col-4'>
                                 <div class='card'>
                                       <img src='https://hireindianprogrammers.com/wp-content/uploads/2018/05/44.png' class='card-img-top' alt='뭐냐고'>
                                       <div class='card-body'>
                                         <h5 class='card-title'><a class='a_link' href=\"/ProShare/page/board/page/view.php?idx=" .$board['idx']. "\">"; echo $title; echo"</a></h5>
                                          <p class='card-text'>"; echo $content; echo"</p>
                                     </div>
                                 </div>
                        </div>";
                        $count++;
                        if($count % 3 == 0){
                            echo "</div>";
                        }
                    }
                ?>

            </div>

            <br>
            <p style="text-align: center; font-size: 20px;"><a href="page/board/main.php" style="color: black">[더보기]</a></p>
            <br>

            <div class="footer" style="text-align: center">
                <p>Copyright © 2020 ProShare.com,Ltd. All rights reserved.</p>
                <address>Contact webmaster for more information. 010-1234-5678</address>
             </div>
        </div>
    </body>
</html>