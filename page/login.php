<?php
    session_start();
    if(!isset($_SESSION['username'])){

    } else {
        echo "<script>
            alert('이미 로그인 되어 있는 상태입니다.');
            location.href='../index.php';</script>";
    }
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
            href="../css/main_style.css">

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

            #progress{
                height: 35px;
            }

            #progress_text{
                font-size:20px;
            }
            #signup_form{
               text-align: center;

            }
            .input-group{
                width: 500px;
                margin: auto;
            }
            #ok{
                width: 500px;
            }
        </style>

        <!-- jQuery cdn 사용 -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       
        <!-- jquery에서 제공하는 최신 버전의 jQuery url -->
        <!-- <script src="http://code.jquery.com/jquery-latest.js"></script> -->

    </head>

    <body>


        <header>
        <br><br><br>
            <div class="container">
                <div style="text-align: center">
                    <div style="display: inline-block;">
                        <h1 id="title">
                            <a href="http://localhost/ProShare/index.php">ProShare</a>
                        </h1>
                    </div>
                </div>
            </div>
        </header>
        <br><br>
        <div class="container">
            <form method="POST" action="login_ok.php">
                <div id="signup_form">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">ID</span>
                        </div>
                        <input type="text" name="username"class="form-control" placeholder="아이디" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Password</span>
                        </div>
                        <input type="password" name="password" class="form-control" placeholder="비밀번호(6자 이상)" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    
                    <button type="submit" name="login_user" class="btn btn-primary" id="ok">로그인</button><br>

                    <br> <br> <br> <br> <br> <br> <br>
                        <p>Copyright © 2020 ProShare.com,Ltd. All rights reserved.</p>
                        <address>Contact webmaster for more information. 010-1234-5678</address>
                </div>
            </form>
        </div>
    </body>
</html>