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
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Mã</th>
                                <th>Tên khách hàng</th>
                                <th>Nội dung</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $sql = $sql->get_list("SELECT * FROM `danhgiasp`");
                                foreach ($sql as $row){
                                    echo '<tr>
                                <td>'.$row['DG_ID'].'</td>
                                <td>'.$row['DG_TEN'].'</td>
                                <td>'.$row['DG_NOIDUNG'].'</td>
                            </tr>';
                                }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Mã</th>
                                <th>Tên khách hàng</th>
                                <th>Nội dung</th>
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
