<?php
	error_reporting("all");
	include('import_library.php');
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	//lấy thứ trong tuần
				$weekday = date("l");
			$weekday = strtolower($weekday);
			switch($weekday) {
				case 'monday':
					$weekday = '2';
					break;
				case 'tuesday':
					$weekday = '3';
					break;
				case 'wednesday':
					$weekday = '4';
					break;
				case 'thursday':
					$weekday = '5';
					break;
				case 'friday':
					$weekday = '6';
					break;
				case 'saturday':
					$weekday = '7';
					break;
				default:
					$weekday = '1';
					break;
			}
		//error_reporting("all");
		if(!isset($_SESSION["myusername"])){
		header("location:index.php");
		}

		$id_gv	=	$_SESSION["myusername"];

	$hocphan	=	SHOW_TT_HP($id_gv, '', $weekday);
	$str="<ul  >";
	foreach ($hocphan as $hocphan) 
	{
	
		$str.='<li style="float:left; border-radius:8px;"onclick="scan('.$hocphan['id_lophocphan'].')">Điểm danh</li> ';
		
	}
	$str.="</ul>";
	
	echo $str;
?>