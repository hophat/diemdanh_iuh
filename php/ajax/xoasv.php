<?php
	include('connet_ajax.php');
	error_reporting("all");
	if (!empty($_POST['id_hp']) && !empty($_POST['id_sv'])) {

		$id_hp		= 	$_POST['id_hp'];
		$id_sv		= 	$_POST['id_sv'];
		$result   	=  	XOA_SV($id_sv, $id_hp);
		echo $result;
	}
?>