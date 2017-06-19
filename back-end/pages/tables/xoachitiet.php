<?php 
    $sql = new DongHo();
    $hinhanh = new DongHo();
    $id = isset($_GET['id'])?$_GET['id']:'';
    $query = $sql->get_row("SELECT * FROM `chitietsp` WHERE `CTSP_ID` =".$id);

    
    if(isset($_POST['submit'])){
        $query = $sql->remove('chitietsp', "`CTSP_ID` = ".$id);
        if ($query){
            echo '<script>
                alert("Xóa thành công");
            </script>';
        }
    }
?>

<section class="content-header">
    <h1>
        Xóa chi tiết sản phẩm
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Sản phẩm</a></li>
        <li class="active">Xóa chi tiết sản phẩm</li>
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
                        <?php 
                        $sql = $sql->get_list("SELECT * from `sanpham`");
                        
                        ?>
                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <select class="form-control" name="tensp">
                               <?php 
                                foreach($sql as $row){
                                    if($query['SP_ID'] == $row['SP_ID']){
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
                        <input type="submit" class="btn btn-primary" value="Xóa chi tiết sản phẩm này" name="submit">
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
