<?php
	include('connet_ajax.php');
	if (empty($_POST['id_hp'])) {
		exit(0);
	}
	$id_hp		=	 $_POST['id_hp'];
	$result		=	XOA_HP($id_hp);
	echo $result;
?>