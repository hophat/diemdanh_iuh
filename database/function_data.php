<?php
//===================================== FUNCTION Tự định nghĩa ============================================
//=========================================================================================================
//=========================================================================================================
//=========================================================================================================

//--------- Kết nối cở sở dữ liệu mysql --------------------------------------------------------

	function CONNECT_MYSQL($dsn,$account,$passw)
	{
		$options = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		);
		// Create a new PDO instanace
		try {
		$db = new PDO($dsn, $account, $passw, $options);
		
		return $db;
		}
		// Catch any errors
		catch (PDOException $e) {
		
		echo '<lable style="color : red">'.$e->getMessage().'</lable>';
		
		exit();
		}
	}
//----------------

// ------- Fetch_assoc trả kiểu dữ liệu về kiểu mảng ['tên_cột_trong_table'=>'giá_trị']---------
	
	 function FETCH_ASSOC( $query)
	 {
	 	GLOBAL $conn;
	 	try {
				$stmt = $conn->prepare($query);
				//Thiết lập kiểu dữ liệu trả về
				$stmt->setFetchMode(PDO::FETCH_ASSOC);
				$stmt->execute();
				$resultSet = $stmt->fetchAll();
				/*Trong trường hợp chưa setFetchMode() bạn có thể sử dụng
				$resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);*/
				
				return $resultSet;
			}
		catch (PDOException $e) {
			
			echo '<lable style="color : red">'.$query.'</br>'. $e->getMessage().'</lable>';
			
			exit();
			}
	 }
// -----------------

// ------- Fetch_assoc trả kiểu dữ liệu về kiểu mảng ['tên_cột_trong_table'=>'giá_trị']---------
	 function FETCH_ALL( $query)
	 {
	 	GLOBAL $conn;
	 	try {
				$stmt = $conn->prepare($query);
				//Thiết lập kiểu dữ liệu trả về
				//$stmt->setFetchMode(PDO::FETCH_ASSOC);
				$stmt->execute();
				$resultSet = $stmt->fetchAll();
				/*Trong trường hợp chưa setFetchMode() bạn có thể sử dụng
				$resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);*/
				
				return $resultSet;
			}
		catch (PDOException $e) {
			
			echo '<lable style="color : red">'.$query.'</br>'. $e->getMessage().'</lable>';
			
			exit();
			}
	 }
// -----------------
	 function query($query)
	 {
	 	 	GLOBAL $conn;
		try {
				$query_prepare = $conn->prepare($query);
				
				$query_prepare->execute();
				
				return $query_prepare;
		}
		catch (PDOException $e) {

			echo '<lable style="color : red">'.$query.'</br>'. $e->getMessage().'</lable>';

			
			}
	 }
	 	 function insert($query)
	 {
	 	 	GLOBAL $conn;
		try {
				$query_prepare = $conn->prepare($query);
				
				$query_prepare->execute();
				
				return $query_prepare;
		}
		catch (PDOException $e) {

			

			
			}
	 }

	 function SQL_INJECTION($var){
	$result		= 	stripslashes($var);
	$result		= 	preg_replace("/[\"'%()@$.!&?_: #\/-]/","", $result);
	return $result;
}
?>