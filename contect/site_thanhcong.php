<?php
$id_gv=$_SESSION["myusername"]; 
$id_hp = $_GET['id_hp'];
$so_sv = $_GET['so_sv'];
$title_chedo = $_GET['chedo'];
if($title_chedo ==1 ){
	$title_chedo = 'Tạo Học Phần thành công, trở lại trang chủ sau 10s';
}
if($title_chedo ==2 ){
	$title_chedo = 'Cập Nhật thành công, trở lại trang chủ sau 10s';
}

	$hocphan = SHOW_HP_edit($id_hp,$id_gv); 
?>
<style type="text/css">
		
.form-control{
	width: 80% !important;
    float: right !important;
	color: green;
	font-weight: bold;

}
.title_chuyen_trang{
	font-size: 22px;
	text-align: center;
	color: blue;
}

	</style>
 <meta http-equiv="refresh" content="10;?site=1&site_chl=site_showhocphan" />   
<div class="col-md-12">
		<div class="box box-primary">

					<div class="box-header with-border title_chuyen_trang">
					  <h3 class="box-title title_box_1 "><?=$title_chedo?></h3>
					</div>
					<form role="form" name="frm" method="POST" enctype="multipart/form-data">
					  <div class="box-body">
					  <div class="form-group">
						  <label >Cập nhật thành công :</label>
						  <input  disabled='true'  type="text" value="<?=$so_sv ?> sinh viên" name="txttenmonhoc" class="form-control" id="txttenmonhoc" placeholder="Tên môn học...">
						</div>
						<div class="form-group">
						  <label >Tên môn học :</label>
						  <input  disabled='true'  type="text" value="<?=$hocphan['tenhocphan'] ?>" name="txttenmonhoc" class="form-control" id="txttenmonhoc" placeholder="Tên môn học...">
						</div>
							<div class="form-group">
						  <label >Tên lớp học :</label>
						  <input  disabled='true'   type="text" value="<?=$hocphan['ten_lop'] ?>" name="txttenlop" class="form-control" id="txttenlop" placeholder="Tên lớp học...">
						</div>
						<div class="form-group">
						  <label>  Tiết học (vd:4-6):</label>
						  <input  disabled='true'   type="text" onkeyup="return displayWordCounter();" value="<?=$hocphan['tiet_bd'].'-'.$hocphan['tiet_kt'] ?>" name="txttiet" class="form-control" id="txttiet" placeholder="tiết học...">
						</div>
						<div class="form-group">
						  <label> Phòng học:</label>
						  <input  disabled='true'   type="text" value="<?=$hocphan['phong'] ?>" name="txtphonghoc" class="form-control" id="txttiet" placeholder="Phòng học...">
						</div>
						<div class="form-group" >
						  <label> Ngày bắt đầu:</label>
						  <input disabled='true'   type="date" name="datedau" value="<?=$hocphan['batdau_mon'] ?>" class="form-control" id="datedau"  >
						  </div>
						  <div class="form-group" >
							<label >Ngày kết thúc:</label>
						   <input disabled='true'   type="date" name="datecuoi" value="<?=$hocphan['ketthuc_mon'] ?>"  class="form-control" id="datecuoi"  >
						</div>
						<div class="form-group" >
						  
						
					<label>Học thứ:</label>
					 <select disabled='true'   class="form-control select2 select2-hidden-accessible" name="thu_1"  tabindex="-1" aria-hidden="true">
					  	<option value="2" <?php if($hocphan['thu']==2){echo 'selected="selected"';} ?> >Thứ Hai</option>
						<option value="3" <?php if($hocphan['thu']==3){echo 'selected="selected"';} ?> >Thứ ba</option>
					 	<option value="4" <?php if($hocphan['thu']==4){echo 'selected="selected"';} ?>>Thứ tư</option>
					  	<option value="5" <?php if($hocphan['thu']==5){echo 'selected="selected"';} ?> >Thứ năm</option>
					  	<option value="6" <?php if($hocphan['thu']==6){echo 'selected="selected"';} ?> >thứ sáu</option>
					  	<option value="7" <?php if($hocphan['thu']==7){echo 'selected="selected"';} ?> >Thứ bảy</option>
					  	<option value="1" <?php if($hocphan['thu']==1){echo 'selected="selected"';} ?> >Chủ nhật</option>
					   <option value="">-- --</option>
						 </select><span class="select2 select2-container select2-container--default select2-container--below select2-container--focus" dir="ltr" style="width: 100%;"><span class="selection"></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

						</div>
						
						
					
					  </div>
					  <!-- /.box-body -->

					  <div class="box-footer" style="padding:0;">
						  <a class="btn btn-info bnt_comeback" href="trangchu-site_showhocphan">Trở Lại Trang Chủ Ngay...</a>
					  </div>
					</form>
		</div>
	</div>

