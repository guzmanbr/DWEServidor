<?
    if (isset($sms)) {
        echo $sms;
    }
?>

<form action="" method="post">
    <label for="nombre">Nombre:
        <input type="text" name="nombre" id="nombre">
    </label>
    <span class="error">
        <?php
            if (isset($errores)) {
                errores($errores, 'nombre');
            }
        ?>
    </span>
    <br>
    <label for="pass">Pass:
        <input type="password" name="pass" id="pass">
    </label>
    <span class="error">
        <?php
            if (isset($errores)) {
                errores($errores, 'pass');
            }
        ?>
    </span>
    <br>
    <input type="submit" name="Login_IniciarSesion" value="Iniciar Sesion">
    <input type="submit" name="Login_Registrar" value="Registrarse">
    <span class="error">
        <?php
            if (isset($errores)) {
                errores($errores, 'validado');
            }
        ?>
    </span>
</form>