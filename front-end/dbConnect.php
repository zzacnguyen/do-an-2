<?php 
    $connect = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($connect,"doan1");
    mysqli_query($connect, "SET NAMES 'utf8'");
?>