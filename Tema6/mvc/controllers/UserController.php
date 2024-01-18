<?

//Login

//si no esta logueado y llega por algun motivo sin estar validado va al login
if (!validado()) {
    $_SESSION['vista'] = VIEWS.'login.php';
    $_SESSION['controller'] = CONTROLLER.'LoginController.php';
}else {
    if (isset($_REQUEST['User_editar'])) {
        $_SESSION['vista'] = VIEWS.'editarUser.php';

    }elseif(isset($_REQUEST['User_CambiarContraseña'])) {
        $_SESSION['vista'] = VIEWS.'editarPassUser.php';

    }elseif(isset($_REQUEST['User_Guardar'])) {
        $usuario = $_SESSION['usuario'];
        if (!textoVacio('nombre')) {
            $usuario->descUsuario = $_REQUEST['nombre'];
            if (UserDao::update($usuario)) {
                $sms = "Se ha cambiado el nombre correctamente";
                $_SESSION['usuario']= $usuario;//le paso a sesion el usuario actualizado
                $_SESSION['vista'] = VIEWS.'verUsuario.php'; 
            }else {
                $errores['update']="No puedo modificarse el usuario.";
            }
            
        }else {
            $errores['nombre']="No puede estar vacio";
        }
    }elseif (isset($_REQUEST['User_GuardarContraseña'])) {//cambiar la contraseña
        $usuario = $_SESSION['usuario'];
        if (!textoVacio('pass1') && !textoVacio('pass2') && passIgual($_REQUEST['pass1'],$_REQUEST['pass2'],$errores)) {
            $usuario->password=$_REQUEST['pass1'];
            if (UserDao::cambiarPassword($usuario->codUsuario,$_REQUEST['pass1'])) {
                $sms = "Se ha cambiado la contraseña correctamente";
                $_SESSION['usuario']= $usuario;//le paso a sesion el usuario actualizado
                $_SESSION['vista'] = VIEWS.'verUsuario.php'; 
            }else {
                $errores['update']="No puedo modificarse la contraseña.";
            }
        }
    }
}
