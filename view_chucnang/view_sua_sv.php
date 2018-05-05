
<div class="modal modal-info fade" id="<?=$id_edit?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Thông Tin Sinh Viên</h4>
      </div>
      <div class="modal-body" >

      <li id="<?=$row['mssv']?>" class="li_add_sv">
        lớp : 
    	<input type="text" class="form-control " value="<?=$row['lop']?>"
                       class="form-control"  placeholder="lop">
        MSSV :
			<input type="text" disabled class="form-control " value="<?=$row['mssv']?>"
                       class="form-control"  placeholder="mssv">
        Họ : 
			<input type="text" class="form-control " value="<?=$row['hodem']?>"
                       class="form-control"  placeholder="hodem">
        Tên :
			<input type="text" class="form-control "  value="<?=$row['ten']?>"
                       class="form-control" placeholder="ten">
		</li>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-outline" data-dismiss="modal" onclick="suathongtin(<?=$row['mssv']?>,<?= $row['id_lophocphan']?>)">Save changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
</div>
