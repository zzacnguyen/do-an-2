<?php 
    include_once 'blocks/head.php';
    include_once 'dongho.php';
    $sql = new DongHo();
?>

<!-- Header  Inner style-->
<section class="row final-inner-header">
    <div class="container">
        <h2 class="this-title">Sản phẩm</h2>
    </div>
</section>
<section class="row final-breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="index.php">Trang chủ</a></li>
            <li class="active">Sản phẩm</li>
        </ol>
    </div>
</section>
<!-- Header  Slider style-->

<!-- About Resort style-->
<section class="container clearfix common-pad-inner about-info-box nasir-room-grid-header">

    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="sec-header3">
                <h2>Sản phẩm</h2>
                <h3>Chọn một sản phẩm phù hợp với sở thích và ngân sách của bạn</h3>
            </div>
        </div>
    </div>
</section>
<!-- About Resort style-->


<section class="row nasir-room-grid">
    <div class="container">
        <div class="row">
            <?php
            $sql = $sql->get_list("SELECT * FROM `sanpham`");
            foreach($sql as $row){
                echo '<div class="col-sm-4 nroom-grid">
				<a href="chitietsp.php?id='.$row['SP_ID'].'" class="room-img"><img src="images/sanpham/'.$row['SP_HINH'].'" alt="" width="370px" height="222px"></a>
				<div class="row this-conts">
					<div class="media">
						<div class="media-body this-title">'.$row['SP_TENSP'].'</div>
						<div class="media-right">
				'.number_format($row['SP_GIA']).'đ<small> sản phẩm</small>
						</div>
					</div>
					<p>'.$row['SP_GIOITHIEU'].'</p>
					<a href="chitietsp.php?id='.$row['SP_ID'].'" class="read-more">Chi tiết<i class="fa fa-arrow-right"></i></a>
				</div>
			</div>	';
            }
            ?>
        </div>
    </div>
</section>

<!-- Welcome banner  style-->
<?php 
    include_once 'blocks/foot.php';
?>
