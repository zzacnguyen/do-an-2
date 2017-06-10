<?php 
    $sql = new DongHo();
    if (isset($_POST['submit'])){
        $email = $_POST['email'];
        
        if(!empty($email)){
            $sql = $sql->insert('nhanemail', array('EMAIL_TEN' =>''.$email));
            
            if (isset($sql)){
                echo '<script>
                    alert("Thêm thành công");
                </script>';
            } else {
                echo '<script>
                    alert("Thêm thất bại");
                </script>';
            } 
        }else{
            echo '<script>
                    alert("Dữ liệu không được để trống");
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
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập email" name="email">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Thêm email" name="submit">
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>