<?php
require_once 'conf.php';
$conn = mysqli_connect($servername, $username, $passport,$database);

/* check connection */

if (!$conn) {
		die('could not connect: ' .mysqli_connect_error());
	}

		$table = array();
		$table ['cols'] = array(
			array('label' => 'Time', 'Type' => 'string'),
			array('label' => 'wind_speed1', 'Type' => 'number')
	);		
	
	$sgl = "SELECT date_time, wind_speed1 
	FROM weather ORDER BY id DESC LIMIT 1";      				/* Order by id desc järjestää datan id:n mukaan laskevasti */
	
	$result = mysqli_query($conn, $sgl);
	$rows = array();
	
	while($row = mysqli_fetch_assoc($result))
	
	{
		$temp = array();
		$temp[]= array('v'=> (string)$row['date_time']);
		$temp[]= array('v'=> (float)$row['wind_speed1']);
		$rows[] = array('c'=>$temp);
	}	
$table['rows'] = $rows;

//echo json_encode($table, JSON_PRETTY_PRINT);
echo json_encode($table);

mysqli_close($conn);

?>	