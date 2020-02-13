<?php

$tamanho = count($_GET);
$numeros = array_values($_GET);
$soma = 0;
for($i = 0; $i < $tamanho; $i++){
	$soma += $numeros[$i];
}
echo $soma;