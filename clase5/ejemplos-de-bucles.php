<?php
//Ejemplo 1 incremento
for($inicio=1; $inicio<10; $inicio++)
	{
		echo "Hola $inicio<br>";
	}

for($inicio=1; $inicio<10; $inicio += 2)
	{
		echo "Hola $inicio<br>";
	}

for($inicio=1; $inicio<10; $inicio += 2)
	{
		echo "Hola $inicio<br>";
	}
echo "Final $inicio";

//Ejemplo 2 decremento
for($inicio=10; $inicio>=1; $inicio--)
	{
		echo "Hola $inicio<br>";
	}
//Ejemplo 3 sin parametros y break
$inicio=1;
for(; ; )
	{
		if($inicio>10){ break; }
		echo "Hola $inicio<br>";
		$inicio++;
	}
$inicio=1;
for( ; ; )
	{
	if($inicio>10){ break; }
	echo "Hola $inicio<br>";
	}

//Ejemplo 4 para recorrer cadena de caracteres
for($col = 'A'; $col != 'Z'; $col++) {
    echo $col.' <br>';
}


//Ejemplo 5
$i=1;
while ($i <= 10) {
    echo $i++;
}

$i=1;
while ($i <= 100) {
    
    echo $i."<br>";
    $i = $i*3;
}

//Ejemplo 6
$i=1;
do {
    echo $i;
} while ($i > 1);
