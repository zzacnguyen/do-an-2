<?php 
    $sql = new DongHo();
    $hinhanh = new DongHo();
    $sanpham = new DongHo();

    $id = isset($_GET['id'])?$_GET['id']:'';
    $query = $sql->get_row("SELECT * FROM `chitietsp` WHERE `CTSP_ID` =".$id);
    $sanpham = $sanpham->get_list("SELECT * from `sanpham`");      
    
    if(isset($_POST['submit'])){
        
    $tensp = isset($_POST['tensp'])?$_POST['tensp']:'';
    $mahinh = isset($_POST['mahinh'])?$_POST['mahinh']:'';
    $tinhtrang = isset($_POST['tinhtrang'])?$_POST['tinhtrang']:'';
    $bosuutap = isset($_POST['bosuutap'])?$_POST['bosuutap']:'';
    $series = isset($_POST['series'])?$_POST['series']:'';
    $kichthuoc = isset($_POST['kichthuoc'])?$_POST['kichthuoc']:'';
    $chatlieu = isset($_POST['chatlieu'])?$_POST['chatlieu']:'';
    $khung = isset($_POST['khung'])?$_POST['khung']:'';
    $loaimay = isset($_POST['loaimay'])?$_POST['loaimay']:'';
    $loaidaydeo = isset($_POST['loaidaydeo'])?$_POST['loaidaydeo']:'';
    $matquayso = isset($_POST['matquayso'])?$_POST['matquayso']:'';
    $chongnuoc = isset($_POST['chongnuoc'])?$_POST['chongnuoc']:'';
    $gioitinh = isset($_POST['gioitinh'])?$_POST['gioitinh']:'';
    $hienthi = isset($_POST['hienthi'])?$_POST['hienthi']:'';
    $mota = isset($_POST['mota'])?$_POST['mota']:'';

    if(!empty($tensp) && !empty($mahinh) && !empty($tinhtrang) && !empty($bosuutap) && !empty($series) && !empty($kichthuoc) && !empty($chatlieu) && !empty($khung) && !empty($loaimay) && !empty($loaidaydeo) && !empty($matquayso) && !empty($chongnuoc) && !empty($gioitinh) && !empty($hienthi) && !empty($mota)){
        $sql = $sql->update('chitietsp', array('SP_ID' =>$tensp, 'HA_ID' =>$mahinh, 'CTSP_TINHTRANG' =>$tinhtrang, 'CTSP_BOSUUTAP' =>$bosuutap, 'CTSP_SERIES' =>$series, 'CTSP_KICHTHUOC' =>$kichthuoc, 'CTSP_CHATLIEU' =>$chatlieu, 'CTSP_KHUNG' =>$khung, 'CTSP_LOAIMAY' =>$loaimay, 'CTSP_LOAIDAYDEO' =>$loaidaydeo, 'CTSP_MATQUAYSO' =>$matquayso, 'CTSP_CHONGNUOC' =>$chongnuoc, 'CTSP_GIOITINH' =>$gioitinh, 'CTSP_CHUCNANGHIENTHI' =>$hienthi, 'CTSP_MOTA' =>$mota), "`CTSP_ID` =".$id);
        
        if (isset($sql)){
                echo '<script>
                    alert("Thêm thành công");
                </script>';
            } else {
                echo '<script>
                    alert("Thêm thất bại");
                </script>';
            }  
    }
    
    }
?>

<section class="content-header">
    <h1>
        Tên loại sản phẩm
        <small></small>
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
                <form role="form" action="#" method="post" enctype="multipart/form-data">
                    <div class="box-body">

                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <select class="form-control" name="tensp">
                               <?php 
                                foreach($sanpham as $row){
                                    if($query['CTSP_ID'] == $row['SP_ID']){
                                        echo '<option value="'.$row['SP_ID'].'">'.$row['SP_TENSP'].'</option>';
                                        break;
                                    }    
                                }
                                ?>  
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Mã hình</label>
                            <select class="form-control" name="mahinh">
                               <?php 
                                $hinhanh = $hinhanh->get_list("SELECT * FROM `hinhanh`");
                                foreach($hinhanh as $row1){
                                    if($query['HA_ID'] == $row1['HA_ID']){
                                         echo '<option value="'.$row1['HA_ID'].'">'.$row1['HA_HINH1'].'</option>';
                                        break;
                                    }
                                }
                                ?>  
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tình trạng</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tình trạng" name="tinhtrang" value="<?php echo $query['CTSP_TINHTRANG'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Bộ sưu tập</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Bộ sưu tập" name="bosuutap" value="<?php echo $query['CTSP_BOSUUTAP'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Series</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập series" name="series" value="<?php echo $query['CTSP_SERIES'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kích thước</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập kích thước" name="kichthuoc" value="<?php echo $query['CTSP_KICHTHUOC'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Chất liệu</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập chất liệu" name="chatlieu" value="<?php echo $query['CTSP_CHATLIEU'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Khung</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập loại khung" name="khung" value="<?php echo $query['CTSP_KHUNG'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Loại máy</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập loại máy" name="loaimay" value="<?php echo $query['CTSP_LOAIMAY'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Loại dây đeo</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập loại dây đeo" name="loaidaydeo" value="<?php echo $query['CTSP_LOAIDAYDEO'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mặt quay số</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập mặt quay số" name="matquayso" value="<?php echo $query['CTSP_MATQUAYSO'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Chống nước</label>
                            <select class="form-control" name="chongnuoc">
                    <option><?php echo $query['CTSP_CHONGNUOC']?></option>

                  </select>
                        </div>
                        <div class="form-group">
                            <label>Giới tính</label>
                            <select class="form-control" name="gioitinh">
                    <option><?php echo $query['CTSP_GIOITINH']?></option>
                  </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Chức năng hiển thị</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập chức năng hiển thị" name="hienthi" value="<?php echo $query['CTSP_LOAIDAYDEO'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mô tả</label>
                            <textarea class="form-control" rows="3" placeholder="Nhập nội dung ..." name="mota" ><?php echo $query['CTSP_MOTA'] ?></textarea>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <input type="submit" class="btn btn-primary" value="Sửa chi tiết sản phẩm này" name="submit">
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
