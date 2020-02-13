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
for($row = 1; $row <= $_GET["rows"]; $row++){
	$table .= "<tr>";
	for($col = 1; $col <= $_GET["cols"]; $col++){
		$table .= "<td> {$row}:{$col} </td>";
	}
	$table .= "</tr>";
}
$table .= "</table>";
echo $table;
