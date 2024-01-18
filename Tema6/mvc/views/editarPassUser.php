
<?
    $usuario = $_SESSION['usuario'];
?>
<form action="" method="post">

    <label for="pass1">Pass:
        <input type="text" name="pass1" id="pass1">
    </label>
    <span class="error">
        <?php
        if (isset($errores)) {
            errores($errores, 'pass1');
        }
        ?>
    </span>
    <br>
    <label for="pass2">Repite Pass:
        <input type="text" name="pass2" id="pass2">
    </label>
    <span class="error">
        <?php
        if (isset($errores)) {
            errores($errores, 'pass2');
        }
        ?>
    </span>
    <br>

    <input type="submit" name="User_GuardarContraseña" value="Cambiar contraseña">

    <span class="error">
        <?php
        if (isset($errores)) {
            errores($errores, 'igual');
            errores($errores, 'update');
        }
        ?>
    </span>
</form>