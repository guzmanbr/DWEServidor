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
        $_SESSION['vista'] = VIEWS.'editarUser.php';

    }elseif(isset($_REQUEST['User_editar'])) {
        $usuario = $_SESSION['usuario'];
        if (!textVacio('nombre')) {
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
        if (!textVacio('pass') && !textVacio('pass2') && passIgual($_REQUEST['pass1'],$_REQUEST['pass2'])) {
            $usuario->password=$_REQUEST['pass1'];
            if (UserDao::cambioContraseña($usuario)) {
                $sms = "Se ha cambiado la contraseña correctamente";
                $_SESSION['usuario']= $usuario;//le paso a sesion el usuario actualizado
                $_SESSION['vista'] = VIEWS.'verUsuario.php'; 
            }else {
                $errores['update']="No puedo modificarse la contraseña.";
            }
        }
    }
}
