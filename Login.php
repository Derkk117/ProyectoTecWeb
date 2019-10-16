<!DOCTYPE html>
<html lang="es">
<?php
    require('header.php');
?>
<head>
  <title>Login</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="Css/Login.css" />
</head>

<body>
  <form action="">
    <h1>Incia Sesión</h1>
    <input type="text" placeholder="Usuario" name="usuario" />
    <input type="password" placeholder="&#128274; Contraseña" name="contraseña" />
    <input type="submit" value="Ingresar" />
    <p>¿No tienes cuenta? Registrate<br> <a id="sign-up">Sign Up</a></p>
  </form>
</body>

<?php
    require('footer.php');
?>
</html>