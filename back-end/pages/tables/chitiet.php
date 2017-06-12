<?php 
    $sql = new DongHo();
?>
<section class="content-header">
    <h1>
        Chi tiết sản phẩm
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Sản phẩm</a></li>
        <li class="active">Chi tiết sản phẩm</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <a href="index.php?page=themchitietsp"><button type="submit" class="btn btn-info pull-left">Thêm chi tiết sản phẩm</button></a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Mã CTSP</th>
                                <!--
                                <th>Mã hình</th>
                                <th>Mã sản phẩm</th>
-->
                                <th>Tình trạng</th>
                                <th>Bộ sưu tập</th>
                                <th>Series</th>
                                <th>Kích thước</th>
                                <th>Chất liệu</th>
                                <th>Khung</th>
                                <!--                                <th>Loại máy</th>-->
                                <th>Loại dây</th>
                                <th>Mặt quay số</th>
                                <!--                                <th>Chống nước</th>-->
                                <th>Giới tính</th>
                                <th>Hiển thị</th>
                                <!--                                <th>Mô tả</th>-->
                                <th>Tác vụ 1</th>
                                <th>Tác vụ 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $sql = $sql->get_list("SELECT * from `chitietsp`");
                            foreach($sql as $row){
                                echo '<tr>
                                <td>'.$row['CTSP_ID'].'</td>
                                <td>'.$row['CTSP_TINHTRANG'].'</td>
                                <td>'.$row['CTSP_BOSUUTAP'].'</td>
                                <td>'.$row['CTSP_SERIES'].'</td>
                                <td>'.$row['CTSP_KICHTHUOC'].'</td>
                                <td>'.$row['CTSP_CHATLIEU'].'</td>
                                <td>'.$row['CTSP_KHUNG'].'</td>
                             
                                <td>'.$row['CTSP_LOAIDAYDEO'].'</td>
                                <td>'.$row['CTSP_MATQUAYSO'].'</td>
     
                                <td>'.$row['CTSP_GIOITINH'].'</td>
                                <td>'.$row['CTSP_CHUCNANGHIENTHI'].'</td>
     
                                <td><a href="index.php?page=capnhatchitiet&id='.$row['CTSP_ID'].'"><input type="submit" class="btn btn-info pull-right" value="Cập nhật" name="btnCapNhat"></a></td>
                                <td><a href="index.php?page=xoachitiet&id='.$row['CTSP_ID'].'"><input type="submit" class="btn btn-info pull-right" style="background:#dd4b39; border-color:#f43f28;" value="Xóa"></a></td>
                            </tr>';
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Mã CTSP</th>
                                <th>Tình trạng</th>
                                <th>Bộ sưu tập</th>
                                <th>Series</th>
                                <th>Kích thước</th>
                                <th>Chất liệu</th>
                                <th>Khung</th>
                                <!--                                <th>Loại máy</th>-->
                                <th>Loại dây</th>
                                <th>Mặt quay số</th>
                                <!--                                <th>Chống nước</th>-->
                                <th>Giới tính</th>
                                <th>Hiển thị</th>
                                <!--                                <th>Mô tả</th>-->
                                <th>Tác vụ 1</th>
                                <th>Tác vụ 2</th>
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
