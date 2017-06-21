<?php 
    include_once 'blocks/head.php';
    include_once 'dongho.php';
    $sql = new DongHo();
?>
<!-- Header  Slider style-->

<div id="minimal-bootstrap-carousel" class="carousel default-home-slider slide carousel-fade shop-slider" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

        <div class="item active slide-1" style="background-image: url(images/slider/12.jpg);backgroudn-position: center right;">

            <div class="carousel-caption nhs-caption nhs-caption7">
                <div class="thm-container">
                    <div class="box valign-middle">
                        <div class="content text-left pull-left">
                            <h2 data-animation="animated fadeInUp" class="this-title">TITANIUM</h2>
                            <p data-animation="animated fadeInDown">
                                Đơn vị phân phối đồng hồ sang trọng hàng đầu Việt Nam. Chuyên cung cấp đồng hồ Rolex uy tín nhất.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="item  slide-2" style="background-image: url(images/slider/11.jpg);backgroudn-position: center right;">

            <div class="carousel-caption nhs-caption nhs-caption7">
                <div class="thm-container">
                    <div class="box valign-middle">
                        <div class="content text-left pull-left">
                            <h2 data-animation="animated fadeInUp" class="this-title">Trải nghiệm những dịch vụ tuyệt vời</h2>
                            <p data-animation="animated fadeInDown">
                                Đến với chúng tôi bạn sẽ nhận được những dịch vụ hậu mãi hấp dẫn. Chúng tôi sẽ làm mọi thứ để làm cho bạn trở nên sang trọng và hiện đại nhất.
                            </p>
                            <a data-animation="animated fadeInLeft" href="sanpham.php?page=sanpham" class="nhs-btn3">Chi tiết</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="item  slide-3" style="background-image: url(images/slider/10.jpg);backgroudn-position: center right;">

            <div class="carousel-caption nhs-caption nhs-caption6">
                <div class="thm-container">
                    <div class="box valign-middle">
                        <div class="content text-center">
                            <h2 data-animation="animated fadeInUp" class="this-title"></h2>
                            <p data-animation="animated fadeInDown">
                            </p>
                            <!--                                 <a data-animation="animated fadeInLeft" href="#" class="nhs-btn3">Xem thêm</a> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="prev">
        <i class="fa fa-angle-left"></i>
        <span class="sr-only">Quay lại</span>
    </a>
    <a class="right carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="next">
        <i class="fa fa-angle-right"></i>
        <span class="sr-only">Kế tiếp</span>
    </a>
</div>
<!-- Header  Slider style-->


<!-- Rooms And Suits style-->
<section class="container clearfix common-pad nasir-style">
    <div class="sec-header sec-header-pad">
        <h2>Sản phẩm của cửa hàng</h2>
        <h3>Xem thông tin sản phẩm phù hợp với sở thích và ngân sách của bạn</h3>
    </div>
    <div class="room-slider">
        <div class="roomsuite-slider-two">

            <?php 
                $sql = $sql->get_list("SELECT * FROM `sanpham`");
                foreach($sql as $row){
                    echo '<div class="room-suite room-suite-htwo">
                <div class="item">
                    <div class="ro-img"><img src="images/sanpham/'.$row['SP_HINH'].'" class="img-responsive" alt="" width="270px" height="161px"></div>
                    <div class="ro-txt">
                        <h2>'.$row['SP_TENSP'].'</h2>
                        <p>'.$row['SP_GIOITHIEU'].'</p>
                        <div class="ro-text-two">
                            <div class="left-p-two pull-left"><a href="chitietsp.php?id='.$row['SP_ID'].'" class="res-btn">Xem thêm</a></div>
                        </div>

                    </div>
                </div>
            </div>';
                }
            ?>
        </div>
    </div>
</section>


<div class="resot-activities clearfix">

    <div class="container clearfix common-pad">
        <div class="row">

            <div class="col-lg-6 col-md-6 activities-cont">

                <div class="sec-header3">
                    <h2>Các dịch vụ của công ty</h2>
                    <h3>Công ty cung cấp các dịch vụ kèm theo khi mua sản phẩm</h3>
                </div>
                <p>Công ty cung cấp dịch vụ bảo hành sản phẩm, thay pin và bao gồm các dịch vụ khác khi khách hàng mua bất kì một sản phẩm của công ty</p>

                <a href="lienhe.php?page=lienhe" class="res-btn">Liên hệ<i class="fa fa-arrow-right"></i></a>

            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="row nasir-welboxes">

                    <div class="single_wel_cont col-sm-6">
                        <a class="wel-box" href="#">
                            <div class="icon-box"><img src="images/welcome/icon-3.png" alt="" /></div>
                            <h4>Thay pin</h4>
                            <div class="overlay transition3s">
                                <div class="icon_position_table">
                                    <div class="icon_container border_round">
                                        <h2>Thay pin miễn phí</h2>
                                        <p>Thay pin miễn phí suốt đời cho tất cả các đồng hồ được Titanium Watch phân phối! .
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="single_wel_cont col-sm-6">
                        <a class="wel-box" href="#">
                            <div class="icon-box"><img src="images/welcome/icon-1.png" alt="" /></div>
                            <h4>Uy tín hàng đầu</h4>
                            <div class="overlay transition3s">
                                <div class="icon_position_table">
                                    <div class="icon_container border_round">
                                        <h2>Uy tín</h2>
                                        <p>Chúng tôi tự tin đem đến cho bạn những chiếc đồng hồ tốt nhất cùng trải nghiệm tuyệt vời khi mua đồng hồ tại Titanium Watch.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="single_wel_cont col-sm-6">
                        <a class="wel-box" href="#">
                            <div class="icon-box"><img src="images/welcome/icon-2.png" alt="" /></div>
                            <h4>Hậu mãi hàng đầu</h4>
                            <div class="overlay transition3s">
                                <div class="icon_position_table">
                                    <div class="icon_container border_round">
                                        <h2>Hậu mãi</h2>
                                        <p>Chế độ bảo hành lên đến 5 năm cho tất cả đồng hồ chính hãng mua tại Titanium Watch</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="single_wel_cont col-sm-6">
                        <a class="wel-box" href="#">
                            <div class="icon-box"><img src="images/welcome/icon-4.png" alt="" /></div>
                            <h4>Đổi hàng miễn phí</h4>
                            <div class="overlay transition3s">
                                <div class="icon_position_table">
                                    <div class="icon_container border_round">
                                        <h2>Đổi hàng</h2>
                                        <p>Đồng hồ sai kích cỡ? Màu sắc không hợp với bạn? Đừng lo! Bạn có thể đổi hàng trong vòng 7 ngày.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
<!-- Our Offer style-->
<section class="our-offer-htwo clearfix">

    <div class="container clearfix common-pad">

        <div class="row">

            <div class="col-md-4 our-offer-left">
                <div class="sec-header3">
                    <h2>Thông tin ưu đãi</h2>
                    <h3>Công ty cung cấp các chương trình khuyến mãi cho khách hàng</h3>
                </div>
                <p>Đến với chúng tôi bạn sẽ được cung cấp các dịch vụ hiện đại</p>
                <p>Các ưu đãi dành cho bạn khi mua sản phẩm của chúng tôi. </p>

            </div>
            <div class="col-md-8 offer-right">

                <div class="offer-img-box1">
                    <div class="spa-offer">
                        <div class="img_holder">
                            <img src="images/our-resort/1.jpg" class="img-responsive" alt="">
                            <div class="overlay">
                                <div class="room-ad-cont">
                                    <h2><span>Vouncher   </span></h2>
                                    <h3>Vouncher 5%</h3>
                                    <p>Khi mua hàng tại cửa hàng sẽ nhận được vouncher mua hàng.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="offer-img-box2">
                    <div class="box1">
                        <div class="img_holder">

                            <img src="images/our-resort/2.jpg" class="img-responsive" alt="">
                            <div class="overlay">
                                <div class="text1">*áp dụng có điều kiện*</div>
                                <div class="offertext1">
                                    <p><span class="off-txt">Giảm giá 10%</span> <span class="winter-txt">Sự kiện<br></span>MÙA HÈ</p></div>

                                </div>

                            </div>
                        </div>

                        <div class="box2">

                            <div class="img_holder">

                                <img src="images/our-resort/3.jpg" class="img-responsive" alt="">
                                <div class="overlay">
                                    <p><span>Khách hàng thân thiết</span></p>
                                    <h2><span>Tặng quà hậu mãi khi mua hàng</span></h2>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- Testimonials & Our Events style-->
<div class="container clearfix common-pad">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="sec-header-two">
                <h2>Đánh giá của khách hàng</h2>
            </div>
            <div class="testimonials-wrapper">
                <div class="testimonial-sliders-two">
                    <div class="item">
                        <div class="test-cont">
                            <p>Vị trí: Nằm bên ngoài, dễ tìm.
                                <br> Cửa hàng có nhiều sản phẩm chất lượng, uy tín.
                                <br> Nhân viên: Thân thiện, ân cần.
                            </p>
                        </div>
                        <div class="test-bot">
                            <div class="tst-img"><img src="images/testimonials/1.png" alt="" class="img-responsive"></div>
                            <div class="client_name">
                                <h5><a href="testimonials.php">Thịnh mập - <span>Nescom Technology- Director</span></a></h5>
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="item">
                        <div class="test-cont">
                            <p>Dịch vụ tại Titanium Watch rất tốt. Có nhiều chương trình khuyến mãi, nhân viên ân cần, tận tụy</p>
                        </div>
                        <div class="test-bot">
                            <div class="tst-img"><img src="images/testimonials/2.png" alt="" class="img-responsive"></div>
                            <div class="client_name">
                                <h5><a href="testimonials.php">Huỳnh Dung - <span>Kỹ Thuật Phần Mềm</span></a></h5>
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="test-cont">
                            <p> Nhân viên phục vụ nhiệt tình nên tôi rất thích. Nhưng cửa hàng còn thiếu vài sản phẩm mà mình tìm chưa có</p>
                        </div>
                        <div class="test-bot">
                            <div class="tst-img"><img src="images/testimonials/3.png" alt="" class="img-responsive"></div>
                            <div class="client_name">
                                <h5><a href="testimonials.php">Tính Phan - <span>Nescom Technology- Director</span></a></h5>
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="item">
                        <div class="test-cont">
                            <p>Có đầy đủ dịch vụ. Nhân viên rất nhiệt tình</p>
                        </div>
                        <div class="test-bot">
                            <div class="tst-img"><img src="images/testimonials/4.png" alt="" class="img-responsive"></div>
                            <div class="client_name">
                                <h5><a href="testimonials.php">Thái Huy - <span>IT</span></a></h5>
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="test-cont">
                            <p>Mua đồng hồ tại cửa hàng rất yên tâm vì có độ tin cậy và uy tín cao, sản phẩm có bảo hành, đẹp và chất lượng</p>
                        </div>
                        <div class="test-bot">
                            <div class="tst-img"><img src="images/testimonials/5.png" alt="" class="img-responsive"></div>
                            <div class="client_name">
                                <h5><a href="testimonials.php">Tường Nguyễn - <span>Nescom Technology- Director</span></a></h5>
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>


        <div class="col-lg-6 col-md-6 event-wrapper">

            <div class="sec-header-two">
                <h2>Sự kiện sắp tới</h2>
            </div>

            <div class="our-event-t-wrapper">
                <div class="media">
                    <div class="media-left">
                        <div class="date-box">
                            <div class="date-inner">
                                <div class="date-c-inner">
                                    <p>25<span>Tháng 4</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="media-body">
                        <h2>Sinh nhật Titanium</h2>
                        <p>Nhân dịp kỉ niệm 5 năm thành lập, cửa hàng tặng vouncher 10% cho tất cả các đơn hàng..</p>
                    </div>
                </div>


                <div class="media">
                    <div class="media-left">
                        <div class="date-box">
                            <div class="date-inner">
                                <div class="date-c-inner">
                                    <p>30<span>Tháng 6</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="media-body">
                        <h2>Khuyến mãi hè</h2>
                        <p>Đang cập nhật.</p>
                    </div>
                </div>


                <div class="media media-last">
                    <div class="media-left">
                        <div class="date-box">
                            <div class="date-inner">
                                <div class="date-c-inner">
                                    <p>02<span>Tháng 9</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="media-body">
                        <h2>Đang cập nhật</h2>
                        <p>Đang cập nhật.</p>
                    </div>
                </div>


            </div>


        </div>
    </div>
</div>
<!-- Get in Touch & Drop a Message style   -->
<!-- Welcome banner  style-->
<?php include_once 'blocks/foot.php'; ?>