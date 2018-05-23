<?php
$titulo = "Home de mi sitio web";
include "plantilla/cabecera.php";
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
include "plantilla/pie.php";
?>