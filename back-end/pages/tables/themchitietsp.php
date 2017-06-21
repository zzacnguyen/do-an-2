<?php
$sql = new DongHo(); // m bam nut them chi tiet di
$hinhanh = new DongHo();
$sanpham = new DongHo();

if (isset($_POST['submit'])) {
    $tensp = isset($_POST['tensp']) ? $_POST['tensp'] : '';
    $mahinh = isset($_POST['mahinh']) ? $_POST['mahinh'] : '';
    $tinhtrang = isset($_POST['tinhtrang']) ? $_POST['tinhtrang'] : '';
    $bosuutap = isset($_POST['bosuutap']) ? $_POST['bosuutap'] : '';
    $series = isset($_POST['series']) ? $_POST['series'] : '';
    $kichthuoc = isset($_POST['kichthuoc']) ? $_POST['kichthuoc'] : '';
    $chatlieu = isset($_POST['chatlieu']) ? $_POST['chatlieu'] : '';
    $khung = isset($_POST['khung']) ? $_POST['khung'] : '';
    $loaimay = isset($_POST['loaimay']) ? $_POST['loaimay'] : '';
    $loaidaydeo = isset($_POST['loaidaydeo']) ? $_POST['loaidaydeo'] : '';
    $matquayso = isset($_POST['matquayso']) ? $_POST['matquayso'] : '';
    $chongnuoc = isset($_POST['chongnuoc']) ? $_POST['chongnuoc'] : '';
    $gioitinh = isset($_POST['gioitinh']) ? $_POST['gioitinh'] : '';
    $hienthi = isset($_POST['hienthi']) ? $_POST['hienthi'] : '';
    $mota = isset($_POST['mota']) ? $_POST['mota'] : '';
    
    if (! empty($tensp) && ! empty($mahinh) && ! empty($tinhtrang) && ! empty($bosuutap) && ! empty($series) && ! empty($kichthuoc) && ! empty($chatlieu) && ! empty($khung) && ! empty($loaimay) && ! empty($loaidaydeo) && ! empty($matquayso) && ! empty($chongnuoc) && ! empty($gioitinh) && ! empty($hienthi) && ! empty($mota)) {
        $sql = $sql->insert('chitietsp', array(
            'SP_ID' => '' . $tensp,
            'HA_ID' => '' . $mahinh,
            'CTSP_TINHTRANG' => '' . $tinhtrang,
            'CTSP_BOSUUTAP' => '' . $bosuutap,
            'CTSP_SERIES' => '' . $series,
            'CTSP_KICHTHUOC' => '' . $kichthuoc,
            'CTSP_CHATLIEU' => '' . $chatlieu,
            'CTSP_KHUNG' => '' . $khung,
            'CTSP_LOAIMAY' => '' . $loaimay,
            'CTSP_LOAIDAYDEO' => '' . $loaidaydeo,
            'CTSP_MATQUAYSO' => '' . $matquayso,
            'CTSP_CHONGNUOC' => '' . $chongnuoc,
            'CTSP_GIOITINH' => '' . $gioitinh,
            'CTSP_CHUCNANGHIENTHI' => '' . $hienthi,
            'CTSP_MOTA' => '' . $mota
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

<section class="content-header">
	<h1>
		Thêm chi tiết sản phẩm <small></small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
		<li><a href="#">Sản phẩm</a></li>
		<li class="active">Nhập chi tiết sản phẩm</li>
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
                        <?php
                        $sanpham = $sanpham->get_list("SELECT * from `sanpham`");
                        ?>
                        <div class="form-group">
							<label>Tên sản phẩm</label> <select class="form-control"
								name="tensp">
                               <?php
                            foreach ($sanpham as $row) {
                                echo '<option value="' . $row['SP_ID'] . '">' . $row['SP_TENSP'] . '</option>';
                            }
                            ?>  
                            </select>
						</div>
						<div class="form-group">
							<label>Mã hình</label> <select class="form-control" name="mahinh">
                               <?php
                            $hinhanh = $hinhanh->get_list("SELECT * FROM `hinhanh`");
                            foreach ($hinhanh as $row1) {
                                echo '<option value="' . $row1['HA_ID'] . '">' . $row1['HA_HINH1'] . '</option>';
                            }
                            ?>  
                            </select>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Tình trạng</label> <input
								type="text" class="form-control" id="exampleInputEmail1"
								placeholder="Tình trạng" name="tinhtrang">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Bộ sưu tập</label> <input
								type="text" class="form-control" id="exampleInputEmail1"
								placeholder="Bộ sưu tập" name="bosuutap">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Series</label> <input type="text"
								class="form-control" id="exampleInputEmail1"
								placeholder="Nhập series" name="series">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Kích thước</label> <input
								type="text" class="form-control" id="exampleInputEmail1"
								placeholder="Nhập kích thước" name="kichthuoc">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Chất liệu</label> <input
								type="text" class="form-control" id="exampleInputEmail1"
								placeholder="Nhập chất liệu" name="chatlieu">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Khung</label> <input type="text"
								class="form-control" id="exampleInputEmail1"
								placeholder="Nhập loại khung" name="khung">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Loại máy</label> <input
								type="text" class="form-control" id="exampleInputEmail1"
								placeholder="Nhập loại máy" name="loaimay">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Loại dây đeo</label> <input
								type="text" class="form-control" id="exampleInputEmail1"
								placeholder="Nhập loại dây đeo" name="loaidaydeo">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Mặt quay số</label> <input
								type="text" class="form-control" id="exampleInputEmail1"
								placeholder="Nhập mặt quay số" name="matquayso">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Chống nước</label> <input
								type="text" class="form-control" id="exampleInputEmail1"
								placeholder="Chống nước" name="chongnuoc">
						</div>
						<div class="form-group">
							<label>Giới tính</label> <select class="form-control"
								name="gioitinh">
								<option value="Nam">Nam</option>
								<option value="Nữ">Nữ</option>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Chức năng hiển thị</label> <input
								type="text" class="form-control" id="exampleInputEmail1"
								placeholder="Nhập chức năng hiển thị" name="hienthi">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Mô tả</label> <input type="text"
								class="form-control" id="exampleInputEmail1"
								placeholder="Nhập mô tả cho sản phẩm" name="mota">
						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" class="btn btn-primary" value="Thêm chi tiết"
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
