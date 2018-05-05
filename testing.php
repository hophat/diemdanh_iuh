<?php 

$query = 'SELECT * FROM diemdanh dd JOIN sinhvien sv ON dd.mssv=sv.mssv JOIN hocphan hp ON dd.id_lophocphan = hp.id_lophocphan order by sv.mssv ';

// echo '<pre>'; print_r(FETCH_ASSOC($query));
$result =  FETCH_ASSOC($query);
	$dem 	=	0;
foreach ($result as $ttdiemdanh) {

			if($ttdiemdanh['buoi1']=='0000-00-00')
			{
				$dem=$dem+1;
			} 
			if($ttdiemdanh['buoi2']=='0000-00-00')
			{
				$dem=$dem+1;
			} 
			if($ttdiemdanh['buoi3']=='0000-00-00')
			{
				$dem=$dem+1;
			} 
			if($ttdiemdanh['buoi4']=='0000-00-00')
			{
				$dem=$dem+1;
			} 
			if($ttdiemdanh['buoi5']=='0000-00-00')
			{
				$dem=$dem+1;
			} 
			if($ttdiemdanh['buoi6']=='0000-00-00')
			{
				$dem=$dem+1;
			} 
			if($ttdiemdanh['buoi7']=='0000-00-00')
			{
				$dem=$dem+1;
			} 
					if($ttdiemdanh['buoi8']=='0000-00-00')
			{
				$dem=$dem+1;
			} 
					if($ttdiemdanh['buoi9']=='0000-00-00')
			{
				$dem=$dem+1;
			} 
					if($ttdiemdanh['buoi10']=='0000-00-00')
			{
				$dem=$dem+1;
			} 
						if($ttdiemdanh['buoi11']=='0000-00-00')
			{
				$dem=$dem+1;
			} 
						if($ttdiemdanh['buoi12']=='0000-00-00')
			{
				$dem=$dem+1;
			} 
						if($ttdiemdanh['buoi13']=='0000-00-00')
			{
				$dem=$dem+1;
			} 
						if($ttdiemdanh['buoi14']=='0000-00-00')
			{
				$dem=$dem+1;
			} 
			if($ttdiemdanh['buoi15']=='0000-00-00')
			{
				$dem=$dem+1;
			} 
			if($dem <= 3){
				continue;
			}
			$ketqua = array(
				'vang' 			=>	$dem,
				'mssv'			=>  $ttdiemdanh['mssv'],
				'hodem'			=>  $ttdiemdanh['hodem'],
				'ten'			=> 	$ttdiemdanh['ten'],
				'lop'			=> 	$ttdiemdanh['lop'],
				'tenhocphan'	=>	$ttdiemdanh['tenhocphan'],
			
			);
		$thongtin[$ttdiemdanh['tenhocphan']][] = $ketqua;
	}
	echo count($thongtin);
	
	foreach ($thongtin as $kq) {

			echo '<pre>';echo count($kq) ;
			print_r($kq);
	}
	//echo '<pre>'; print_r(count($thongtin));
?>