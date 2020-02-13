<?php

$soma = 0;
do{
	$n = rand(0, 50);
	echo $n."<br>";
	$soma += $n;
}while($soma <= 1000);
echo "SOMA: ".$soma;