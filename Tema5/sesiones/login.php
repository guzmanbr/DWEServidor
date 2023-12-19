<?
    session_start();

    require('./funciones/validaciones.php');
    require('./funciones/conexionBD.php');

    if (enviado() && !textoVacio('user') && !textoVacio('pass')) {

        $usuario = validaUsuario($_REQUEST['user'],$_REQUEST['pass']);

        if ($usuario) {

            $_SESSION['usuario'] = $usuario;
            header('Location: ./homeUser.php');

        }else{
            echo "No existe usuario o contraseña";
        }
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Login</title>
</head>
<body>
    <?
        if (isset($_SESSION['error'])) {
            echo $_SESSION['error'];
        }
    ?>
    <h1>Login</h1>
    <form action="" method="post">
        <label for="user">Nombre</label>
        <input type="text" name="user" id="user">
        <br><br>
        <label for="pass">Contraseña</label>
        <input type="password" name="pass" id="pass">
        <br><br>
        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>
</html>