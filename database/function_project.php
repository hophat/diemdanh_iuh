<?php 
//-----------------------------function  sinh vien ----------------------------------------------------------------
function SHOW_SV($maHP='', $id_gv = '')
{
	$maHP 	 = 	SQL_INJECTION($maHP);
	$id_gv 	 = 	SQL_INJECTION($id_gv);
	$hocphan ='';
	if ($maHP !=='') {
		$hocphan = "WHERE hp.id_lophocphan='$maHP'";
	}

	if ( $id_gv != '') {
		$id_gv  = "WHERE hp.id_gv='$id_gv'";
	}

	$query 		=  "SELECT DISTINCT * FROM sinhvien sv JOIN sinhvien_lophocphan svlhp ON sv.mssv=svlhp.mssv JOIN hocphan hp ON hp.id_lophocphan = svlhp.id_lophocphan $hocphan $id_gv ORDER BY sv.ten";

	return (query( $query)) ? FETCH_ASSOC($query) : 'ERROR SHOW_SV' ;
}

function SHOW_DS_SV( $id_gv)
{
	$id_gv		= SQL_INJECTION($id_gv);
	$query 		= "SELECT DISTINCT sv.mssv, sv.hodem, sv.ten, sv.lop
FROM sinhvien sv JOIN sinhvien_lophocphan svlhp ON sv.mssv = svlhp.mssv JOIN hocphan hp ON hp.id_lophocphan = svlhp.id_lophocphan WHERE hp.id_gv = '$id_gv' ORDER BY sv.ten";
	

	return  (query( $query)) ? FETCH_ASSOC($query) : 'ERROR SHOW_DS_SV';
}

function XOA_SV($id_sv, $id_lophocphan)
{
	$id_gv 				=	SQL_INJECTION($id_gv);
	$id_lophocphan 		= 	SQL_INJECTION($id_lophocphan);
	$query="DELETE FROM sinhvien_lophocphan WHERE mssv='$id_sv' and id_lophocphan='$id_lophocphan'";
	query($query);
	$query="DELETE FROM diemdanh WHERE mssv='$id_sv' and id_lophocphan='$id_lophocphan'";
		
	return (query($query)) ? '1' : '0';
}

function CAPNHAT_TT_SV($sua_hodem, $sua_ten, $sua_lop, $mssv)
{
	$sua_hodem	=	SQL_INJECTION($sua_hodem);
	$sua_ten	=	SQL_INJECTION($sua_ten);	
	$mssv		=	SQL_INJECTION($mssv);	
	$sua_lop	=	SQL_INJECTION($sua_lop);
	if($mssv == '' || $mssv == null || $sua_hodem == '' || $sua_ten == '' || $sua_lop == '' ) return 0;
	$query="UPDATE sinhvien SET hodem = '$sua_hodem', ten='$sua_ten', lop='$sua_lop' WHERE mssv='$mssv' ";

	return (query($query)) ? '1' : '0';
}

function THEM_SV($mssv, $hodem, $ten, $lop, $id_hp)
{
	$mssv		=	SQL_INJECTION($mssv);
	$hodem 		=	SQL_INJECTION($hodem);
	$ten 		=	SQL_INJECTION($ten);
	$lop 		=	SQL_INJECTION($lop);
	$id_hp 		=	SQL_INJECTION($id_hp);
	if($mssv == '' || $mssv == null || $hodem == '' || $ten == '' ) return 0;
	$query   	=	  "INSERT INTO `sinhvien`(`mssv`, `hodem`, `ten`, `lop`) VALUES ('$mssv','$hodem','$ten','$lop')";
	insert($query);
	$query   =  "INSERT INTO `sinhvien_lophocphan`(`mssv`, `id_lophocphan`) VALUES ('$mssv','$id_hp')";
	insert($query);
	$query   =  "INSERT INTO `diemdanh`(`mssv`, `id_lophocphan`) VALUES ('$mssv','$id_hp')";

	return (insert($query)) ? '1' : '0';
}

 function THONGKE_SO_SV($id_gv)
{
	(is_numeric($id_gv) == true) ? $id_gv : '';
	 $query="SELECT mssv from  sinhvien_lophocphan sv_lhp JOIN hocphan hp on sv_lhp.id_lophocphan = hp.id_lophocphan JOIN giangvien gv on gv.id_gv = hp.id_gv WHERE gv.id_gv='$id_gv' GROUP by mssv";

	return (query($query)) ? query($query)->rowCount() : 'ERROR THONGKE_SO_SV';	
}

//--------------------
//---------------------------------Function giang vien------------------------------------------
 function THONGKE_SO_HP($id_gv)
{
	(is_numeric($id_gv) == true) ? $id_gv : '';	
	$query 			=  "SELECT id_lophocphan from hocphan where id_gv='$id_gv'";
	
	return 	(query( $query)) ? query( $query)->rowCount() : 'ERROR THONGKE_SO_HP';
}
function SHOW_TT_GV($id_gv)
{
	(is_numeric($id_gv) == true) ? $id_gv : '';
	$query="select * from giangvien where id_gv='$id_gv'";

	return (query($query)) ?  query($query)->fetchAll()[0] : 'ERROR SHOW_TT_GV'; 
}
//-------------------------------------
//----------------------------- function hoc phan ----------------------------------------------------------------
function SHOW_HP_edit($id_hp, $id_gv)
{
	(is_numeric($id_gv) == true) ? $id_gv : '';
	(is_numeric($id_hp) == true) ? $id_hp : '';
	$query="SELECT * FROM `hocphan` hp JOIN giangvien gv on hp.id_gv=gv.id_gv where gv.id_gv='$id_gv' and id_lophocphan='$id_hp'";

	return (query( $query)) ? $kq->fetchAll()[0] : 'ERROR SHOW_HP_edit';
}

function XOA_HP($id_hp)
{
	$id_hp 	=	SQL_INJECTION($id_hp);
	$query="DELETE FROM sinhvien_lophocphan WHERE id_lophocphan='$id_hp'";
	query($query);
	$query="DELETE FROM diemdanh WHERE id_lophocphan='$id_hp'";
	query($query);
	$query="DELETE FROM hocphan WHERE id_lophocphan='$id_hp'";

	return (query($query)) ? '1': '0';
}
function FORMAT_tiethoc($txttiet)
{
	if(strlen($txttiet) < 5 ) {
		$txttietdau=substr($txttiet,0,1);
		$txttietdau=(int)$txttietdau;
		$txttietcuoi=substr($txttiet,2);
		$txttietcuoi=(int)$txttietcuoi;
	} else {
		$txttietdau=substr($txttiet,0,2);
		$txttietdau=(int)$txttietdau;
		$txttietcuoi=substr($txttiet,3);
		$txttietcuoi=(int)$txttietcuoi;
	}
		return $array = array(
			'dau' => $txttietdau,
			'cuoi'  => $txttietcuoi
		);
		
}

function SHOW_TT_HP($id_gv, $where ='', $thu ='')
{
	$id  	=  	SQL_INJECTION($id_gv);
	if ($where !='') {
		$where = "AND `id_lophocphan` = '$where'";
	}
	if ($thu !='') {
		$thu = "AND `thu` = $thu";
	}
	$query = "select * from hocphan where id_gv='$id_gv' $where $thu ";
	if (query($query)->rowCount()  < 1) {
		return 'Không có hoc phần';
	}
	$result = query($query)->fetchAll();

	foreach ($result as $row) {
		$batdau=date_create($row['batdau_mon']);
		$ketthuc=date_create($row['ketthuc_mon']);
		$batdau=date_format($batdau,'d/m/Y');
		$ketthuc=date_format($ketthuc,'d/m/Y');

		switch ($row['thu']) {
			case '1': $row['thu']	=	'Chủ nhật';
				break;
			case '2': $row['thu']	=	'Thứ hai';
				break;
			case '3': $row['thu']	=	'Thứ ba';
				break;
			case '4': $row['thu']	=	'Thứ tư';
				break;
			case '5': $row['thu']	=	'Thứ năm';
				break;
			case '6': $row['thu']	=	'Thuứ sáu';
				break;
			case '7': $row['thu']	=	'Thứ bảy';
				break;
			
		}

		 $array[] =  array(
		'thu'			 	=> 	$row['thu'] ,
		'tenhocphan' 		=> 	$row['tenhocphan'] ,
		'id_lophocphan' 	=> 	$row['id_lophocphan'],
		'ten_lop' 			=> 	$row['ten_lop'],
		'batdau'			=>  $batdau,
		'ketthuc'			=>  $ketthuc,
		'phong'				=>  $row['phong'],
		'thu'				=>  $row['thu'],								
		'tiet_bd'			=>  $row['tiet_bd'],							
		'tiet_kt'			=>  $row['tiet_kt']							
					);
	}
	return $array;
}
//--------------------

//---------------------------------function diem danh--------------------------------------------------
function SHOW_TT_DIEMDANH($id_lophocphan)
{
	(is_numeric($id_lophocphan) == true ) ? $id_lophocphan : '';
	$query = "SELECT * FROM sinhvien sv JOIN sinhvien_lophocphan svlhp on sv.mssv = svlhp.mssv 
	JOIN hocphan hp on hp.id_lophocphan = svlhp.id_lophocphan 
	JOIN diemdanh dd on sv.mssv = dd.mssv WHERE dd.id_lophocphan='$id_lophocphan' group by sv.mssv order by sv.ten ";
	if(query($query)->rowCount() < 1) {
		return '';
	}
	$ketqua				= 	query($query)->fetchAll();
	$thongtin_dd		= 	array();
	foreach ($ketqua as $sinhvien) {
		$tt_sinhvien 	= 	array(
		"buoi1" 		=>	 $sinhvien['buoi1'],
		"buoi2" 		=>	 $sinhvien['buoi2'],
		"buoi3" 		=>	 $sinhvien['buoi3'],
		"buoi4" 		=>	 $sinhvien['buoi4'],
		"buoi5" 		=>	 $sinhvien['buoi5'],
		"buoi6" 		=>	 $sinhvien['buoi6'],
		"buoi7" 		=>	 $sinhvien['buoi7'],
		"buoi8" 		=>	 $sinhvien['buoi8'],
		"buoi9" 		=>	 $sinhvien['buoi9'],
		"buoi10" 		=>	 $sinhvien['buoi10'],
		"buoi11" 		=>	 $sinhvien['buoi11'],
		"buoi12" 		=>	 $sinhvien['buoi12'],
		"buoi13" 		=>	 $sinhvien['buoi13'],
		"buoi14" 		=>	 $sinhvien['buoi14'],
		"buoi15" 		=>	 $sinhvien['buoi15'],
		"hodem"			=>	 $sinhvien['hodem'],
		"mssv"			=>	 $sinhvien['mssv'],
		"ten"			=> 	 $sinhvien['ten'],
		"lop"			=> 	 $sinhvien['lop'],
		"tenlophocphan"	=>   $sinhvien['ten_lop']
		); 

		$thongtin_dd[]	=	$tt_sinhvien;
	}

	return 	$thongtin_dd;
}
function TEST_SV_DD($mssv, $id_lophocphan) 
{	
	$mssv  			=	SQL_INJECTION($mssv);
	$id_lophocphan	=	SQL_INJECTION($id_lophocphan);
	$query 			= 	"select mssv from sinhvien_lophocphan where mssv = '$mssv' and id_lophocphan ='$id_lophocphan'";

	return 	(query($query)) ?  query($query)->rowCount() : 'ERROR TEST_SV_DD' ;	
}
function TEST_DD( $mssv, $id_lophocphan, $buoi_dd)
{
	$mssv  			=	SQL_INJECTION($mssv);
	$id_lophocphan	=	SQL_INJECTION($id_lophocphan);
	$query     = "SELECT * from diemdanh where mssv = '$mssv' and id_lophocphan ='$id_lophocphan'";

	return (query($query)) ? query($query)->fetchAll()[0][$buoi_dd] : 'ERROR TEST_DD';
}
function DIEM_DANH( $date_diemdanh, $mssv, $id_lophocphan, $days )
{
	$mssv  			=	SQL_INJECTION($mssv);
	$id_lophocphan	=	SQL_INJECTION($id_lophocphan);
	switch ($date_diemdanh) 
	{
		case $days['buoi1']: $buoi_dd = 'buoi1';
			break;
		case $days['buoi2']: $buoi_dd = 'buoi2';
			break;
		case $days['buoi3']:$buoi_dd = 'buoi3';
			break;
		case $days['buoi4']: $buoi_dd = 'buoi4';
			break;
		case $days['buoi5']: $buoi_dd = 'buoi5';
			break;
		case $days['buoi6']: $buoi_dd = 'buoi6';
			break;
		case $days['buoi7']: $buoi_dd = 'buoi7';
			break;
		case $days['buoi8']: $buoi_dd = 'buoi8';
			break;
		case $days['buoi9']: $buoi_dd = 'buoi9';
			break;
		case $bdays['buoi10']: $buoi_dd = 'buoi10';
			break;
		case $bdays['buoi11']: $buoi_dd = 'buoi11';
			break;
		case $bdays['buoi12']: $buoi_dd = 'buoi12';
			break;
		case $bdays['buoi13']: $buoi_dd = 'buoi13';
			break;
		case $bdays['buoi14']: $buoi_dd = 'buoi14';
			break;
		case $days['buoi15']: $buoi_dd = 'buoi15';
			break;
		default: return 0;
	}
	
	$test_day = TEST_DD($mssv, $id_lophocphan, $buoi_dd);
	if(!empty($test_day)) {
		return 2;
	}
		$query="UPDATE diemdanh SET $buoi_dd='$date_diemdanh' where $buoi_dd IS NULL and mssv = '$mssv' and id_lophocphan ='$id_lophocphan'";
 
		return (query($query)) ? '1' : '0';
		
}

function GET_DAYS($mahp)
{
	$mahp		=	SQL_INJECTION($mahp);
	$query 	 	= "select thu,batdau_mon from hocphan where id_lophocphan='$mahp'"; 
	$result 	= query($query)->fetchAll();
	$result 	= $result[0];
	$batdau_mon = $result['batdau_mon'];
	$thu 		= $result['thu'];
	switch ($thu) 
	{
		case 2 :
			$buoi = explode ('-', $batdau_mon);
			$buoi = mktime(0, 0, 0, $buoi[1], ($buoi[2]), $buoi[0]);
		 	$buoi = date('Y-m-d',$buoi);
			break;
		case 3 :
			$buoi = explode ('-', $batdau_mon);
			$buoi = mktime(0, 0, 0, $buoi[1], ($buoi[2]+1), $buoi[0]);
			$buoi = date('Y-m-d',$buoi);
			break;
		case 4:
				$buoi = explode ('-', $batdau_mon);
				$buoi = mktime(0, 0, 0, $buoi[1], ($buoi[2]+2), $buoi[0]);
			 	$buoi = date('Y-m-d',$buoi);
			break;
		case 5 :
				$buoi = explode ('-', $batdau_mon);
				$buoi = mktime(0, 0, 0, $buoi[1], ($buoi[2]+3), $buoi[0]);
			 	$buoi = date('Y-m-d',$buoi);
			break;
		case 6 :
				$buoi = explode ('-', $batdau_mon);
				$buoi = mktime(0, 0, 0, $buoi[1], ($buoi[2]+4), $buoi[0]);
			 	$buoi = date('Y-m-d',$buoi);
			break;
		case 7 :	
				$buoi = explode ('-', $batdau_mon);
				$buoi = mktime(0, 0, 0, $buoi[1], ($buoi[2]+5), $buoi[0]);
			 	$buoi = date('Y-m-d',$buoi);
			break;
		case 1 :
				$buoi = explode ('-', $batdau_mon);
				$buoi = mktime(0, 0, 0, $buoi[1], ($buoi[2]+6), $buoi[0]);
			 	$buoi = date('Y-m-d',$buoi);
			break;
	}
		$i = 1;
		$j = 0;
		$buoi = explode ('-', $buoi);

		while ($i <= 15) {

			${"buoi".$i} = mktime(0, 0, 0, $buoi[1], ($buoi[2]) + $j*7, $buoi[0]);
			${"buoi".$i} = date('Y-m-d', ${"buoi".$i} );
			$i++;
			$j++;
		}
		
		$day = array(
		"buoi1" 	=>	 "$buoi1",
		"buoi2" 	=>	 "$buoi2",
		"buoi3" 	=>	 "$buoi3",
		"buoi4" 	=>	 "$buoi4",
		"buoi5" 	=>	 "$buoi5",
		"buoi6" 	=>	 "$buoi6",
		"buoi7" 	=>	 "$buoi7",
		"buoi8" 	=>	 "$buoi8",
		"buoi9" 	=>	 "$buoi9",
		"buoi10" 	=>	 "$buoi10",
		"buoi11" 	=>	 "$buoi11",
		"buoi12" 	=>	 "$buoi12",
		"buoi13" 	=>	 "$buoi13",
		"buoi14" 	=>	 "$buoi14",
		"buoi15" 	=>	 "$buoi15"
	);
		return $day;
		
}
function DANHVANG_SV($id_lophocphan, $so)
{
	$id_lophocphan	=	SQL_INJECTION($id_lophocphan);
	$test_buoi = 'buoi'.$so;

    $qr    =  "SELECT DISTINCT $test_buoi FROM `diemdanh` WHERE $test_buoi is NOT null and id_lophocphan='$id_lophocphan'";
    $count =  query($qr)->rowCount();
   
    if ($count != 1) {
    	return 0;
    }
     $up   =  "UPDATE `diemdanh` SET $test_buoi = 1 WHERE $test_buoi is null and id_lophocphan='$id_lophocphan'";
   
   	return (query($up)) ? '1' : 'ERROR DANHVANG_SV';
    
}

function EDIT_DD($id_lophocphan, $mssv, $buoi, $loai_dd)
{
	$mssv  			=	SQL_INJECTION($mssv);
	$id_lophocphan	=	SQL_INJECTION($id_lophocphan);
	$loai_dd		=	SQL_INJECTION($loai_dd);

	(is_numeric($id_lophocphan)  == true) ? $id_lophocphan : 0;
	$id_lophocphan		=	SQL_INJECTION($id_lophocphan);
	$mssv				=	SQL_INJECTION($mssv);
	(is_numeric($loai_dd)	==	true)? $loai_dd : '';
	if ($loai_dd === 'null') {
			$date_edit = NULL;
			$query 			=	 "UPDATE `diemdanh` SET `$buoi` = NULL WHERE `diemdanh`.`mssv` = '$mssv' AND `diemdanh`.`id_lophocphan` 		= $id_lophocphan ";
			
			return (query($query)) ? '1' : '0';
		}

	if ($loai_dd === '1') {
			$date_edit 		= 	date('Y-m-d');
		}

	if ($loai_dd === '2') {
			$date_edit = '1';
		}

	$query 			=	 "UPDATE `diemdanh` SET `$buoi` = '$date_edit' WHERE `diemdanh`.`mssv` = '$mssv' AND `diemdanh`.`id_lophocphan` 		= $id_lophocphan ";

	return (query($query)) ? '1' :'0';
}
//------------------------------------------Site_search------------------------------------------------------------------
function SEARCH_SV_BUOIHOC($mssv) 
{
	(is_numeric($mssv) == true ) ? $mssv : '' ;

	$query 	=	"SELECT * FROM diemdanh dd JOIN sinhvien sv ON dd.mssv=sv.mssv JOIN hocphan hp ON dd.id_lophocphan = hp.id_lophocphan WHERE dd.mssv = $mssv ";
	$result	=	FETCH_ASSOC($query);
	if(query($query)->rowCount() < 1) {
		return '';
	}
	$thongtin = array();

	foreach ($result as $ttdiemdanh) {
		$dem 	=	0;
		$dihoc	=	0;

			if($ttdiemdanh['buoi1']=='0000-00-00')
			{
				$dem=$dem+1;
			} 
			 if ($ttdiemdanh['buoi1'] != null) {
				$dihoc+=1;
			}
			if($ttdiemdanh['buoi2']=='0000-00-00')
			{
				$dem=$dem+1;
			} 
			 if ($ttdiemdanh['buoi2'] != null) {
				$dihoc+=1;
			}
			if($ttdiemdanh['buoi3']=='0000-00-00')
			{
				$dem=$dem+1;
			} 
			 if ($ttdiemdanh['buoi3'] != null) {
				$dihoc+=1;
			}
			if($ttdiemdanh['buoi4']=='0000-00-00')
			{
				$dem=$dem+1;
			} 
			if ($ttdiemdanh['buoi4'] != null) {
				$dihoc+=1;
			}
			if($ttdiemdanh['buoi5']=='0000-00-00')
			{
				$dem=$dem+1;
			} 
			if ($ttdiemdanh['buoi5'] != null) {
				$dihoc+=1;
			}
			if($ttdiemdanh['buoi6']=='0000-00-00')
			{
				$dem=$dem+1;
			} 
		 	if ($ttdiemdanh['buoi6'] != null) {
				$dihoc+=1;
			}
			if($ttdiemdanh['buoi7']=='0000-00-00')
			{
				$dem=$dem+1;
			} 
			 if ($ttdiemdanh['buoi7'] != null) {
				$dihoc+=1;
			}
					if($ttdiemdanh['buoi8']=='0000-00-00')
			{
				$dem=$dem+1;
			} 
			 if ($ttdiemdanh['buoi8'] != null) {
				$dihoc+=1;
			}
					if($ttdiemdanh['buoi9']=='0000-00-00')
			{
				$dem=$dem+1;
			} 
			 if ($ttdiemdanh['buoi9'] != null) {
				$dihoc+=1;
			}
					if($ttdiemdanh['buoi10']=='0000-00-00')
			{
				$dem=$dem+1;
			} 
			 if ($ttdiemdanh['buoi10'] != null) {
				$dihoc+=1;
			}
						if($ttdiemdanh['buoi11']=='0000-00-00')
			{
				$dem=$dem+1;
			} 
			 if ($ttdiemdanh['buoi11'] != null) {
				$dihoc+=1;
			}
						if($ttdiemdanh['buoi12']=='0000-00-00')
			{
				$dem=$dem+1;
			} 
			 if ($ttdiemdanh['buoi12'] != null) {
				$dihoc+=1;
			}
						if($ttdiemdanh['buoi13']=='0000-00-00')
			{
				$dem=$dem+1;
			} 
			 if ($ttdiemdanh['buoi13'] != null) {
				$dihoc+=1;
			}
						if($ttdiemdanh['buoi14']=='0000-00-00')
			{
				$dem=$dem+1;
			} 
			 if ($ttdiemdanh['buoi14'] != null) {
				$dihoc+=1;
			}
			if($ttdiemdanh['buoi15']=='0000-00-00')
			{
				$dem=$dem+1;
			} 
			 if ($ttdiemdanh['buoi15'] != null) {
				$dihoc+=1;
			}
			$ketqua = array(
				'vang' 			=>	$dem,
				'mssv'			=>  $ttdiemdanh['mssv'],
				'hodem'			=>  $ttdiemdanh['hodem'],
				'ten'			=> 	$ttdiemdanh['ten'],
				'lop'			=> 	$ttdiemdanh['lop'],
				'tenhocphan'	=>	$ttdiemdanh['tenhocphan'],
				'dihoc'			=> 	$dihoc
			);
		$thongtin[] = $ketqua;
	}
	return $thongtin;
}
//--------------------------------------------------------------------------
//------------------------------------------function he thong-------------------------------------------------------------


function CHECK_login($myusername, $mypassword)
{

	$myusername		= 	stripslashes($myusername);
	$mypassword 	= 	stripslashes($mypassword);
	$myusername		=	SQL_INJECTION($myusername);
	$mypassword		=	SQL_INJECTION($mypassword);
	$mypassword 	= 	md5($mypassword);

	$sql			= 	"SELECT * FROM giangvien WHERE tengv='$myusername' and password='$mypassword'";
	
	$result 		= 	query( $sql);
	$count  		= 	$result->rowCount();

	if ($count != 1) {
		return 0;

	}
	$query 					= 	"SELECT * FROM giangvien WHERE tengv='$myusername' and password='$mypassword'";
	$giangvien				=	query($query)->fetchAll();
	$gv						=	$giangvien[0];
		
	return 	$gv['id_gv'] ;
		
	
}


?>