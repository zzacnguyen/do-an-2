<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview active">
          <a href="#?page=sanpham">
            <i class="fa fa-table"></i> <span>Sản phẩm</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <?php
              if ($page == 'tenloai'){
                  echo '<li class="active"><a href="../tables/index.php?page=tenloai"><i class="fa fa-circle-o"></i>Tên loại sản phẩm</a></li>';
              } else {
                  echo '<li><a href="../tables/index.php?page=tenloai"><i class="fa fa-circle-o"></i>Tên loại sản phẩm</a></li>';

              }
              
              if ($page == 'chitiet'){
                  echo '<li class="active"><a href="../tables/index.php?page=chitiet"><i class="fa fa-circle-o"></i>Chi tiết</a></li>';
              } else {
                  echo '<li><a href="../tables/index.php?page=chitiet"><i class="fa fa-circle-o"></i>Chi tiết</a></li>';
              }
              
              if ($page == 'hinhanh'){
                  echo '<li class="active"><a href="../tables/index.php?page=hinhanh"><i class="fa fa-circle-o"></i>Hình ảnh</a></li>';
              } else {
                  echo '<li><a href="../tables/index.php?page=hinhanh"><i class="fa fa-circle-o"></i>Hình ảnh</a></li>';
              }
              ?>
          </ul>
        </li>
        <li class="treeview">
          <a href="../tables/index.php?page=danhgiasp">
            <i class="fa fa-book"></i> <span>Đánh giá</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="../tables/index.php?page=lienhe">
            <i class="fa fa-commenting"></i> <span>Liên hệ</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="../tables/index.php?page=email">
            <i class="fa fa-envelope"></i> <span>Nhận email</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
