<div class="well">
    <h1>Säädata</h1>
</div>
<table class="table">
    <tr>
        <th>Ilmankosteus</th>
        <th>Sisäilmankosteus</th>
        <th>Ilmanpaine1</th>
		<th>Ilmanpaine2</th>
        <th>Tuulennopeus1</th>
		 <th>Tuulennopeus2</th>
		<th>Tuulensuunta1</th>
		<th>Tuulensuunta2</th>
		<th>Lämpötila1</th>
		<th>Lämpötila2</th>
		<th>Valonmäärä1</th>
		<th>Valonmäärä2</th>
		<th>Sademäärä1</th>
		<th>Sademäärä2</th>
		
		
    </tr>
    <?php
        $sql = "SELECT *
		FROM weather order by id desc limit 20";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>{$row['humidity_out']} </td>";
            echo "<td>{$row['humidity_in']} </td>";
            echo "<td>{$row['pressure1']}</td>";
			echo "<td>{$row['pressure2']}</td>";
			echo "<td>{$row['wind_speed1']}</td>";
			echo "<td>{$row['wind_speed2']}</td>";
            echo "<td>{$row['wind_direction1']}</td>";
			echo "<td>{$row['wind_direction2']}</td>";
			echo "<td>{$row['temperature1']}</td>";
			echo "<td>{$row['temperature2']}</td>";
			echo "<td>{$row['light1']}</td>";
			echo "<td>{$row['light2']}</td>";
			echo "<td>{$row['rain1']}</td>";
			echo "<td>{$row['rain2']}</td>";
            echo "</tr>";
        }
    ?>
</table>