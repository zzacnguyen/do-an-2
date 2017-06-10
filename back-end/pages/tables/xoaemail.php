<?php 
    $sql = new DongHo();
    $id = isset($_GET['id'])?$_GET['id']:'';
    $query = $sql->get_row("SELECT * FROM `nhanemail` WHERE `EMAIL_ID`=".$id);
    
    if (isset($_POST['submit'])){
        $query = $sql->remove('nhanemail', "`EMAIL_ID` = ".$id);
        if ($query){
            echo '<script>
                alert("Xóa thành công");
            </script>';
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
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập email" name="email" value="<?php echo $query['EMAIL_TEN'] ?>">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Xóa email" name="submit">
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>