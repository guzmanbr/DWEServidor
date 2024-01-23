<?

if (isset($_REQUEST['Cita_Pedir'])) {
    $_SESSION['vista'] = VIEWS.'pedirCita.php';

}elseif(isset($_REQUEST['Cita_GuardarCita'])){
    $errores = array();
    if (validaFormularioNuevaCita($errores)) {
        //insert
        $cita = new Cita(
            null,
            $_REQUEST['especialista'],
            $_REQUEST['motivo'],
            $_REQUEST['fecha'],
            true,
            $_SESSION['usuario']->codUsuario
        );

        if (!CitaDao::insert($cita)) {
            $errores['insertar'] =  "No se ha podido generar su cita";
        }else {
            $sms ="Cita registrada con exito.";
            $array_citas = CitaDao::findByPaciente($_SESSION['usuario']);
            $_SESSION['vista'] = VIEWS.'verCitas.php';
        }

    }
}elseif (isset($_REQUEST['Cita_VerAnterior'])) {
    $array_citas = CitaDao::findByPacienteH($_SESSION['usuario']);

}elseif (isset($_REQUEST['Citas_VerCitasTodas'])) {
    $array_citas = CitaDao::findAll();
}elseif (isset($_REQUEST['Cita_Ver'])) {
    $cita = CitaDao::findById($_REQUEST['id']);
    if (isAdmin()) {
        $paciente = UserDao::findById($cita->paciente);
    }
    $_SESSION['vista'] = VIEWS.'verCita.php';
}

else{    
    $array_citas = CitaDao::findByPaciente($_SESSION['usuario']);
    $_SESSION['vista'] = VIEWS.'verCitas.php';
}

?>
