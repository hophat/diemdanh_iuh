<?php
	include('import_library.php');
	error_reporting('all');
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	if (!isset($_SESSION["myusername"])) {
		exit();
	}

	if (empty($_POST['mssv']) || empty($_POST['id_lophocphan'])) {
		exit();
	}

	$mssv 			=	$_POST['mssv'];
	$id_lophocphan 	= 	$_POST['id_lophocphan'];
	$date_diemdanh	= 	date('Y-m-d');//lay ngay hien tai
	$days 			= 	GET_DAYS($id_lophocphan); // lấy 15 buổi học
	$kq  			= 	TEST_SV_DD($mssv, $id_lophocphan);

	if ($kq === 1) {
		$ket_qua 	= 	DIEM_DANH($date_diemdanh, $mssv, $id_lophocphan, $days);
		echo $ket_qua;
		} else {
		echo 0;
	}	
?>
