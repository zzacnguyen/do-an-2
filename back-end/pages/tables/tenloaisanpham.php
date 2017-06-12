<?php 
//    include_once '../../../front-end/dongho.php';
    $sql = new DongHo();
?>     
     <section class="content-header">
      <h1>
        Tên loại sản phẩm
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Sản phẩm</a></li>
        <li class="active">Danh sách tên loại sản phẩm</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                <a href="index.php?page=themsanpham"><button type="submit" class="btn btn-info pull-left">Thêm sản phẩm</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Tên sản phẩm</th>
                  <th>Giá</th>
                  <th>Giới thiệu</th>
                  <th>Hình ảnh</th>
                  <th>Tác vụ 1</th>
                  <th>Tác vụ 2</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    $sql = $sql->get_list("SELECT * FROM `sanpham`");
                    foreach($sql as $row){
                        echo '<tr>
                  <td>'.$row['SP_ID'].'</td>
                  <td>'.$row['SP_TENSP'].'</td>
                  <td>'.$row['SP_GIA'].'</td>
                  <td>'.$row['SP_GIOITHIEU'].'</td>
                  <td>'.$row['SP_HINH'].'</td>
                  <td><a href="index.php?page=capnhatsanpham&id='.$row['SP_ID'].'"><input type="submit" class="btn btn-info pull-right" value="Cập nhật" name="btnCapNhat"></a></td>
                  <td><a href="index.php?page=xoasanpham&id='.$row['SP_ID'].'"><input type="submit" class="btn btn-info pull-right" style="background:#dd4b39; border-color:#f43f28;" value="Xóa"/></a></td>
                </tr>';
                    }
                    ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Tên sản phẩm</th>
                  <th>Giá</th>
                  <th>Giới thiệu</th>
                  <th>Hình ảnh</th>
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