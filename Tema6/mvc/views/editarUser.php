
<?
    $usuario = $_SESSION['usuario'];
?>
<form action="" method="post">
    <label for="nombre">CodUsuario:
        <input type="text" name="codUsuario" id="codUsuario" readonly value="<?echo $usuario->codUsuario?>">
    </label>
    <br>

    <label for="nombre">descUsuario:
        <input type="text" name="nombre" id="nombre" value="<?echo $usuario->descUsuario?>">
    </label>
    <span class="error">
        <?php
        if (isset($errores)) {
            errores($errores, 'nombre');
        }
        ?>
    </span>
    <br>

    <label for="nombre">fechaUltimaConexion:
        <input type="text" name="fechaUltimaConexion" id="fechaUltimaConexion" readonly value="<?echo $usuario->fechaUltimaConexion?>">
    </label>
    <br>
    <label for="nombre">Perfil:
        <input type="text" name="perfil" id="perfil" readonly value="<?echo $usuario->perfil?>">
    </label>
    <br>

        <?php
        if (isset($errores)) {
            errores($errores, 'update');
        }
        ?>
    <input type="submit" name="User_Guardar" value="Guardar">
    <input type="submit" name="User_CambiarContraseña" value="Cambiar contraseña">
    <span class="error">
    </span>
</form>