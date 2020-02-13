<?php

$total = isset($_GET["total"]) ? $_GET["total"] : 0;
if(!empty($total) && is_numeric($total)){
	for($i = 0; $i <= $total; $i++){
		echo "É possivel repetir várias linhas no PHP. Esta linha foi repetida {$i} vezes <br>";
	}
}
