<?php 
    include_once '../../../front-end/dongho.php';
    $sql = new DongHo();
    session_start();
    $taikhoan = isset($_POST['taikhoan'])?$_POST['taikhoan']:'';
    $matkhau = isset($_POST['matkhau'])?$_POST['matkhau']:'';
    if(isset($_POST['submit'])){
    $query = $sql->get_row("SELECT * FROM `taikhoan` WHERE `TK_TAIKHOAN` = '$taikhoan' AND `TK_MATKHAU` = '$matkhau'");
        if(count($query)>=2){
            $_SESSION['username'] = $query['TK_TAIKHOAN'];
        }else{
            header("Location: ../../index.php");
        }
        header("Location: dangnhap.php");
    }
    
?>