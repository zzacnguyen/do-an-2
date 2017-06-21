<?php
$sql = new DongHo();
$maxFileSize = 10 * 1000 * 1000; // 10Mb
$id = isset($_GET['id']) ? $_GET['id'] : '';
$query = $sql->get_row("SELECT * FROM `hinhanh` WHERE `HA_ID` = " . $id);

if (isset($_POST['submit'])) {
    
    $tenanh1 = $_FILES['hinhanh1']['name'];
    $tenanh2 = $_FILES['hinhanh2']['name'];
    $tenanh3 = $_FILES['hinhanh3']['name'];
    $tenanh4 = $_FILES['hinhanh4']['name'];
    $tenanh5 = $_FILES['hinhanh5']['name'];
    
    if ($tenanh1 != null || $tenanh2 != null || $tenanh3 != null || $tenanh4 != null || $tenanh5 != null) {
        if ($_FILES['hinhanh1']['type'] == "image/jpeg" || $_FILES['hinhanh1']['type'] == "image/png" || $_FILES['hinhanh1']['type'] == "image/gif" || $_FILES['hinhanh2']['type'] == "image/jpeg" || $_FILES['hinhanh2']['type'] == "image/png" || $_FILES['hinhanh2']['type'] == "image/gif" || $_FILES['hinhanh3']['type'] == "image/jpeg" || $_FILES['hinhanh3']['type'] == "image/png" || $_FILES['hinhanh3']['type'] == "image/gif" || $_FILES['hinhanh4']['type'] == "image/jpeg" || $_FILES['hinhanh4']['type'] == "image/png" || $_FILES['hinhanh4']['type'] == "image/gif" || $_FILES['hinhanh5']['type'] == "image/jpeg" || $_FILES['hinhanh5']['type'] == "image/png" || $_FILES['hinhanh5']['type'] == "image/gif") {
            
            $thuMucHinh1 = "../../../front-end/images/sanpham/" . $tenanh1;
            move_uploaded_file($_FILES['hinhanh1']['tmp_name'], $thuMucHinh1); // Hinh 1
            
            $thuMucHinh2 = "../../../front-end/images/sanpham/" . $tenanh2;
            move_uploaded_file($_FILES['hinhanh2']['tmp_name'], $thuMucHinh2); // Hinh 2
            
            $thuMucHinh3 = "../../../front-end/images/sanpham/" . $tenanh3;
            move_uploaded_file($_FILES['hinhanh3']['tmp_name'], $thuMucHinh3); // Hinh 3
            
            $thuMucHinh4 = "../../../front-end/images/sanpham/" . $tenanh4;
            move_uploaded_file($_FILES['hinhanh4']['tmp_name'], $thuMucHinh4); // Hinh 4
            
            $thuMucHinh5 = "../../../front-end/images/sanpham/" . $tenanh5;
            move_uploaded_file($_FILES['hinhanh5']['tmp_name'], $thuMucHinh5); // Hinh 5
            
            $sql = $sql->update('hinhanh', array(
                'HA_HINH1' => $tenanh1,
                'HA_HINH2' => $tenanh2,
                'HA_HINH3' => $tenanh3,
                'HA_HINH4' => $tenanh4,
                'HA_HINH5' => $tenanh5
            ), "`HA_ID` = " . $id);
            
            if (isset($sql)) {
                echo '<script>
                alert("Sửa thành công");
                </script>';
            } else {
                echo '<script>
                alert("Sửa thất bại");
                </script>';
            }
        }
    } else {
        echo '<script>alert("Thông tin nhập vào không được bỏ trống");</script>';
    }
}
?>

<section class="content-header">
	<h1>
		Cập nhật hình ảnh sản phẩm <small></small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
		<li class="active">Cập nhật hình ảnh sản phẩm</li>
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
							<label for="exampleInputFile">Ảnh 1</label> <input type="file"
								id="exampleInputFile" name="hinhanh1"> <span><img
								src="../../../front-end/images/sanpham/<?php echo $query['HA_HINH1'] ?>"
								height="161px" width="160px"></span>
						</div>

						<div class="form-group">
							<label for="exampleInputFile">Ảnh 2</label> <input type="file"
								id="exampleInputFile" name="hinhanh2"> <span><img
								src="../../../front-end/images/sanpham/<?php echo $query['HA_HINH2'] ?>"
								height="161px" width="160px"></span>
						</div>

						<div class="form-group">
							<label for="exampleInputFile">Ảnh 3</label> <input type="file"
								id="exampleInputFile" name="hinhanh3"> <span><img
								src="../../../front-end/images/sanpham/<?php echo $query['HA_HINH3'] ?>"
								height="161px" width="160px"></span>
						</div>

						<div class="form-group">
							<label for="exampleInputFile">Ảnh 4</label> <input type="file"
								id="exampleInputFile" name="hinhanh4"> <span><img
								src="../../../front-end/images/sanpham/<?php echo $query['HA_HINH4'] ?>"
								height="161px" width="160px"></span>
						</div>

						<div class="form-group">
							<label for="exampleInputFile">Ảnh 5</label> <input type="file"
								id="exampleInputFile" name="hinhanh5"> <span><img
								src="../../../front-end/images/sanpham/<?php echo $query['HA_HINH5'] ?>"
								height="161px" width="160px"></span>
						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" class="btn btn-primary" value="Xóa ảnh"
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