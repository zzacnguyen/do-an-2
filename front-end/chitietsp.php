<?php 
    include_once 'blocks/head.php';
    include_once 'dongho.php';
    $sql = new DongHo();
    $id = isset($_GET["id"])?$_GET["id"]:'';
    $row = $sql->get_row("SELECT * from `chitietsp` join `sanpham` on chitietsp.SP_ID = sanpham.SP_ID join `hinhanh` on chitietsp.HA_ID = hinhanh.HA_ID WHERE `CTSP_ID` = ".$id);
?>

<!-- Header  Inner style-->
<?php 
    echo '<section class="row final-inner-header">
    <div class="container">
        <h2 class="this-title">'.$row['SP_TENSP'].'</h2>
    </div>
</section>
<section class="row final-breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="sanpham.php">Sản phẩm</a></li>
            <li class="active">'.$row['SP_TENSP'].'</li>
        </ol>
    </div>
</section>'
?>
<!-- Header  Slider style-->

<!-- News style-->
<section class="container clearfix common-pad-inner">
    <div class="row">
        <div class="col-md-4 col-md-push-8">

            <div class="book-r-form">
                <div class="room-price">
                    <h6>Giá tham khảo</h6>
                    <p>
                        <?php echo number_format($row['SP_GIA'])?> VND<span>/ SP</span></p>
                </div>
                <div class="book-left-content input_form">
                    <form action="sendemail.php" method="post" id="contactForm">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 m0 col-xs-12">
                                <span>Tên của bạn</span>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Tên của bạn">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <span>Đánh giá của bạn</span>
                                <textarea class="form-control" rows="6" id="message" name="message" placeholder="Nội dung tin nhắn"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" class="res-btn">Gửi đánh giá</button>
                            </div>
                        </div>
                    </form>
                    <div id="success">
                        <p>Your message sent successfully.</p>
                    </div>
                    <div id="error">
                        <p>Something is wrong. Message cant be sent!</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8 col-md-pull-4">
            <div class="single-room-wrapper">
                <div class="room-slider-wrapper">
                    <div class="single-r-wrapper">
                        <div class="single-sl-room">
                            <div class="owl-itemm" data-hash="zero"><img src="images/sanpham/<?php echo $row['HA_HINH1'] ?>" height="456px" alt=""></div>
                            <div class="owl-itemm" data-hash="one"><img src="images/sanpham/<?php echo $row['HA_HINH2'] ?>" height="456px" alt=""></div>
                            <div class="owl-itemm" data-hash="two"><img src="images/sanpham/<?php echo $row['HA_HINH3'] ?>" height="456px" alt=""></div>
                            <div class="owl-itemm" data-hash="two"><img src="images/sanpham/<?php echo $row['HA_HINH4'] ?>" height="456px" alt=""></div>
                            <div class="owl-itemm" data-hash="two"><img src="images/sanpham/<?php echo $row['HA_HINH5'] ?>" height="456px" alt=""></div>
                        </div>

                        <a class="button secondary url" href="#zero"><img src="images/sanpham/<?php echo $row['HA_HINH1'] ?>" height="130px" alt=""></a>
                        <a class="button secondary url" href="#one"><img src="images/sanpham/<?php echo $row['HA_HINH2'] ?>" height="130px" alt=""></a>
                        <a class="button secondary url" href="#two"><img src="images/sanpham/<?php echo $row['HA_HINH3'] ?>" height="130px" alt=""></a>
                        <a class="button secondary url" href="#two"><img src="images/sanpham/<?php echo $row['HA_HINH4'] ?>" height="130px" alt=""></a>
                        <a class="button secondary url" href="#two"><img src="images/sanpham/<?php echo $row['HA_HINH5'] ?>" height="130px" alt=""></a>
                    </div>

                </div>
            </div>
        </div>

        <?php 
        echo '<div class="col-md-12 col-sm-12">
            <div class="single-room-wrapper">
                <!-- Mô tả sản phẩm-->
                <div class="room-fac-wrapper">
                    <!-- Description of Room style-->
                    <div class="room-dec-wrapper">
                        <h2>Mô tả</h2>
                        <p>'.$row['CTSP_MOTA'].'</p>
                    </div>
                    <!-- Mô tả sản phẩm -->

                </div>


                <!-- Room Overview style-->
                <div class="room-overview">
                    <h2>Thông tin chi tiết sản phẩm</h2>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-7"> </colgroup>
                            <tbody>
                                <tr>
                                    <th scope="row"> <code>Tình trạng:</code> </th>
                                    <td>'.$row['CTSP_TINHTRANG'].'</td>
                                </tr>
                                <tr>
                                    <th scope="row"> <code>Giới tính : </code> </th>
                                    <td>'.$row['CTSP_GIOITINH'].'</td>
                                </tr>
                                <tr>
                                    <th scope="row"> <code>Bộ sưu tập :</code> </th>
                                    <td>'.$row['CTSP_BOSUUTAP'].'</td>
                                </tr>
                                <tr>
                                    <th scope="row"> <code>Serial No :</code> </th>
                                    <td>'.$row['CTSP_SERIES'].'</td>
                                </tr>
                                <tr>
                                    <th scope="row"> <code>Kích thước :</code> </th>
                                    <td>'.$row['CTSP_KICHTHUOC'].'</td>
                                </tr>
                                <tr>
                                    <th scope="row"> <code>Chất liệu thân đồng hồ :</code> </th>
                                    <td>'.$row['CTSP_CHATLIEU'].'</td>
                                </tr>
                                <tr>
                                    <th scope="row"> <code>Chất liệu khung :</code> </th>
                                    <td>'.$row['CTSP_KHUNG'].'</td>
                                </tr>
                                <tr>
                                    <th scope="row"> <code>Chức năng hiển thị  :</code> </th>
                                    <td>'.$row['CTSP_CHUCNANGHIENTHI'].'</td>
                                </tr>
                                <tr>
                                    <th scope="row"> <code>Loại máy  :</code> </th>
                                    <td>'.$row['CTSP_LOAIMAY'].'</td>
                                </tr>
                                <tr>
                                    <th scope="row"> <code>Loại dây đeo  :</code> </th>
                                    <td>'.$row['CTSP_LOAIDAYDEO'].'</td>
                                </tr>
                                <tr>
                                    <th scope="row"> <code>Mặt quay số  :</code> </th>
                                    <td>'.$row['CTSP_MATQUAYSO'].'</td>
                                </tr>
                                <tr>
                                    <th scope="row"> <code>Khả năng chống nước  :</code> </th>
                                    <td>'.$row['CTSP_CHONGNUOC'].'</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

                <!-- Room Overview style-->
s
            </div>
        </div>';
        ?>


    </div>
</section>

<!-- News style-->

<!-- Welcome banner  style-->
<?php 
    include_once 'blocks/foot.php';
?>
