<?php
include "funciones/general.php";
cabecera("Home de la web");
?>

<form action="recibir.php" method="post">
  <h2>Login de usuario</h2>
  <p>
    <label for="user">Usuario: </label> 
    <span><input type="text" name="user"></span>
  </p>
  <p>
    <label for="password">Clave: </label> 
    <span><input type="password" name="password"></span>
  </p>
  <p>
    <input type="submit" value="Enviar" class="submit">
  </p>
</form>

<?php
pie('Curso de PHP de EscuelaIT');
?>