<?php

$i = 0;
$soma = 0;
while($i <= 100){
	$soma += ($i%2 != 0 ? $i : 0);
	$i++;
}
echo $soma;
