<?
require('./config/config.php');

session_start();


if (isset($_REQUEST['login'])) {
    $_SESSION['vista'] = VIEWS.'login.php';
    $_SESSION['controller'] = CONTROLLER.'LoginController.php';

}elseif (isset($_REQUEST['home'])) {
    $_SESSION['vista'] = VIEWS.'home.php';

}elseif (isset($_REQUEST['logout'])) {//si se pulsa cerrar sesion
    session_destroy();
    header('Location: ./index.php');//hay que recargar la pagina para que expire la sesion, se recarga sin sesion

}elseif (isset($_REQUEST['User_verPerfil'])) {//si se pulsa ver perfil
    $_SESSION['vista'] = VIEWS.'verUsuario.php';
    $_SESSION['controller'] = CONTROLLER.'UserController.php';
}
if (isset($_SESSION['controller'])) {
    require($_SESSION['controller']);
}
require('./views/layout.php');







// echo "<pre>";
// //UserDao::findAll();
// echo "----------------------FindId--------------------------------------------------------<br>";
// UserDao::findById('2');


// echo "----------------------Insert-------------------------------------------------------<br>";
// //$usuario = new User('3','lucia','lucia','2024-01-11');
// //Insert
// //UserDao::insert($usuario);
// UserDao::findAll();

// echo "----------------------Update---------------------------------------------------------<br>";
// //Al usuario 3 le cambio el nombre a ana
// $usuario = UserDao::findById('3');
// $usuario->descUsuario = 'Ana';

// //Update
// UserDao::update($usuario);
// UserDao::findAll();
// echo "----------------------Delete---------------------------------------------------------<br>";
// //Deletre
// //$usuario1 = new User('4','Paco','Paco','2023-01-11');
// //UserDao::insert($usuario1);
// $usuario1 = UserDao::findById('4');
// UserDao::delete($usuario1);
// UserDao::findAll();

// echo "----------------------Buscar por nombre---------------------------------------------------------<br>";
// UserDao::buscarPorNombre('an');

// echo "----------------------Validar---------------------------------------------------------<br>";

// $usuario = UserDao::validarUsuario('maria','maria');

// echo "<pre>";



?>