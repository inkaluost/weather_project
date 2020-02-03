<?php
require_once 'conf.php';
$conn = mysqli_connect($servername, $username, $passport,$database);

/* check connection */

if (!$conn) {
		die('could not connect: ' .mysqli_connect_error());
	}
	
	$table = array();
	$table['cols'] = array(
		array('label' => 'Wind speed', 'type' => 'string'),
		array('label' => 'Value', 'type' => 'number')
	);
	
	
	$sql = "select wind_speed1
	from weather order by id desc limit 1";						/*Order by id desc järjestää datan id:n mukaan laskevasti*/
	
	$result = mysqli_query($conn, $sql);
	$rows = array();
	
	while ($row = mysqli_fetch_assoc($result))
	{
		$temp = array();
		$temp[]= array('v'=> (string)$row['m/s ws']);
		$temp[]= array('v'=> (float)$row['wind_speed1']);
		$rows[] = array('c'=>$temp);
	}
	
	$table['rows'] = $rows;
	
	echo json_encode($table, JSON_PRETTY_PRINT);
	mysqli_close($conn);
?> 