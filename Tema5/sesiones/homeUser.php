<?
    require('./funciones/conexionBD.php');
    require('./funciones/validaciones.php');
    session_start();
    //comprueba q tiene sesion iniciada
    sesionIniciada();
    // if (!isset($_SESSION['usuario'])) {
    //     $_SESSION['error'] = "No tiene permiso para entrar en pagina user.";
    //     header('Location: ./login.php');
    //     exit;
    // }


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>User</title>
</head>
<body>
    <h1>Pagina User</h1>
    <?
        echo "Bienvenido ".$_SESSION['usuario']['nombre'];
        $paginas = misPaginas();
        echo"<br>";
        if (isset($_SESSION['error'])) {
            echo $_SESSION['error'];
        }
        echo "Las paginas que puede visitar son :<br>";
        foreach ($paginas as $pagina) {
            echo "<a href='./".$pagina."'>".$pagina."</a><br>";
        }
        
    ?>
    <br>
    <a href="./logout.php">LogOut</a>
</body>
</html>
