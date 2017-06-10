<?php 
    include_once 'blocks/head.php';
    include_once 'dongho.php';
    $sql = new DongHo();
    if(isset($_POST['submit'])){
        $hoten = isset($_POST['hoten'])?$_POST['hoten']:'';
        $email = isset($_POST['email'])?$_POST['email']:'';
        $tieude = isset($_POST['tieude'])?$_POST['tieude']:'';
        $noidung = isset($_POST['noidung'])?$_POST['noidung']:'';
        
        if(!empty($email) && !empty($noidung)){
            $sql = $sql->insert('lienhe', array('LH_TEN' =>''.$hoten, 'LH_EMAIL' =>''.$email, 'LH_TIEUDE'=>''.$tieude, 'LH_NOIDUNG'=>''.$noidung));
                                
            if (isset($sql)){
                echo '<script>
                    alert("Thêm thành công");
                </script>';
            } else {
                echo '<script>
                    alert("Thêm thất bại");
                </script>';
            }
                                
        } else {
           echo '<script>alert("Vui lòng nhập email và nội dung");</script>'; 
        }
                                
    }
?>
    <!-- Header  Inner style-->
    <section class="row final-inner-header">
        <div class="container">
            <h2 class="this-title">Liên hệ</h2>
        </div>
    </section>
    <section class="row final-breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="index.html">Trang chủ</a></li>
                <li class="active">Liên hệ</li>
            </ol>
        </div>
    </section>
    <!-- Header  Slider style-->


    <!-- Booking style-->
    <section class="container clearfix common-pad booknow">
        <div class="sec-header">
            <h2>Gửi 1 tin nhắn</h2>
            <h3>Liên hệ với chúng tôi để được hỗ trận tốt nhất</h3>
        </div>

        <div class="row nasir-contact">
            <div class="col-md-8">

                <div class="book-left-content input_form">
                    <form action="#" method="post" id="contactForm">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                                <span>Tên của bạn</span>
                                <input type="text" class="form-control" id="name" name="hoten" placeholder="Tên của bạn">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                                <span>Email của bạn</span>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email của bạn">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <span>Tiêu đề</span>
                                <input type="text" class="form-control" id="subject" name="tieude" placeholder="Tiêu đề">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <span>Nội dung tin nhắn</span>
                                <textarea class="form-control" rows="6" id="message" name="noidung" placeholder="Nội dung tin nhắn"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <input type="submit" class="res-btn" name="submit" value="Gửi ngay">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">

                <div class="contact-info">

                    <h2>Thông tin liên hệ</h2>

                    <div class="media-contact clearfix">
                        <div class="media-contact-icon">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="media-contact-info">
                            <p>T.H 85A, Lý Tự Trọng, An Phú, Ninh Kiều, Cần Thơ</p>
                        </div>
                    </div>
                    <div class="media-contact clearfix">
                        <div class="media-contact-icon">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </div>
                        <div class="media-contact-info">
                            <p>
                                <a href="mailto:Info@Resorthotel.Com">ndtuong.ktpm0114@student.ctuet.edu.vn</a>
                                <br>
                                <a href="mailto:support@Resorthotel.Com">support@ttth.com</a>
                            </p>
                        </div>
                    </div>

                    <div class="media-contact clearfix">
                        <div class="media-contact-icon">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                        </div>
                        <div class="media-contact-info">
                            <p>Thứ hai đến thứ sáu: 8.00am đến 5.00 pm
                                <br> Thứ bảy: 8.00am đến 3.00 pm
                                <br> Chủ nhật: <span>Không làm việc</span>

                            </p>
                        </div>
                    </div>

                    <div class="media-contact clearfix">
                        <div class="media-contact-icon">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="media-contact-info">
                            <p>
                                <a href="#"><i>+84 1224482234</i></a>
                                <br>
                                <a href="#"><i>+84 1699229889</i></a>
                            </p>
                        </div>
                    </div>

                </div>



            </div>

        </div>

    </section>

    <!-- Booking style-->



    <!-- TT-CONTACT-MAP -->





    <!-- Welcome banner  style-->
<?php 
    include_once 'blocks/foot.php';
?>