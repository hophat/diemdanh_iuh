<div class="col-xs-12">

   <div class="box" id="showsinhvien">
      <div class="box-header" onclick="">
         <h3 style="font-size: x-large;font-weight: 600;color: #2196F3; float:left;" id="tieude_lop" class="box-title">Danh sách sinh viên</h3>
         <div style="float:right; ">Search: <input id="search_sv" onkeyup="myFunction()" type="text"></div>
      </div>
      <div>
      </div>
      <div class="box-body">
         <div class="row">
            <div class="col-sm-12">
            </div>
         </div>
         <table id="ds_sv" class="table table-bordered table-hover">
         </table>
         <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
            <thead>
               <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width:;">STT</th>
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width:;">Mã sinh viên</th>
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: ;">Họ</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: ;">Tên</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: ;">Lớp</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: ;">Chỉnh Sửa</th>
               </tr>
            </thead>
            <tbody id="myTable">
            	<?php 
            		$stt=0;
				        $result = SHOW_DS_SV($id_gv);
                
				foreach ($result as $row ) {
          # code...
        
				$stt+=1;	
            	?>
               <tr role="row" class="odd">

                  <td class="sorting_1"><?= $stt ?></td>
                  <td>  <?=$row['mssv']?></td>
                  <td><?=$row['hodem']?></td>
                  <td> <?=$row['ten']?></td>
                  <td><?=$row['lop']?></td>
                  <td>
                 
                  </td>

               </tr>
				<?php }?>
            </tbody>
            <tfoot>
            </tfoot>
         </table>
      </div>
   </div>
</div>

	<script type="text/javascript">
			      
         function myFunction() {
           // Declare variables 
           var input, filter, table, tr, td, i;
           input = document.getElementById("search_sv");
           filter = input.value.toUpperCase();
           table = document.getElementById("myTable");
           tr = table.getElementsByTagName("tr");
         
           
           for (i = 0; i < tr.length; i++) {
             td = tr[i].getElementsByTagName("td")[1];
             td1 = tr[i].getElementsByTagName("td")[3];
             if (td) {
               if (td.innerHTML.toUpperCase().indexOf(filter) > -1 || td1.innerHTML.toUpperCase().indexOf(filter) > -1) {
                 tr[i].style.display = "";
               } else {
                 tr[i].style.display = "none";
               }
             } 
           }
         }
      
		</script>