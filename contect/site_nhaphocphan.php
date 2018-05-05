
<!-- preload -->
<div id="preloader">
			<div id="status" class="status1">&nbsp;</div>
</div>
<!-- preload -->
<div class="col-xs-1"></div><div class="col-xs-10">
						<div class="box box-primary">
					
									<div class="box-header with-border">
									  <h3 class="box-title title_box_1  ">Tạo Hoc Phần</h3>
									</div>
									<form role="form" name="frm" method="POST" enctype="multipart/form-data">
									  <div class="box-body">
										<div class="form-group">
										  <label for="exampleInputEmail1"> Mã môn học</label>
										  <input required="" type="number" name="txtmamonhoc" class="form-control" id="txtmamonhoc" placeholder="Mã môn học...">
										</div>
										<div class="form-group">
										  <label for="exampleInputPassword1">Tên môn học</label>
										  <input required="" type="text" name="txttenmonhoc" class="form-control" id="txttenmonhoc" placeholder="Tên môn học...">
										</div>
											<div class="form-group">
										  <label for="exampleInputPassword1">Tên lớp học</label>
										  <input required="" type="text" name="txttenlop" class="form-control" id="txttenlop" placeholder="Tên lớp học...">
										</div>
										<div class="form-group">
										  <label for="exampleInputPassword1"> Tiết học (vd:4-6):</label>
										  <input required="" type="text" onkeyup="return displayWordCounter();" name="txttiet" class="form-control" id="txttiet" placeholder="tiết học...">
										</div>
										<div class="form-group">
										  <label for="exampleInputPassword1">Phòng học</label>
										  <input required="" type="text" name="txtphonghoc" class="form-control" id="txttiet" placeholder="Phòng học...">
										</div>
										<div class="form-group" style="width:50%; float: left;">
										  <label for="exampleInputPassword1">Ngày bắt đầu</label>
										  <input type="date" name="datedau" style="width:50%;" class="form-control" id="datedau" required="">
										</div>
										<div class="form-group" style="width:50%; float: left;">
										    <label for="exampleInputPassword1">Ngày kết thúc</label>
										   <input type="date" name="datecuoi" style="width:50%;" class="form-control" id="datecuoi" required="">
										</div>
										<div class="form-group" style="width:50%; float: left;">
										  
										
		               		 		<label>Học thứ:</label>
		               				 <select class="form-control select2 select2-hidden-accessible" name="thu_1" style="width: 50%;" tabindex="-1" aria-hidden="true">
			                		  <option value="2" selected="selected">Thứ Hai</option>
			                  		
			                  		<option value="3">Thứ ba</option>
			                 		 <option value="4">Thứ tư</option>
			                		  <option value="5">Thứ năm</option>
			                		  <option value="6">thứ sáu</option>
			                		  <option value="7">Thứ bảy</option>
			                		  <option value="1">Chủ nhật</option>
			                		   <option value="">-- --</option>
			               				 </select><span class="select2 select2-container select2-container--default select2-container--below select2-container--focus" dir="ltr" style="width: 100%;"><span class="selection"></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
										   
										</div>
										
									<div class="form-group" style="width:50%; float: left;">
										 <label>Danh sách sinh viên</label> 	
											 <div class="input-file-container">  
												<input required="" class="input-file" name="excel"  id="my-file" type="file">
												<label tabindex="0" for="my-file" class="input-file-trigger "><span class="glyphicon glyphicon-open"></span> file Danh Sach</label>
											  </div>

										 
										</div>
									
									  </div>
									  <!-- /.box-body -->

									  <div class="box-footer footer_nhaphoc">
										  <input type="submit" name="import" value="Tạo Học Phần" class="btn btn-info bnt_capnhat" onclick="checkValidate()">
									  </div>
									</form>
								  </div>
						</div>
<script>
	function checkValidate(){

            // kiểm tra ngày bắt đầu và ngày kết thúc
			var startDate= document.getElementById("datedau");
			var endDate = document.getElementById("datecuoi");
			var x =startDate.valueAsDate;
			var y =endDate.valueAsDate;
            
			if(x<=y)
				return true;
			else
			{
				alert("Ngày nhập sai!");
				return false;
			}
            //kiểm tra mã môn học
            var mamonhoc=document.getElementById("txtmamonhoc").value;
            var form= /^\d*$/;
            if (mamonhoc.match(form))
                 return true;
            else
			{
            alert("Mã môn học phải thuộc dạng số!");
			}
        }
</script>

<?php
include('php/nhaphocphan.php');
?>
