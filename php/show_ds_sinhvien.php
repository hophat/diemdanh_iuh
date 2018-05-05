<?php
if (!empty($_GET['ma_HP'])) {

	$stt=0;
	$id_edit=1000;
	$maHP   =	$_GET['ma_HP'];
	$hp 	=  	SHOW_TT_HP($id_gv,$maHP);
	$hp 	= 	$hp[0];

		//print_r($hp);die;
?>
  <div  class="box-header" onclick="" >
              <h3 style="font-size: x-large;font-weight: 600;color: #2196F3; float:left;" id="tieude_lop" class="box-title"><?=$hp['tenhocphan']?>(<?=$hp['ten_lop']?>)</h3>
              <div style="float:right; ">Search: <input type="text" id="search_sv" onkeyup="myFunction()" /></div>
    </div>
    
            <div class="box-body">
			
             
			   <table id="ds_sv" class="table table-bordered table-hover">
				
				  
				 <div class="row"><div class="col-sm-12">
				 <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row">
          <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width:3%;">STT</th>
					<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width:10%;">Lớp</th>
					<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 8%;">Mã sinh viên</th>
					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 10%;">Họ Tên</th>
					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 5%;">Tên</th>
					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 10%;">Môn học</th>
					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 4%;">Chỉnh Sửa</th>
                
				
				</thead>
                <tbody id="myTable">
 <?php

 		$ruselt 	= SHOW_SV($maHP);

		foreach ($ruselt as $row ) {
		
			$stt 		+=1;
			$id_edit	+=1;

?>
		<tr  role="row" class="odd" >

			<td class="sorting_1">	<?=$stt?>	</td>
			<td>  	<?=$row['lop']?>			</td>
			<td>  	<?=$row['mssv']?>			</td>
			<td>	<?=$row['hodem']?>			</td>
			<td> 	<?=$row['ten']?>			</td>
			<td>	<?=$row['tenhocphan']?> 	</td>	
			<td>

				<span "  class="glyphicon glyphicon-remove" onclick="xoasv(<?=$row['mssv']?>,<?= $row['id_lophocphan']?>)" style="cursor: pointer;"  >
				</span> 

				<label  class="btn-info icon_sua" data-toggle="modal" data-target="#<?=$id_edit?>">
	               <span class="glyphicon glyphicon-edit"></span>
	            </label>

	              <?php include('view_chucnang/view_sua_sv.php'); ?>

			    <ul class="dropdown-menu" style=" position: fixed; width:80%; top:20%;left:18%; padding: 1%;background-color: #9faf90;">
			    </ul>

			</td>

		</tr>



				
			
	<?php	}?>
</tbody>

                <tfoot>
                </tfoot>
              </table>
                </div>
  </div>
                  
<?php	}?>
		
