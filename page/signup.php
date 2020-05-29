<?php
    include 'signup_ok.php';
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
        
        <script>
            function fnMove(seq){
                var offset = $("#card" + seq).offset();
                $('html, body').animate({scrollTop : offset.top}, 800);
            }
        </script>

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
            <form method="POST" action="signup.php">
                <div id="signup_form">

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">ID</span>
                        </div>
                        <input type="text" name="username"class="form-control" placeholder="아이디" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Email</span>
                        </div>
                        <input type="text" name="email" class="form-control" placeholder="이메일" aria-label="Username" aria-describedby="basic-addon1">
                        <div class="check_font" id="id_check"></div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Password</span>
                        </div>
                        <input type="password" name="password_1" class="form-control" placeholder="비밀번호(6자 이상)" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Pw_check</span>
                        </div>
                        <input type="password" name="password_2" class="form-control" placeholder="비밀번호 확인" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    
                    <button type="submit" name="signup_user" class="btn btn-primary" id="ok">동의하고 가입하기</button><br>
                    <p style="font-size: 13px;">본인은 만 14세 이상이며, <a target="_blank" href="http://ideamensch.com/terms-and-conditions">쿠팡 이용약관</a>, 
                    <a target="_blank" href="http://ideamensch.com/terms-and-conditions">전자금융거래이용약관</a>, 
                    <a target="_blank" href="http://ideamensch.com/terms-and-conditions">개인정보 수집 및 이용</a>,<br> 
                    <a target="_blank" href="http://ideamensch.com/terms-and-conditions">개인정보 제공 내용</a>을 확인 하였으며, 동의합니다.</p>

                    <br> <br> <br> <br> <br> <br> <br>
                        <p>Copyright © 2020 ProShare.com,Ltd. All rights reserved.</p>
                        <address>Contact webmaster for more information. 010-1234-5678</address>
                </div>
            </form>
        </div>
    </body>
</html>