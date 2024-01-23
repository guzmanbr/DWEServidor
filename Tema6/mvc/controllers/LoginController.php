<?

//si se pulsa iniciar sesion
if (isset($_REQUEST['Login_IniciarSesion'])) {
    $errores = array();
    //si el formulario esta relleno correctamente
    if (validarFormulario($errores)) {
        //validado usuario en base de datos llamando a la funcion
        $usuario = UserDao::validarUsuario($_REQUEST['nombre'],$_REQUEST['pass']);
        //iniciar una sesion valida
        if ($usuario != null) {
            //se actualiza la fecha de conexion
            $usuario->fechaUltimaConexion = date('Y-m-d');//le cambio la fecha de ultima gonexion
            UserDao::update($usuario);//hago el update en la bbdd
            //guardo el usuario en la seion
            $_SESSION['usuario'] = $usuario;            
            //home, pero con modificaciones, ahora cargo vista home
            $_SESSION['vista'] = VIEWS.'home.php';
            unset($_SESSION['controller']);//desconecto el controlador de login
        }else{
            $errores['validado']="No existe el usuario.";
        }
    }else {
        
    }
}elseif (isset($_REQUEST['Login_Registrar'])) {
    $_SESSION['vista'] = VIEWS.'registro.php';
}elseif (isset($_REQUEST['Login_GuardarRegistro'])) {
    $errores = array();
    //si el formulario esta relleno correctamente
    if (validarFormularioR($errores)) {
        //validado usuario en base de datos llamando a la funcion
        $usuario = new User(
            $_REQUEST['cod'], 
            $_REQUEST['nombre'],
            $_REQUEST['pass1'],
            date('Y-m-d')
        );
        //iniciar una sesion valida
        if (UserDao::insert($usuario)) {
            //mandarlo a la vista correspondiente
            $_SESSION['vista']=VIEWS.'login.php';
            $sms = "Se ha registrado correctamente.";
        }else{
            $errores['validado']="No existe el usuario.";
        }
    }else {
        
    }
}