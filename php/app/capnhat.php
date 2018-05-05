<?php
	include('import_library.php');
	error_reporting('all');
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	if (!isset($_SESSION["myusername"])) {
		exit();
	}
	if (empty($_POST['mssv']) || empty($_POST['id_lophocphan']) || empty($_POST['time'])) {
		exit();
	}

	$date_diemdanh	=	$_POST['time'];
	$mssv			=	$_POST['mssv'];
	$id_lophocphan	=	$_POST['id_lophocphan'];
	$days			=	GET_DAYS($id_lophocphan);
	$test_sv		=	TEST_SV_DD($mssv, $id_lophocphan);

	if ($test_sv 	== 1) {
		echo DIEM_DANH($date_diemdanh, $mssv, $id_lophocphan, $days);
	} else {

		echo 0;
	}				
?>
