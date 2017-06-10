<?php 
    $sql = new DongHo();
?>


<section class="content-header">
    <h1>
        Hình ảnh
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li class="active"><a href="#">Hình ảnh</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <a href="index.php?page=themhinhanh"><button type="submit" class="btn btn-info pull-left">Thêm hình ảnh</button></a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Mã hình</th>
                                <th>Hình 1</th>
                                <th>Hình 2</th>
                                <th>Hình 3</th>
                                <th>Hình 4</th>
                                <th>Hình 5</th>
                                <th colspan="2">Tác vụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $sql = $sql->get_list("SELECT * FROM `hinhanh`");
                            foreach($sql as $row){
                                echo '<tr>
                                <td>'.$row['HA_ID'].'</td>
                                <td><img src="../../../front-end/images/sanpham/'.$row['HA_HINH1'].'"  height="81px" width="80px">
                                </td>
                                <td><img src="../../../front-end/images/sanpham/'.$row['HA_HINH2'].'"  height="81px" width="80px"></td>
                                <td><img src="../../../front-end/images/sanpham/'.$row['HA_HINH3'].'"  height="81px" width="80px"></td>
                                <td><img src="../../../front-end/images/sanpham/'.$row['HA_HINH4'].'"  height="81px" width="80px"></td>
                                <td><img src="../../../front-end/images/sanpham/'.$row['HA_HINH5'].'"  height="81px" width="80px"></td>
                                <td><a href="index.php?page=capnhathinhanh&id='.$row['HA_ID'].'"><input type="submit" class="btn btn-info pull-right" value="Cập nhật" name="btnCapNhat"></a></td>
                                <td><a href="index.php?page=xoahinhanh&id='.$row['HA_ID'].'"><input type="submit" class="btn btn-info pull-right" style="background:#dd4b39; border-color:#f43f28;" value="Xóa"/></a></td>
                            </tr>';
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Mã hình</th>
                                <th>Hình 1</th>
                                <th>Hình 2</th>
                                <th>Hình 3</th>
                                <th>Hình 4</th>
                                <th>Hình 5</th>
                                <th colspan="2">Tác vụ</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
