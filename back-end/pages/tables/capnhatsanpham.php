<?php
$sql = new DongHo();
$id = isset($_GET['id']) ? $_GET['id'] : '';
$query = $sql->get_row("SELECT * FROM `sanpham` WHERE `SP_ID` = " . $id);

if (isset($_POST['submit'])) {
    
    $tensp = isset($_POST['tensp']) ? $_POST['tensp'] : '';
    $giasp = isset($_POST['giasp']) ? $_POST['giasp'] : '';
    $gioithieusp = isset($_POST['gioithieusp']) ? $_POST['gioithieusp'] : '';
    
    $tenanh = $_FILES['hinhanh']['name'];
    if ($tenanh != null) {
        if ($_FILES['hinhanh']['type'] == "image/jpeg" || $_FILES['hinhanh']['type'] == "image/png" || $_FILES['hinhanh']['type'] == "image/gif") {
            $maxFileSize = 10 * 1000 * 1000; // 10 MB
            if ($_FILES['hinhanh']['size'] > $maxFileSize) {
                echo 'Kích thước hình ảnh không vượt quá 10mb';
            } else {
                $thuMucHinh = "../../../front-end/images/sanpham/" . $tenanh;
                move_uploaded_file($_FILES['hinhanh']['tmp_name'], $thuMucHinh);
                
                $url = $sql->get_row("SELECT `SP_HINH` from `sanpham` WHERE `SP_HINH`=" . $id);
                if ($url['SP_HINH'] != "") {
                    unlink("../../../front-end/images/sanpham/" . $url['SP_HINH']);
                }
                
                $sql = $sql->update('sanpham', array(
                    'SP_TENSP' => $tensp,
                    'SP_GIA' => $giasp,
                    'SP_GIOITHIEU' => $gioithieusp,
                    'SP_HINH' => $tenanh
                ), "`SP_ID` = " . $id);
                
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
        }
    } else {
        $sql = $sql->update('sanpham', array(
            'SP_TENSP' => $tensp,
            'SP_GIA' => $giasp,
            'SP_GIOITHIEU' => $gioithieusp
        ), "`SP_ID` = " . $id);
        
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
}

?>

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
							<label for="exampleInputEmail1">Tên sản phẩm</label> <input
								type="text" class="form-control" id="exampleInputEmail1"
								placeholder="Nhập tên" name="tensp"
								value="<?php echo $query['SP_TENSP'] ?>">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Giá</label> <input type="text"
								class="form-control" id="exampleInputEmail1"
								placeholder="Nhập giá" name="giasp"
								value="<?php echo $query['SP_GIA'] ?>">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Giới thiệu</label> <input
								type="text" class="form-control" id="exampleInputEmail1"
								placeholder="Nhập giới thiệu" name="gioithieusp"
								value="<?php echo $query['SP_GIOITHIEU'] ?>">
						</div>
						<div class="form-group">
							<label for="exampleInputFile">Chọn ảnh</label> <input type="file"
								id="exampleInputFile" name="hinhanh"> <span><img
								src="../../../front-end/images/sanpham/<?php echo $query['SP_HINH'] ?>"></span>

							<p class="help-block">Kích thước hình ảnh 370x222.</p>
						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" class="btn btn-primary" name="submit"
							value="Cập nhật sản phẩm">
					</div>
				</form>
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>