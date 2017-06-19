<?php 
    $sql = new DongHo();   
    $maxFileSize = 10 * 1000 * 1000; //10Mb

if(isset($_POST['submit'])){
    $tenanh1 = $_FILES['hinhanh1']['name'];
    $tenanh2 = $_FILES['hinhanh2']['name'];
    $tenanh3 = $_FILES['hinhanh3']['name'];
    $tenanh4 = $_FILES['hinhanh4']['name'];
    $tenanh5 = $_FILES['hinhanh5']['name'];
    
    if($tenanh1 != null || $tenanh2 !=null || $tenanh3 !=null || $tenanh4 !=null || $tenanh5 !=null){
        if($_FILES['hinhanh1']['type'] == "image/jpeg" || $_FILES['hinhanh1']['type'] == "image/png" || $_FILES['hinhanh1']['type'] == "image/gif" || $_FILES['hinhanh2']['type'] == "image/jpeg" || $_FILES['hinhanh2']['type'] == "image/png" || $_FILES['hinhanh2']['type'] == "image/gif" || $_FILES['hinhanh3']['type'] == "image/jpeg" || $_FILES['hinhanh3']['type'] == "image/png" || $_FILES['hinhanh3']['type'] == "image/gif" ||
        $_FILES['hinhanh4']['type'] == "image/jpeg" || $_FILES['hinhanh4']['type'] == "image/png" || $_FILES['hinhanh4']['type'] == "image/gif" ||         $_FILES['hinhanh5']['type'] == "image/jpeg" || $_FILES['hinhanh5']['type'] == "image/png" || $_FILES['hinhanh5']['type'] == "image/gif"){
            
            $thuMucHinh1 = "../../../front-end/images/sanpham/".$tenanh1;
                move_uploaded_file($_FILES['hinhanh1']['tmp_name'], $thuMucHinh1);//Hinh 1
            
            $thuMucHinh2 = "../../../front-end/images/sanpham/".$tenanh2;
                move_uploaded_file($_FILES['hinhanh2']['tmp_name'], $thuMucHinh2);//Hinh 2
            
            $thuMucHinh3 = "../../../front-end/images/sanpham/".$tenanh3;
                move_uploaded_file($_FILES['hinhanh3']['tmp_name'], $thuMucHinh3);//Hinh 2
            
            $thuMucHinh4 = "../../../front-end/images/sanpham/".$tenanh4;
                move_uploaded_file($_FILES['hinhanh4']['tmp_name'], $thuMucHinh4);//Hinh 2
            
            $thuMucHinh5 = "../../../front-end/images/sanpham/".$tenanh5;
                move_uploaded_file($_FILES['hinhanh5']['tmp_name'], $thuMucHinh5);//Hinh 2
            
            $sql = $sql->insert('hinhanh', array('HA_HINH1'=>''.$tenanh1, 'HA_HINH2'=>''.$tenanh2, 'HA_HINH3'=>''.$tenanh3, 'HA_HINH4'=>''.$tenanh4, 'HA_HINH5'=>''.$tenanh5));
    
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
}
?>

<section class="content-header">
    <h1>
        Thêm hình ảnh
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li class="active">Thêm hình ảnh sản phẩm</li>
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
                            <label for="exampleInputFile">Chọn ảnh 1</label>
                            <input type="file" id="exampleInputFile" name="hinhanh1">

                            <p class="help-block">Kích thước hình ảnh 270x162.</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Chọn ảnh 2</label>
                            <input type="file" id="exampleInputFile" name="hinhanh2">

                            <p class="help-block">Kích thước hình ảnh 270x162.</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Chọn ảnh 3</label>
                            <input type="file" id="exampleInputFile" name="hinhanh3">

                            <p class="help-block">Kích thước hình ảnh 270x162.</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Chọn ảnh 4</label>
                            <input type="file" id="exampleInputFile" name="hinhanh4">

                            <p class="help-block">Kích thước hình ảnh 270x162.</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Chọn ảnh 5</label>
                            <input type="file" id="exampleInputFile" name="hinhanh5">

                            <p class="help-block">Kích thước hình ảnh 270x162.</p>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <input type="submit" class="btn btn-primary" value="Thêm ảnh" name="submit">
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>