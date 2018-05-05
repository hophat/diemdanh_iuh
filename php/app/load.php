<?php
	include('import_library.php');
		//error_reporting("all");
		if(!isset($_SESSION["myusername"])){
		header("location:index.php");
		}

		$id_gv		=	$_SESSION["myusername"];
		$maHP 		=	$_POST['ma_HP'];
	
		$result		=	SHOW_TT_DIEMDANH($maHP);
		$table 		=	"<table style=' border-collapse: collapse;width: 100%;'>";
		$table		.=	'<tr style="    font-size: x-large; background:rgba(18, 114, 224, 0.64);"><th style="width:3%;padding-left:8%; color:#fff;"><b>Mã sv</b></th>
		<th style="padding-left:8%; color:#fff;"><b> Họ và tên</b></th>
		<th style="padding-left:1%; color:#fff;"><b> Vắng</b></th>
		</tr>';

		foreach ($result as $sinhvien) {
			$dem=0;
			if ($sinhvien['buoi1']=='0000-00-00') {
				$dem=$dem+1;
			}
			if ($sinhvien['buoi2']=='0000-00-00') {
				$dem=$dem+1;
			}
			if ($sinhvien['buoi3']=='0000-00-00') {
				$dem=$dem+1;
			}
			if ($sinhvien['buoi4']=='0000-00-00') {
				$dem=$dem+1;
			}
			if ($sinhvien['buoi5']=='0000-00-00') {
				$dem=$dem+1;
			}
			if ($sinhvien['buoi6']=='0000-00-00') {
				$dem=$dem+1;
			}
			if ($sinhvien['buoi7']=='0000-00-00') {
				$dem=$dem+1;
			}
			if ($sinhvien['buoi8']=='0000-00-00') {
				$dem=$dem+1;
			}
			if ($sinhvien['buoi9']=='0000-00-00') {
				$dem=$dem+1;
			}
			if ($sinhvien['buoi10']=='0000-00-00') {
				$dem=$dem+1;
			}
			if ($sinhvien['buoi11']=='0000-00-00') {
				$dem=$dem+1;
			}
			if ($sinhvien['buoi12']=='0000-00-00') {
				$dem=$dem+1;
			}
			if ($sinhvien['buoi13']=='0000-00-00') {
				$dem=$dem+1;
			}
			if ($sinhvien['buoi14']=='0000-00-00') {
				$dem=$dem+1;
			}
			if ($sinhvien['buoi15']=='0000-00-00') {
				$dem=$dem+1;
			}
			
			$table.='<tr style=" background:rgba(238, 238, 238, 0.53);"><td>'.$sinhvien['mssv'].'</td><td>'.$sinhvien['hodem'].' '.$sinhvien['ten'].'</td>

			<td>'.$dem.'</td>
			</tr>';
		}

		$table.="<table>";
		
		echo $table;
?>
