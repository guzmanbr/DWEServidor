<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>LayOut</title>
</head>

<body>
    <header>
        <div>
            <form action="" method="post">
                <input type="submit" value="Home" name="home">
            </form>
        </div>
        <h1>Pagina Web de Guzmán</h1>
        <nav>
            <div>
                <?
                if (validado()) {
                    echo "Bienvenido ".$_SESSION['usuario']->descUsuario;
                    ?>
                        <form action="" method="post">
                            <input type="submit" value="Ver Perfil" name="User_verPerfil">
                            <input type="submit" value="Cerrar Sesion" name="logout">
                        </form>
                    <?
                } else {
                    ?>
                        <form action="" method="post">
                            <input type="submit" value="Login" name="login">
                        </form>
                    <?
                }
                ?>
            </div>
        </nav>
    </header>
    <main>
        <?
        if (!isset($_SESSION['vista'])) {
            require  VIEWS . 'home.php';
        } else {
            require $_SESSION['vista'];
        }
        ?>

        <!-- aqui van las vistas -->
    </main>
    <footer>
        <br><br><br><br><br>
        <p>Copyright</p>
    </footer>


</body>

</html>