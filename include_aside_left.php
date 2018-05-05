
<?php include('php/thongke.php') ?>

  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">

          <?php
          $giangvien = SHOW_TT_GV($id_gv);
          ?>

          <p><?=$giangvien['tengv']?></p>

          <a href="#"><i class="fa fa-circle text-success"></i> Trực tuyến</a>
        </div>
      </div>
      <!-- search form -->
     
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

        <li class="header">LỰA CHỌN</li>
        <li><a href="trangchu-site_show_ds_diemdanh"><i class="fa fa-link"></i> <span>Bảng điểm danh</span></a></li>
		    <li><a href="trangchu-site_showhocphan"><i class="fa fa-link"></i> <span>Danh sách học phần</span>     </a></li>
		    <li class="treeview ">
          <a href=""><i class="fa fa-link"></i> 
            <span>Danh sách cấm thi</span> 
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i> 
            </span></a>
           <ul class="treeview-menu" style="display: none;">
            <li><a href=""><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>

          </li>
        <li class="header">CHÚ Ý</li>
        <li class="active treeview"><a href="trangchu-site_ds_sv_camthi"><i class="fa fa-circle-o text-yellow"></i> <span id="thongke_hocphan"> Sinh viên bị cấm thi</span></a></li>
        <li><a href="trangchu-site_ds_sinhvien"><i style="float: left;" class="fa fa-circle-o text-aqua"></i> <span>
          <?=$so_sv?>

           Sinh viên</span></a></li>
        <li><a href="trangchu-site_showhocphan"><i class="fa fa-circle-o text-aqua"></i> <span id="thongke_hocphan"><?=$sohophan?> Lớp học phần</span></a></li>
        <br>
		    <li><a href="php/Logout.php"><i class="fa fa-circle-o text-red"></i> <span>Đăng xuất</span></a></li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
