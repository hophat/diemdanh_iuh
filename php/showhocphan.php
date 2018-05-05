<?php
$st_hp=100;
	
	$hocphan = SHOW_TT_HP($id_gv);
	if(!empty($hocphan)) {
	foreach ($hocphan as $hp) 
		{
			$st_hp+=1;
?>
			
			<tr style="cursor: pointer; role="row" class="odd ">
			<td class="sorting_1" onclick="link_hp(<?=$hp['id_lophocphan']?>)"><?=$hp['id_lophocphan'] ?></td>
				<td onclick="link_hp(<?=$hp['id_lophocphan']?>)"><?=$hp['tenhocphan'] ?></td>
				<td onclick="link_hp(<?=$hp['id_lophocphan']?>)"><?=$hp['ten_lop']?></td>
				<td onclick="link_hp(<?=$hp['id_lophocphan']?>)"><?=$hp['batdau'] ?></td>
				<td onclick="link_hp(<?=$hp['id_lophocphan']?>)"><?=$hp['ketthuc'] ?></td>
				<td onclick="link_hp(<?=$hp['id_lophocphan']?>)"><?=$hp['phong'] ?></td>
				<td onclick="link_hp(<?=$hp['id_lophocphan']?>)"><?=$hp['thu'] ?> </td>
				<td ><?=$hp['tiet_bd']?>-<?=$hp['tiet_kt']?></td>

				<td>
					
						 <label  class="btn-info icon_them" data-toggle="modal" data-target="#modal-info-<?=$hp['id_lophocphan']?>">
			               <span class="glyphicon glyphicon-plus"></span>
			              </label>

							<span   onclick="xoahp(<?=$hp['id_lophocphan']?>)"
									 class="glyphicon glyphicon-remove"></span>

						<a  onclick="sua_hp(<?=$hp['id_lophocphan']?>)"  style="cursor: pointer" data-toggle="dropdown" aria-expanded="false"  class=" dropdown-toggle " > 
					 <span class="glyphicon glyphicon-edit "></span>
					</a>
						 
					<?php include('view_chucnang/view_them_sv.php'); ?>
				

				 </td>
			</tr>
                
<?php
			 	} 
	}
?>

							
			