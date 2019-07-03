<?php

// Ejercicio 1
echo 32+3 . '<br>';
echo 3*(2+3) . '<br>';

// Ejercicio 2
$valor = 0;

echo var_export($valor > 5 and $valor < 10) . '<br>'; 
echo var_export($valor >= 0 and $valor <= 20) . '<br>';
echo var_export($valor === '10') . '<br>';
echo var_export($valor > 0 and $valor < 5 or $valor > 10 and $valor < 15);

?>