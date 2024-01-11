<?
require('./config/config.php');

echo "<pre>";
UserDao::findAll();
UserDao::findById('2');


$usuario = new User('3',sha1('lucia'),'lucia','2024-01-11','usuario');

UserDao::insert($usuario);

UserDao::findAll();

echo "<pre>";



?>