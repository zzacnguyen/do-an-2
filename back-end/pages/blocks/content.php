<?php 
    if ($page == 'tenloai'){
        include_once '../tables/tenloaisanpham.php';
    } else if ($page == 'tintuc'){
        include_once '../tables/tintuc.php';
    }else if ($page == 'lienhe'){
        include_once '../tables/lienhe.php';
    }else if ($page == 'email'){
        include_once '../tables/email.php';
    }else if ($page == 'chitiet'){
        include_once '../tables/chitiet.php';
    }else if ($page == 'hinhanh'){
        include_once '../tables/hinhanh.php';
    }else if ($page == 'themsanpham'){
        include_once '../tables/themsanpham.php';
    }else if ($page == 'themchitietsp'){
        include_once '../tables/themchitietsp.php';
    }else if ($page == 'themhinhanh'){
        include_once '../tables/themhinhanh.php';
    }else if ($page == 'themtintuc'){
        include_once '../tables/themtintuc.php';
    }else if ($page == 'themlienhe'){
        include_once '../tables/themlienhe.php';
    }else if ($page == 'thememail'){
        include_once '../tables/thememail.php';
    }else if ($page == 'xoalienhe'){
        include_once '../tables/xoalienhe.php';
    }else if ($page == 'xoatintuc'){
        include_once '../tables/xoatintuc.php';
    }else if ($page == 'xoaemail'){
        include_once '../tables/xoaemail.php';
    }else if ($page == 'xoachitiet'){
        include_once '../tables/xoachitiet.php';
    }else if ($page == 'xoasanpham'){
        include_once '../tables/xoasanpham.php';
    }else if ($page == 'xoahinhanh'){
        include_once '../tables/xoahinhanh.php';
    }else if ($page == 'capnhatlienhe'){
        include_once '../tables/capnhatlienhe.php';
    }else if ($page == 'capnhatemail'){
        include_once '../tables/capnhatemail.php';
    }else if ($page == 'capnhatchitiet'){
        include_once '../tables/capnhatchitiet.php';
    }else if ($page == 'capnhatsanpham'){
        include_once '../tables/capnhatsanpham.php';
    }else if ($page == 'capnhattintuc'){
        include_once '../tables/capnhattintuc.php';
    }else if ($page == 'capnhathinhanh'){
        include_once '../tables/capnhathinhanh.php';
    }
    else{
        include_once '../tables/tenloaisanpham.php';
    }
?>
