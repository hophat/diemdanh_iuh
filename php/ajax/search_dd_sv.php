<?php
	include('connet_ajax.php');
	error_reporting("all");
	$yeucau		=	$_POST['mssv'];
	$ketqua 	= 	SEARCH_SV_BUOIHOC($yeucau);
	
	$sinhvien	= 	$ketqua[0];
	$mssv 		=	$sinhvien['mssv'];
	$hodem 		=	$sinhvien['hodem'];
	$ten 		=	$sinhvien['ten'];
	$lop		=	$sinhvien['lop'];
	$stt 		=	0;


?>
<style>


.thongtin_diemddanh_css:hover {

}
.blue{
	text-shadow: 0 0 5px blue;
}
</style>

<div class="box table_conten thongtin_sv">
              <div class="box-header">
               <!--  <h2 class="box-title">Thông Tin Sinh Viên</h2 > -->
              </div>
              <!-- /.box-header -->
              <div class="box-body no-padding box_thongtin_sv">
                <table class="thongtin_sv_table">
                  <tbody><tr class="thongtin_sv_tr">
                   
                    <th>Họ Tên</th>
                    <th class="blue"><?=$hodem?> <?=$ten?></th>
                   
                  </tr>
                  <tr class="thongtin_sv_tr" >
                   
                    <td >MSSV</td>
                    <td>
                      
                        <div class="blue" ><?=$mssv?></div>
                      
                    </td>
                    
                  </tr>
                  <tr class="thongtin_sv_tr">
                    
                    <td>Lớp</td>
                    <td>
                      <div class="blue">
                       <?=$lop?>
                      </div>
                    </td>
                   
                  </tr>
                  <tr class="thongtin_sv_tr">
                   
                    <td>Hệ đào tạo</td>
                    <td>
                      <div class="blue">
                        ...
                      </div>
                    </td>
                    
                  </tr>
                  <tr class="thongtin_sv_tr" >
                   
                    <td>Niên khóa</td>
                    <td>
                      <div class="blue">
                       ...
                      </div>
                    </td>
                    
                  </tr>
                </tbody></table>
              </div>
              <!-- /.box-body -->
            </div>

    <div class="box table_conten thongtin_diemddanh">
              <div class="box-header">
               
              </div>
              <!-- /.box-header -->
              <div class="box-body no-padding thongtin_diemddanh_css">
                <table class="table table-condensed">
                  <tbody>
                  	<tr>
                 	 <th style="width: 5%" >#</th>
                    <th  style="width: 45%" >Môn Học</th>
                    <th style="width: 10%">Vắng</th>
                    <th style="width: 30%" >Tiến độ môn học</th>
                    <th style="width: 10%" ></th>

                  </tr>
                  	<?php
                  	foreach ($ketqua as $hocphandd) {

                  		$stt+=1;
                  		$class_tiendo 	= '';
                  		$dihoc 			= $hocphandd['dihoc']/15*100;

                  		$camthi			= '';
                  		if($hocphandd['dihoc'] < 4) {

                  			$class_tiendo		=	'progress-bar-primary';
                  			$class_tiendo_pt	=	'bg-light-blue';

                  		} else {
	                  			if ($hocphandd['dihoc'] < 8) {
									$class_tiendo		=	'progress-bar-success';
									$class_tiendo_pt	=	'bg-green';                  			
	                  			}else {
			                  			if ($hocphandd['dihoc'] < 12) {
										$class_tiendo		=	'progress-bar-yellow';
										$class_tiendo_pt	=	'bg-yellow';                  			
		                  			}else  {
										$class_tiendo	=	'progress-bar-danger'; 
										$class_tiendo_pt	=	'bg-red';                 			
		                  			}
	                  			} 
                  		} 

                  		if ($hocphandd['vang'] > 3 ) {
                  			$camthi			= 'style="color:red;"';
                  		}
                  		
                  		 	
                  	?>
                  <tr>
                    <td class="blue"><?=$stt?></td>
                    <td class="blue"><?=$hocphandd['tenhocphan']?></td>
                     <th <?=$camthi	?>> <?=$hocphandd['vang']?> </th>
                    <td>
                      <div class="progress progress-xs">
                      	
                        <div class="progress-bar <?=$class_tiendo?>" style="width:<?=round($dihoc)?>%"></div>
                      </div>
                    </td>
                    <td><span class="badge <?=$class_tiendo_pt?>"><?=round($dihoc)?>%</span></td>
                  </tr>

                 <?php } ?>
                  		

                </tbody></table>
              </div>
              <!-- /.box-body -->
            </div>