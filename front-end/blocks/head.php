<?php 
    $page = isset($_GET['page'])?$_GET['page']:'';
    if ($page == 'lienhe'){
        $title = "Liên hệ";
    }else if ($page == 'thongtin'){
        $title = "Thông tin";
    }else if ($page == 'baohanh'){
        $title = "Bảo hành";
    }else if ($page == 'sanpham'){
        $title = "Sản phẩm";
    }else if ($page == 'hoidap'){
        $title = "Hỏi - Đáp";
    }else {
        $title = "Trang chủ";
    }
?>

<!--lienhe thongtin baohanh sanpham tintuc trangchu-->
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title><?php echo $title ?></title>
    <!-- reponsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- strock gap icons -->
    <link rel="stylesheet" href="vendors/Stroke-Gap-Icons-Webfont/style.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <!--    owl-carousel-->
    <link rel="stylesheet" href="vendors/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="vendors/jquery-ui-1.11.4/jquery-ui.min.css">

    <!-- Main Css  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
</head>

<body>
    <!-- .hidden-bar -->
    <section class="side-menu" id="sidebarCollapse">

        <button class="close-button" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-expanded="false" aria-controls="sidebarCollapse"><i class="fa fa-times"></i></button>

        <div class="side-menu-widget about-widget">
            <a href="index.php" class="logo">
                <img src="images/icon/lr-home.png" alt="Awesome Image" />
            </a>
            <h3 class="title playball-font">Chào mừng bạn tới Titanium Watch</h3>
            <!-- /.title playball-font -->
            <p>Titanium - Đơn vị phân phối đồng hồ sang trọng chuẩn quốc tế hàng đầu. </p>
        </div>
        <!-- /.side-menu-widget -->
        <div class="side-menu-widget gallery-widget">
            <div class="title-box">
                <h4>Thư viện ảnh của chúng tôi</h4>
                <span class="decor-line inline"></span>
            </div>
            <!-- /.title-box -->
            <ul class="list-inline">
                <li>
                    <a><img src="images/gallery-thumb/1.jpg" width="80px" height="81px" alt="Awesome Image" /></a>
                </li>
                <li>
                    <a><img src="images/gallery-thumb/2.jpg" width="80px" height="81px" alt="Awesome Image" /></a>
                </li>
                <li>
                    <a><img src="images/gallery-thumb/3.jpg" width="80px" height="81px" alt="Awesome Image" /></a>
                </li>
                <li>
                    <a><img src="images/gallery-thumb/4.jpg" width="80px" height="81px" alt="Awesome Image" /></a>
                </li>
                <li>
                    <a><img src="images/gallery-thumb/5.jpg" width="80px" height="81px" alt="Awesome Image" /></a>
                </li>
                <li>
                    <a><img src="images/gallery-thumb/6.jpg" width="80px" height="81px" alt="Awesome Image" /></a>
                </li>
                <li>
                    <a><img src="images/gallery-thumb/7.jpg" width="80px" height="81px" alt="Awesome Image" /></a>
                </li>
                <li>
                    <a><img src="images/gallery-thumb/8.jpg" width="80px" height="81px" alt="Awesome Image" /></a>
                </li>
            </ul>
            <!-- /.list-inline -->
            <ul class="contact-info">
                <li>ndtuong.ktpm0114@student.ctuet.edu.vn</li>
                <li>+8416992299889</li>
            </ul>
            <!-- /.contact-info -->
        </div>
        <!-- /.side-menu-widget -->
        <div class="side-menu-widget subscribe-widget">
            <div class="title-box">
                <h4>Subscribe for our Special Offers</h4>
                <span class="decor-line inline"></span>
            </div>
            <!-- /.title-box -->
            <form action="#" class="clearfix">
                <input type="text" placeholder="Enter email address" />
                <button type="submit" class="res-btn">Đăng ký</button>
            </form>
        </div>
    </section>
    <!-- /.side-menu -->


    <section class="top-bar dhomev">
        <div class="container">
            <div class="pull-left left-infos contact-infos">
                <ul class="list-inline">
                    <li>
                        <a href="#"><i class="fa fa-phone"></i> (+84) 16992 298 99</a>
                    </li>
                    <!-- comment for inline hack
                     -->
                    <li>
                        <a href="#"><i class="fa fa-map-marker"></i> 85A, Lý Tự Trọng, An Phú, Ninh Kiều, Cần Thơ</a>
                    </li>
                    <!-- comment for inline hack
                     -->
                    <li>
                        <a href="#"><i class="fa fa-envelope"></i>ndtuong.ktpm0114@student.ctuet.edu.vn</a>
                    </li>
                </ul>
            </div>
            <!-- /.pull-left left-infos -->

            <!-- /.pull-right right-infos link-list -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.top-bar -->

    <nav class="navbar navbar-default  _fixed-header _light-header stricky" id="main-navigation-wrapper">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand">
                    <img alt="Awesome Image" src="images/header/logo2.png">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="main-navigation">
                <ul class="nav navbar-nav ">
                    <li>
                        <a href="index.php?page=trangchu">TRANG CHỦ</a>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">GIỚI THIỆU <span class="glyphicon glyphicon-chevron-down"></span></a>
                        <ul class="dropdown-submenu dropdown-menu">
                            <li><a href="gioithieu.php?page=thongtin">THÔNG TIN</a></li>
                            <li><a href="baohanh.php?page=baohanh">CHÍNH SÁCH BẢO HÀNH</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="sanpham.php?page=sanpham">SẢN PHẨM</a>
                    </li>

<!--                    <li><a href="tintuc.php?page=tintuc">TIN TỨC</a></li>-->
                    <li>
                        <a href="lienhe.php?page=lienhe">Liên hệ</a>
                    </li>
                    <li>
                        <a href="hoidap.php?page=hoidap">Hỏi - Đáp</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav right-side-nav">
                    <li>
                        <a role="button" data-toggle="collapse" href="#sidebarCollapse" aria-expanded="false" aria-controls="sidebarCollapse"><span class="phone-only">Side Menu</span><i class="fa fa-bars"></i></a>
                    </li>
                </ul>
                <!-- /.nav navbar-right -->
                <form action="#" class="nav-search-form row">
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="Type here for search">
                        <span class="input-group-addon">
                			<button type="submit"><i class="icon icon-Search"></i></button>
                		</span>
                    </div>
                </form>
            </div>
        </div>
    </nav>