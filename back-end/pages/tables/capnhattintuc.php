<?php 
    $sql = new DongHo();
    $id = isset($_GET['id'])?$_GET['id']:'';
    $query = $sql->get_row("SELECT * FROM `tintuc` WHERE `TT_ID` = ".$id);
    
    if(isset($_POST['submit'])){
        $tieude = isset($_POST['tieude'])?$_POST['tieude']:'';
        $noidung = isset($_POST['noidung'])?$_POST['noidung']:'';
        
        $tenanh = $_FILES['hinhanh']['name'];
        if($tenanh != null){
            if($_FILES['hinhanh']['type'] == "image/jpeg" || $_FILES['hinhanh']['type'] == "image/png" || $_FILES['hinhanh']['type'] == "image/gif"){
                $maxFileSize = 10 * 1000 * 1000; //MB
                if($_FILES['hinhanh']['size'] > $maxFileSize){
                    echo 'Kích thước hình ảnh không vượt quá 10mb';
                }else{
                    $thuMucHinh = "../../../front-end/images/news/".$tenanh;
                    move_uploaded_file($_FILES['hinhanh']['tmp_name'], $thuMucHinh);
                    
                    $url = $sql->get_row("SELECT `TT_HINHANH` from `TINTUC` WHERE `TT_ID` = ".$id);
                    
                    if($url['TT_HINHANH'] != ""){
                        unlink("../../../front-end/images/news/".$url['TT_HINHANH']);
                    }
                    
                    $sql = $sql->update('tintuc', array('TT_TIEUDE'=>$tieude, 'TT_NOIDUNG'=>$noidung, 'TT_HINHANH'=>$tenanh), "`TT_ID` = ".$id);
                    
                    if (isset($sql)){
                            echo '<script>
                                alert("Sửa thành công");
                            </script>';
                        } else {
                            echo '<script>
                                alert("Sửa thất bại");
                            </script>';
                        }
                }
            }
        }else{
                $sql = $sql->update('tintuc', array('TT_TIEUDE'=>$tieude, 'TT_NOIDUNG'=>$noidung), "`TT_ID` = ".$id);
                    
                    if (isset($sql)){
                            echo '<script>
                                alert("Sửa thành công");
                            </script>';
                        } else {
                            echo '<script>
                                alert("Sửa thất bại");
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
                  <label for="exampleInputEmail1">Tiêu đề</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập tiêu đề" name="tieude" value = "<?php echo $query['TT_TIEUDE'] ?>">
                </div>
                <div class="form-group">
                  <label>Nội dung</label>
                  <textarea class="form-control" rows="3" placeholder="Nhập nội dung ..." name="noidung"><?php echo $query['TT_NOIDUNG'] ?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Chọn ảnh</label>
                  <input type="file" id="exampleInputFile" name="hinhanh">
                  <span><img src="../../../front-end/images/news/<?php echo $query['TT_HINHANH'] ?>"></span>

                  <p class="help-block">Kích thước hình ảnh 770x221.</p>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Xóa bài viết " name="submit">
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>