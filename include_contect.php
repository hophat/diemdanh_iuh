	  <div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
		
		  <!-- <ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Dashboard</li>
		  </ol> -->
		</section>
	
		<!-- Main content -->
		<section class="content">
		<?php 
		
			$site_chl = $_GET['site_chl'];
			switch($site_chl){
					case 'site_showhocphan': 
						include('contect/site_showhocphan.php');break;
					case 'site_show_ds_diemdanh': 
						include('contect/site_show_ds_diemdanh.php');break;
					case 'site_nhaphocphan': 
						include('contect/site_nhaphocphan.php');break;
					case 'site_thanhcong': 
						include('contect/site_thanhcong.php');break;
					case 'site_edit': 
						include('contect/site_edit_hocphan.php');break;
					case 'site_ds_sinhvien': 
						include('contect/site_ds_sinhvien.php');break;
					case 'site_ds_sv_camthi': 
						include('contect/site_ds_sv_camthi.php');break;
					default:
						include('contect/site_showhocphan.php');break;
				}
		?>
		</section>
		<!-- /.content -->
	  </div>