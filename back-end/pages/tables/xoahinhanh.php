<?php
$sql = new DongHo();
$maxFileSize = 10 * 1000 * 1000; // 10Mb
$id = isset($_GET['id']) ? $_GET['id'] : '';
$query = $sql->get_row("SELECT * FROM `hinhanh` WHERE `HA_ID` = " . $id);

if (isset($_POST['submit'])) {
    $query = $sql->remove('hinhanh', "`HA_ID` = " . $id);
    if ($query) {
        echo '<script>
                alert("Xóa thành công");
            </script>';
    }
}
?>

<section class="content-header">
	<h1>
		Xóa hình ảnh sản phẩm <small></small>
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