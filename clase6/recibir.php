<?php
include "funciones/general.php";
cabecera("Recepción del formulario");
?>

<p>Los datos recibidos del formulario</p>
<table>
  <tr>
    <th>Usuario</th>
    <th>clave</th>
  </tr>
  <tr>
    <td><?php echo $_POST['user'] ?></td>
    <td><?= $_POST['password'] ?></td>
  </tr>
</table>

<p>
  <a href="index.php">Volver</a>
</p>

<?php
pie();
?>