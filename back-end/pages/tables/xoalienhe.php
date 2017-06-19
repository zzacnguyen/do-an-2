<?php    
    $sql = new DongHo();
    $id = isset($_GET['id'])?$_GET['id']:'';
    $query = $sql->get_row("SELECT * FROM `lienhe` WHERE `LH_ID`=".$id);

    if (isset($_POST['submit'])){
           $query = $sql->remove('lienhe', "`LH_ID` = ".$id);
        if ($query){
            echo '<script>
                alert("Xóa thành công");
            </script>';
        }
      }
?>

<section class="content-header">
    <h1>
        Liên hệ
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li class="active">Xóa liên hệ</li>
    </ol>
</section>

<!-- Main content "-->
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
                            <label for="exampleInputEmail1">Họ và tên</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập họ tên" name="hoten" value="<?php echo $query['LH_TEN'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập email" name="email" value="<?php echo $query['LH_EMAIL'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tiêu đề</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập tiêu đề" name="tieude" value="<?php echo $query['LH_TIEUDE'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea class="form-control" rows="3" placeholder="Nhập nội dung ..." name="noidung" ><?php echo $query['LH_NOIDUNG'] ?></textarea>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <input type="submit" class="btn btn-primary" value="Xóa liên hệ" name="submit">
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
