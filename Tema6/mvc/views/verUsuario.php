<?
    if (isset($sms)) {
        echo $sms;
    }
    //Anteriormente el controlador haya buscado un usuario
    $usuario = $_SESSION['usuario'];
?>
<br>
<p>Codigo: <?echo $usuario->codUsuario?></p>
<p>Nombre: <?echo $usuario->descUsuario?></p>
<p>Fecha: <?echo $usuario->fechaUltimaConexion?></p>
<p>Perfil: <?echo $usuario->perfil?></p>

<form action="" method="post">
    <input type="submit" value="Editar" name="User_editar">
</form>















