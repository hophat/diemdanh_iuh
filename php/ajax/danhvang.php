<?php
include('connet_ajax.php');
	if( !empty($_POST['id_hp'])) {
		 error_reporting("all");
		$id_lophocphan   =   $_POST['id_hp'];
			
		$days = GET_DAYS( $id_lophocphan );

		$i = 1;
		while ($i <= 15) {
			
			${"buoi".$i} = $days['buoi'.$i];
			
			$i++;
		}
			
	 	$date  =  date('Y-m-d');

	 	if ($date > $buoi1) {
	 		echo	DANHVANG_SV($id_lophocphan, 1 );
	 	}
	 	if ($date > $buoi2) {
	 		echo	DANHVANG_SV($id_lophocphan, 2 );
	 	}
	 	if ($date > $buoi3) {
	 		echo	DANHVANG_SV($id_lophocphan, 3 );
	 	}
	 	if ($date > $buoi4) {
	 		echo	DANHVANG_SV($id_lophocphan, 4 );
	 	}
	 	if ($date > $buoi5) {
	 		echo	DANHVANG_SV($id_lophocphan, 5 );
	 	}
	 	if ($date > $buoi6) {
	 		echo 	DANHVANG_SV($id_lophocphan, 6 );
	 	}
	 	if ($date > $buoi7) {
	 		echo 	DANHVANG_SV($id_lophocphan, 7 );
	 	}
	 	if ($date > $buoi8) {
	 		echo 	DANHVANG_SV($id_lophocphan, 8 );
	 	}
	 	if ($date > $buoi9) {
	 		echo 	DANHVANG_SV($id_lophocphan, 9 );
	 	}
	 	if ($date > $buoi10) {
	 		echo 	DANHVANG_SV($id_lophocphan, 10 );
	 	}
	 	if ($date > $buoi11) {
	 		echo 	DANHVANG_SV($id_lophocphan, 11 );
	 	}
	 	if ($date > $buoi12) {
	 		echo 	DANHVANG_SV($id_lophocphan, 12 );
	 	}
	 	if ($date > $buoi13) {
	 		echo 	DANHVANG_SV($id_lophocphan, 13 );
	 	}
	 	if ($date > $buoi14) {
	 		echo 	DANHVANG_SV($id_lophocphan, 14 );
	 	}
	 	if ($date > $buoi15) {
	 		echo 	DANHVANG_SV($id_lophocphan, 15 );
	 	}
	 		
	 						
	 }
	
	 		
?>