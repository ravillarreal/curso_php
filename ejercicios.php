<?php 
// Ejercicio 1
$arreglo = [
    'keyStr1' => 'lado',
    0 => 'ledo',

    'keyStr2' => 'lido',
    1 => 'lodo',
    2 => 'ludo'

];

echo $arreglo['keyStr1'] . ', ' . $arreglo[0] . ', ' . $arreglo['keyStr2'] . ', '
 . $arreglo[1] . ', ' . $arreglo[2] . ', ';

echo '<br> decirlo al revés lo dudo. ';

echo '<br>'. $arreglo[2] . ', ' . $arreglo[1] . ', ' . $arreglo['keyStr2'] . ', '
. $arreglo[0] . ', ' . $arreglo['keyStr1'] . ', ';

echo '<br>¡Qué trabajo me ha costado!';

// Ejercicio 2
$paises = [
    'Venezuela' => ['Zulia', 'Caracas', 'Mérida'],
    'Colombia' => ['Bogotá', 'Medellín', 'Boyacá'],
    'Chile' => ['Santiago', 'Valparaíso', 'Tarapacá'],
];

foreach($paises as $pais => $ciudades) {
    echo "<h3>$pais</h3>";
    echo '<ul>';
    foreach($ciudades as $ciudad) {
        echo "<li>$ciudad</li>";
    }
    echo '</ul>';
}

// Ejercicio 3
$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];

sort($valores);
echo '<h3> Tres números más grandes: </h3>';
echo $valores[0] . ', ' . $valores[1] . ', ' . $valores[3];
echo '<h3> Tres números más pequeños: </h3>';
$ultimo = sizeof($valores);
echo $valores[$ultimo-1] . ', ' . $valores[$ultimo-2] . ', ' . $valores[$ultimo-3];

?>