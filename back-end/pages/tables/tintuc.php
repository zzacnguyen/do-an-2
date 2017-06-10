<?php 
    $sql = new DongHo();
?>

<section class="content-header">
    <h1>
        Tin tức
        <small</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li class="active"><a href="#">Tin tức</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <a href="index.php?page=themtintuc"><button type="submit" class="btn btn-info pull-left">Thêm bài viết</button></a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Mã tin</th>
                                <th>Tiêu đề</th>
                                <th>Nội dung</th>
                                <th>Hình ảnh</th>
                                <th colspan="2">Tác vụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                    $sql = $sql->get_list("SELECT * FROM `tintuc`");
                    foreach ($sql as $row){
                        echo '<tr>
                  <td>'.$row['TT_ID'].'</td>
                  <td>'.$row['TT_TIEUDE'].'</td>
                  <td>'.$row['TT_NOIDUNG'].'</td>
                  <td>'.$row['TT_HINHANH'].'</td>
                  <td><a href="index.php?page=capnhattintuc&id='.$row['TT_ID'].'"><input type="submit" class="btn btn-info pull-right" value="Cập nhật" name="btnCapNhat"></a></td>
                  <td><a href="index.php?page=xoatintuc&id='.$row['TT_ID'].'"><input type="submit" class="btn btn-info pull-right" style="background:#dd4b39; border-color:#f43f28;" value="Xóa"/></a></td>
                </tr>';
                    }
                    ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Mã tin</th>
                                <th>Tiêu đề</th>
                                <th>Nội dung</th>
                                <th>Hình ảnh</th>
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
