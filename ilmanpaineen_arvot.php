<?php
require_once 'conf.php';
$conn = mysqli_connect($servername, $username, $passport,$database);

/* check connection */

if (!$conn) {
		die('could not connect: ' .mysqli_connect_error());
	}
	
	$table = array();
	$table['cols'] = array(
		array('label' => 'Pressure', 'type' => 'string'),
		array('label' => 'Value', 'type' => 'number')
	);
	
	
	$sql = "select pressure1
	from weather order by id desc limit 20";						/*Order by id desc j�rjest�� datan id:n mukaan laskevasti*/
	
	$result = mysqli_query($conn, $sql);
	$rows = array();
	
	while ($row = mysqli_fetch_assoc($result))
	{
		$temp = array();
		$temp[]= array('v'=> (string)$row['m/s ws']);
		$temp[]= array('v'=> (float)$row['pressure1']);
		$rows[] = array('c'=>$temp);
	}
	
	$table['rows'] = $rows;
	
	echo json_encode($table, JSON_PRETTY_PRINT);
	mysqli_close($conn);
?> 