<?php
include('connet_ajax.php');
if(!isset($_SESSION["myusername"])){
header("location:../../index.php");
}
	if( !empty($_POST['id_lophocphan']) && !empty($_POST['buoi']) && !empty($_POST['mssv']) && !empty($_POST['loai_dd'])) {

		date_default_timezone_set('Asia/Ho_Chi_Minh');

		$id_lophocphan 	=	$_POST['id_lophocphan'];

		$mssv 			=	$_POST['mssv'];

		$loai_dd		=	$_POST['loai_dd'];

		$buoi 			=	'buoi'.$_POST['buoi'];

		echo EDIT_DD($id_lophocphan, $mssv, $buoi, $loai_dd);
	 }
	
	 		
?>