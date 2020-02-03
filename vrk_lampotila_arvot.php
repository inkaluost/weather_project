<?php
require_once 'conf.php';
$conn = mysqli_connect($servername, $username, $passport,$database);

/* check connection */

if (!$conn) {
		die('could not connect: ' .mysqli_connect_error());
	}
	
	$table = array();
	$table['cols'] = array(
		array('label' => 'temperature', 'type' => 'string'),
		array('label' => 'Value', 'type' => 'number')
	);
	
	
	$sql = "select TIME_FORMAT(date_time,'%H'), AVG(temperature2) as temperature
from weather
WHERE DATE_SUB(NOW(), INTERVAL 1 hour) and  date_time >= DATE_SUB(NOW(), INTERVAL 24 hour) 
Group by hour(date_time)" 
;						/*Order by id desc järjestää datan id:n mukaan laskevasti*/
	
	$result = mysqli_query($conn, $sql);
	$rows = array();
	
	while ($row = mysqli_fetch_assoc($result))
	{
		$temp = array();
		$temp[]= array('v'=> (string)$row['m/s ws']);
		$temp[]= array('v'=> (float)$row['temperature']);
		$rows[] = array('c'=>$temp);
	}
	
	$table['rows'] = $rows;
	
	echo json_encode($table, JSON_PRETTY_PRINT);
	mysqli_close($conn);
?> 