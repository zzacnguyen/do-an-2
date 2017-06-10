<?php 
    $sql = new DongHo();
?>

<section class="content-header">
    <h1>
        Liên hệ của khách hàng
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li class="active"><a href="#">Liên hệ</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <a href="index.php?page=themlienhe"><button type="submit" class="btn btn-info pull-left">Thêm liên hệ</button></a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Mã liên hệ</th>
                                <th>Tên khách hàng</th>
                                <th>Email</th>
                                <th>Tiêu đề</th>
                                <th>Nội dung</th>
                                <th colspan="2">Tác vụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $sql = $sql->get_list("SELECT * FROM `lienhe`");
                                foreach ($sql as $row){
                                    echo '<tr>
                                <td>'.$row['LH_ID'].'</td>
                                <td>'.$row['LH_TEN'].'</td>
                                <td>'.$row['LH_EMAIL'].'</td>
                                <td>'.$row['LH_TIEUDE'].'</td>
                                <td>'.$row['LH_NOIDUNG'].'</td>
                                <td><a href="index.php?page=capnhatlienhe&id='.$row['LH_ID'].'"><input type="submit" class="btn btn-info pull-right" value="Cập nhật" name="btnCapNhat"></a></td>
                                <td><a href="index.php?page=xoalienhe&id='.$row['LH_ID'].'"><input type="submit" class="btn btn-info pull-right" style="background:#dd4b39; border-color:#f43f28;" value="Xóa" name="btnXoa"></a></td>
                            </tr>';
                                }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Mã liên hệ</th>
                                <th>Tên khách hàng</th>
                                <th>Email</th>
                                <th>Tiêu đề</th>
                                <th>Nội dung</th>
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
