<?php
	  $id_hp=$_GET['ma_HP'];
  
	$hocphan  =  SHOW_HP_edit($id_hp, $id_gv);

?>
<div id="preloader">
			<div id="status" class="status1">&nbsp;</div>
</div>
<!-- preload -->
<div class="col-xs-1"></div>
	<div class="col-xs-10">
		<div class="box box-primary">

					<div class="box-header with-border">
					  <h3 class="box-title title_box_1">Thông Tin Học Phần</h3>
					</div>
					<form role="form" name="frm" method="POST" enctype="multipart/form-data">
					  <div class="box-body">
						<div class="form-group">
						  <label >Tên môn học</label>
						  <input required  type="text" value="<?=$hocphan['tenhocphan'] ?>" name="txttenmonhoc" class="form-control" id="txttenmonhoc" placeholder="Tên môn học...">
						</div>
							<div class="form-group">
						  <label >Tên lớp học</label>
						  <input  required type="text" value="<?=$hocphan['ten_lop'] ?>" name="txttenlop" class="form-control" id="txttenlop" placeholder="Tên lớp học...">
						</div>
						<div class="form-group">
						  <label>  Tiết học (vd:4-6):</label>
						  <input   type="text" onkeyup="return displayWordCounter();" value="<?=$hocphan['tiet_bd'].'-'.$hocphan['tiet_kt'] ?>" name="txttiet" class="form-control" id="txttiet" placeholder="tiết học...">
						</div>
						<div class="form-group">
						  <label> Phòng học</label>
						  <input required  type="text" value="<?=$hocphan['phong'] ?>" name="txtphonghoc" class="form-control" id="txttiet" placeholder="Phòng học...">
						</div>
						<div class="form-group" >
						  <label> Ngày bắt đầu</label>
						  <input required type="date" name="datedau" value="<?=$hocphan['batdau_mon'] ?>" class="form-control" id="datedau"  >
						  </div>
						  <div class="form-group" >
							<label >Ngày kết thúc</label>
						   <input required type="date" name="datecuoi" value="<?=$hocphan['ketthuc_mon'] ?>"  class="form-control" id="datecuoi"  >
						</div>
						<div class="form-group" >
						  
						
					<label>Học thứ:</label>
					 <select class="form-control select2 select2-hidden-accessible" name="thu_1"  tabindex="-1" aria-hidden="true">
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
						
						<div class="form-group">
						 <label>Danh sách sinh viên</label> 	
							 <div class="input-file-container">  
								<input class="input-file" name="excel"  id="my-file" type="file">
								<label tabindex="0" for="my-file" class="input-file-trigger "><span class="glyphicon glyphicon-open"></span> file Danh Sach</label>
							  </div>
						</div>
						  
						
					
					  </div>
					  <!-- /.box-body -->

					  <div class="box-footer footer_nhaphoc">
						  <input type="submit" name="import" value="Cập Nhật" class="btn btn-info bnt_capnhat">
					  </div>
					</form>
		</div>
	</div>

<?php include('php/edit_hocphan.php')?>