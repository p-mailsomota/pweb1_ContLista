<?php 

$soma = 0;
for($i = 0; $i <= 10000; $i++){
	$soma += ($i%7 == 0 ? $i : 0);
}
echo $soma;