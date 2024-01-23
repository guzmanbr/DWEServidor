<h1>Pedir Cita</h1>
<form action="" method="post">

    <label for="especialista">Especialista:
        <input type="text" name="especialista" id="especialista">
    </label>
    <span class="error">
        <?php
        if (isset($errores)) {
            errores($errores, 'especialista');
        }
        ?>
    </span>
    <br>
    <label for="fecha">Fecha:
        <input type="date" name="fecha" id="fecha">
    </label>
    <span class="error">
        <?php
        if (isset($errores)) {
            errores($errores, 'fecha');
        }
        ?>
    </span>
    <br>
    <label for="motivo">Motivo:
        <textarea name="motivo" id="motivo" cols="30" rows="10"></textarea>
    </label>
    <span class="error">
        <?php
        if (isset($errores)) {
            errores($errores, 'motivo');
        }
        ?>
    </span>
    <br>
    <br>
    <input type="submit" name="Cita_GuardarCita" value="Guardar cita">
    <span class="error">
        <?php
        if (isset($errores)) {
            errores($errores, 'registrar');
        }
        ?>
    </span>
</form>