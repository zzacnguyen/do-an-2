<?php 
    $sql = new DongHo();
?>

<section class="content-header">
    <h1>
        Danh sách khách hàng đăng ký nhận tin tức qua mail
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li class="active"><a href="#">Email</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <a href="index.php?page=thememail"><button type="submit" class="btn btn-info pull-left">Thêm email</button></a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Email</th>
                                <th colspan="2" style="text-align:center;">Tác vụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                    $sql = 
                                        $sql->get_list("SELECT * FROM `nhanemail`");
                                    foreach($sql as $row){
                                        echo '<tr>
                                    <td>'.$row['EMAIL_ID'].'</td>
                                    <td>'.$row['EMAIL_TEN'].'</td>
                                    <td><a href="index.php?page=capnhatemail&id='.$row['EMAIL_ID'].'"><input type="submit" class="btn btn-info pull-right" value="Cập nhật" name="btnCapNhat"></a></td>
                                    <td><a href="index.php?page=xoaemail&id='.$row['EMAIL_ID'].'"><input type="submit" class="btn btn-info pull-right" style="background:#dd4b39; border-color:#f43f28;" value="Xóa" name="btnXoa"></a></td>
                                </tr>';
                                    }
                                ?>
                                
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>STT</th>
                                <th>Email</th>
                                <th colspan="2" style="text-align:center;">Tác vụ</th>
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
