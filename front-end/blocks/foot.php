<?php 
    include_once "dbConnect.php";
    
    if(isset($_POST['dangky'])){
        $email = isset($_POST['email'])?$_POST['email']:'';
        
        if(!empty($email)){
            $query = mysqli_query($connect, "INSERT INTO `nhanemail`(`EMAIL_TEN`) VALUES ('$email')");
            
            if (isset($query)){
                echo '<script>
                    alert("Thêm thành công");
                </script>';
            } else {
                echo '<script>
                    alert("Thêm thất bại");
                </script>';
            }
        } else {
             echo '<script>alert("Vui lòng nhập email");</script>';
         }
    }
?>

<div class="nasir-subscribe-form-row row">
        <div class="container">
            <div class="row this-dashed">
                <div class="this-texts">
                    <h2>Nhận thông tin từ chúng tôi</h2>
                    <h3>Bạn muốn biết thêm về những sự kiện sắp tới, hãy để lại email</h3>
                </div>
                <form class="this-form input-group" action="#" method="post">
                    <input type="email" class="form-control" name="email" placeholder="Nhập email của bạn....">
                    <span class="input-group-addon">
                    <input type="submit" class="res-btn" name="dangky" value="Đăng ký">
                </span>
                </form>
            </div>
        </div>
    </div>

<!-- Welcome banner  style-->

<!-- footer  style-->

<footer>
    <section class="clearfix footer-wrapper">
        <section class="container clearfix footer-pad">

            <div class="widget about-us-widget col-md-4 col-sm-6">
                <a href="index.php"><img src="images/header/logo2.png" alt="" class="img-responsive"></a>

                <p>Làm cuộc sống trở nên đáng sống hơn</p>
                <a href="gioithieu.php">Đọc thêm <i class="fa fa-angle-double-right"></i></a>
                <ul class="nav">
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                </ul>

            </div>


            <div class="widget widget-links col-md-2 col-sm-6">
                <h4 class="widget_title">Khám phá</h4>
                <div class="widget-contact-list">
                    <ul>
                        <li><a href="baohanh.php">Chính sách bảo hành</a></li>
                        <li><a href="tintuc.php">Tin tức</a></li>

                    </ul>
                </div>
            </div>
            <div class="widget widget-links col-md-2 col-sm-6">
                <h4 class="widget_title">Danh mục</h4>


                <div class="widget-contact-list">
                    <ul>
                        <li><a href="index.php">Trang chủ</a></li>
                        <li><a href="aboutus.php">Thông tin</a></li>
                        <li><a href="sanpham.php">Sản phẩm</a></li>
                        <li><a href="hoidap.php">Hỏi - Đáp</a></li>
                        <li><a href="../login.php">Quản trị</a></li>
                    </ul>
                </div>
            </div>
            <div class="widget get-in-touch col-md-4 col-sm-6">
                <h4 class="widget_title">Liên hệ</h4>
                <div class="widget-contact-list">
                    <ul>
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <div class="fleft location_address">
                                <b>Titanium Watch</b>
                                <br>85A, Lý Tự Trọng, An Phú, Ninh Kiều, Cần Thơ
                            </div>

                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                            <div class="fleft contact_no">
                                (+84) 16992 998 89 / (+84) 12244 822 34
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-envelope-o"></i>
                            <div class="fleft contact_mail">
                                ndtuong.ktpm0114@student.ctuet.edu.vn
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </section>
    </section>
    <section class="container clearfix footer-b-pad">
        <div class="footer-copy">
            <div class="pull-left fo-txt">
                <p>Copyright © Watch 2017. Desgin by T.H . </p>
            </div>
        </div>
    </section>
</footer>

<!-- footer  style-->

<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.js"></script>
<!-- owl carousel  -->
<script src="vendors/owlcarousel/owl.carousel.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/zebra_datepicker.js"></script>
<!-- jQuery appear -->
<script src="vendors/jquery-appear/jquery.appear.js"></script>
<!-- jQuery countTo -->
<script src="vendors/jquery-countTo/jquery.countTo.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/contact.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="vendors/jquery-ui-1.11.4/jquery-ui.min.js"></script>
<script src="js/custom.js"></script>

</body>

</html>
