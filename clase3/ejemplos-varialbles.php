https://www.tutorialspoint.com/execute_php_online.php

<h1>Variables</h1>

<?php
$num = 3;
$num2 = 4;

$suma = $num + $num2;
echo $suma;
?>

<?php
$f1 = 10.1;
$f2 = 2.22;
$resta = $f1 - $f2;
echo $resta;
?>

<?php
$cadena = "Bienvenidos";
$cadena2 = "a EscuelaIT";
$concatenacion = $cadena . $cadena2;
echo $concatenacion;
?>

<?php
$me_gusta_la_cerveza = true;
$negacion = !$me_gusta_la_cerveza;
var_dump($negacion);
?>

<?php
$dias_semana = ["lunes", "martes", "miercoles"];
echo $dias_semana[1];
?>

<h2>Tipado dinámico</h2>

<?php
$numero = 5;
$numero2 = "4";
echo $numero + $numero2;
?>

<?php
$numero = 5;
$numero2 = 4;
echo $numero . $numero2;
?>

<?php
$numero = 5;
$boleano = true;
echo $numero + $boleano;
?>

<h2>Cadenas comillas simples y dobles</h2>

<?php
$miCadena = 'Esta cadena tiene
varias líneas';
echo $miCadena;
?>

<?php
$nombre = "Miguel";
$saludo = "Hola $nombre, cómo te va?";
echo $saludo;
?>

<?php
$dias_semana = ["lunes", "martes", "miercoles"];
$frase = "El $dias_semana[0] es el segundo día de la semana";
echo $frase;
?>

<?php
$frutas_colores = [
    'pera' => 'Amarilla',
    'fresa' => 'Roja',
    'kiwi' => 'verde'
];
echo $frutas_colores['fresa'];
$frase = "El kiwi es de color {$frutas_colores['kiwi']}";
echo $frase;
?>
