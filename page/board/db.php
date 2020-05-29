<?php

  $DBhost = "localhost";
  $DBuser = "root";
  $DBpasswrod = "Worth@5191";
  $DBname = "Ex_board";

  $conn = mysqli_connect($DBhost, $DBuser, $DBpasswrod, $DBname);
  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }
?>