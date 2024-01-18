<form action="" method="post">
    <label for="cod">Cod:
        <input type="text" name="cod" id="cod">
    </label>
    <span class="error">
        <?php
        if (isset($errores)) {
            errores($errores, 'cod');
        }
        ?>
    </span>
    <br>
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
    <br>
    <input type="submit" name="Login_GuardarRegistro" value="Registrarse">
    <span class="error">
        <?php
        if (isset($errores)) {
            errores($errores, 'igual');
            errores($errores, 'registrar');
        }
        ?>
    </span>
</form>