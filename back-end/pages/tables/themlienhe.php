<?php
$sql = new DongHo();
if (isset($_POST['submit'])) {
    $hoten = $_POST['hoten'];
    $email = $_POST['email'];
    $tieude = $_POST['tieude'];
    $noidung = $_POST['noidung'];
    
    if (! empty($hoten) && ! empty($email) && ! empty($tieude) && ! empty($noidung)) {
        $sql = $sql->insert('lienhe', array(
            'LH_TEN' => '' . $hoten,
            'LH_EMAIL' => '' . $email,
            'LH_TIEUDE' => '' . $tieude,
            'LH_NOIDUNG' => '' . $noidung
        ));
        
        if (isset($sql)) {
            echo '<script>
                    alert("Thêm thành công");
                </script>';
        } else {
            echo '<script>
                    alert("Thêm thất bại");
                </script>';
        }
    } else {
        echo '<script>
                    alert("Dữ liệu không được để trống");
                </script>';
    }
}
?>
<!--tensp, mahinh, tinh trang, bosuutap, series, kichthuoc
chatlieu,khung, loaimay, loaidaydeo, matquayso, chongnuoc, gioitinh, hienthi, mota-->
<section class="content-header">
	<h1>
		Tên loại sản phẩm <small></small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
		<li><a href="#">Sản phẩm</a></li>
		<li class="active">Nhập sản phẩm</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title"></h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" action="#" method="post"
					enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Họ và tên</label> <input
								type="text" class="form-control" id="exampleInputEmail1"
								placeholder="Nhập họ tên" name="hoten">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Email</label> <input type="text"
								class="form-control" id="exampleInputEmail1"
								placeholder="Nhập email" name="email">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Tiêu đề</label> <input
								type="text" class="form-control" id="exampleInputEmail1"
								placeholder="Nhập tiêu đề" name="tieude">
						</div>
						<div class="form-group">
							<label>Nội dung</label>
							<textarea class="form-control" rows="3"
								placeholder="Nhập nội dung ..." name="noidung"></textarea>
						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" class="btn btn-primary" value="Thêm liên hệ"
							name="submit">
					</div>
				</form>
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
