<div class="col-xs-12">
   <div class="box ds_ph">
      <div class="box-header">
         <h3 class="box-title" style="font-size: x-large;font-weight: 600;color: #2196F3; float:left; ">Danh sách lớp học phần</h3>
         <div style="float: right;" class="col-xs-3">
            <a href="trangchu-site_nhaphocphan" style="    background-color: rgb(236, 42, 89);border: 0; " class=" btn btn-block btn-warning btn-lg"><i class="fa fa-fw fa-file-o"></i>Tạo lớp học phần </a> 
         </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
         <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row">
               <div class="col-sm-6"></div>
               <div class="col-sm-6"></div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                     <thead>
                        <tr role="row">
                           <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Mã học phần</th>
                           <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Học phần</th>
                           <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Lớp</th>
                           <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Bất Đầu</th>
                           <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Kết thúc</th>
                           <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Phòng</th>
                           <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Thứ</th>
                           <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Tiết</th>
                           <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Tùy chọn</th>
                        </tr>
                     </thead>
                     <tbody id="showhocphan" style="font-size:20px; ">
                     	<?php

                     	include('php/showhocphan.php');
                     	?>

                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="box" id="showsinhvien" >
	  	 <?php
	      include('php/show_ds_sinhvien.php');
	      ?>
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
             td = tr[i].getElementsByTagName("td")[4];
             td1 = tr[i].getElementsByTagName("td")[2];
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