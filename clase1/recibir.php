<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mi sitio web</title>
  <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
  <div class="contenedor">
    <section class="logo">
      <img src="./images/escuelait-logo.png" alt="Logo EscuelaIT">  
    </section>
    <section>
      <h1>Mi sitio web</h1>
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
    </section>
    


  </div>
</body>
</html>