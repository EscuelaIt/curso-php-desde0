<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style>
  body {

  }
  .saludo {
    border: 1px solid #ddd;
    border-radius: 5px;
    display: inline-block;
    padding: 15px;
    margin: 5px;
  }
  </style>
  <title>Document</title>
</head>
<body>
  
</body>
</html>
<h1>Funciones</h1>

<h2>Función básica</h2>
<?php

function saluda() {
   echo '<div class="saludo">Hola desde EscuelaIT</div>';
}

saluda();

?>

<h2>Parámetros en funciones</h2>

<?php 

function saludaPersona($persona) {
  echo "<div class=\"saludo\">Hola $persona, desde EscuelaIT</div>";  
}

saludaPersona('Miguel');
saludaPersona('Claudio');

?>

<h2>Parámetros predeterminados</h2>

<?php 

function saludaAnonimo($persona = 'Anónimo') {
  echo "<div class=\"saludo\">Hola $persona, desde EscuelaIT</div>";  
}

saludaAnonimo();
saludaAnonimo('Miguel');

?>

<h2>Valores de retorno</h2>

<?php

function divisible7($num) {
  if($num % 7 == 0) {
    return true;
  }
  return false;
}

var_dump(divisible7(14));
var_dump(divisible7(23));

function menor($valores) {
  if(count($valores) == 0) {
    echo '--'. count($valores);
    return false;
  }
  $menor = $valores[0];
  for($i = 1; $i < count($valores); $i++) {
    if($valores[$i] < $menor) {
      $menor = $valores[$i];
    }
  }
  return $menor;
}

function diasSemana() {
  return ['lunes', 'martes', 'miércoles', '...'];
}

echo '<br>';
echo menor([4,6,2,3]);
echo '<br>';
echo menor([24,76,92,13]);
echo '<br>';

function validarEmail($email) {
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return true;
  }
  return false;
}

var_dump(validarEmail('test'));
var_dump(validarEmail('miguel@desarrolloweb.com'));

?>
<h2>Ambito</h2>


<?php

function media($valores) {
  $sumatorio = 0;
  $num_valores = count($valores);
  // for($i = 0; $i < $num_valores; $i++) {
  //   $sumatorio += $valores[$i];
  // }
  foreach($valores as $valor) {
    $sumatorio += $valor;
  }
  return $sumatorio / $num_valores;
}

echo "media:" . media([1,2,3]);
var_dump($sumatorio);



$profesor = 'Miguel';

function saludaAlProfesor() {
  var_dump($GLOBALS["profesor"]);
  echo "Hola {$GLOBALS["profesor"]}";
}

saludaAlProfesor();


