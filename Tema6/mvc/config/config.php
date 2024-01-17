<?

/*Configuraciones*/

// Constantes que se usan en toda la aplicacion //
//Rutas 
define('IMG','/Tema6/mvc/webroot/img/');//Constante para concatenar el nombre de la imagen y evitar poner la ruta siempre
define('CSS','./webroot/css/');
define('JS','./webroot/js/');
define('VIEWS','./views/');
define('CONTROLLER','./controllers/');

//require para no tener que repetirlo cada vez, como si fuera desde el index
require("./config/confBD.php");

require("./core/funciones.php");

require("./dao/FactoryBD.php");
require("./models/User.php");
require("./dao/UserDAO.php");














?>