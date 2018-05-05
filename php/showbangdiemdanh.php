<?php
	$hocphan = SHOW_TT_HP($id_gv);
	foreach ($hocphan as $hp ) {
	//	print_r($hocphan);die;
		//print_r($hocphan);die;
	
?>
			<tr style="cursor: pointer; role="row" class="odd">
			<td class="sorting_1" onclick="link_dd(<?=$hp['id_lophocphan']?>)">
				<?=$hp['id_lophocphan']?>
					
			</td>
				<td onclick="link_dd(<?=$hp['id_lophocphan']?>)">  
					<?=$hp['tenhocphan']?></td>
				<td onclick="link_dd(<?=$hp['id_lophocphan']?>)"> 
					<?=$hp['ten_lop']?></td>
				<td onclick="link_dd(<?=$hp['id_lophocphan']?>)"> 
					<?=$hp['batdau']?></td>
				<td onclick="link_dd(<?=$hp['id_lophocphan']?>)"> 
					<?=$hp['ketthuc']?></td>
				<td onclick="link_dd(<?=$hp['id_lophocphan']?>)"> 
					<?=$hp['phong']?></td>
				<td onclick="link_dd(<?=$hp['id_lophocphan']?>)"> 
					<?=$hp['thu']?> </td>
				<td >
					<?=$hp['tiet_bd']?>-<?=$hp['tiet_kt']?></td>

				<td >
					<span  style="padding-left: 2%;" onclick="xoahp(<?=$hp['id_lophocphan']?>)"
				 class="glyphicon glyphicon-remove"></span>
                  <label  class="btn-info icon_them" data-toggle="modal" data-target="#modal-info-<?=$hp['id_lophocphan']?>">
			               <span class="glyphicon glyphicon-plus"></span>
			              </label>

            
                <span  style="padding-left: 2%;" onclick="xuat_file(<?=$hp['id_lophocphan']?>)"
				 class="glyphicon glyphicon-floppy-save"></span>
				 <?php include('view_chucnang/view_them_sv.php'); ?>
				 </td>
				</tr>

<?php
	}
?>              
		
	    
