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
    </section>
  </div>
</body>
</html>