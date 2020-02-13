<style>
	table{
		border-collapse: collapse;
	}
	td{
		border: 1px solid #000;
		padding: 10px;
	}
</style>
<?php

$table = "<table>";
for($row = 1; $row <= 10; $row++){
	$table .= "<tr>";
	for($col = 1; $col <= 5; $col++){
		$table .= "<td> {$row}:{$col} </td>";
	}
	$table .= "</tr>";
}
$table .= "</table>";
echo $table;