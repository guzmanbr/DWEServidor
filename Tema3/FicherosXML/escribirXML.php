<?php

//ECRIBIR 

$xml = new SimpleXMLElement('<juegos></juegos>');//creo un objeto xml con su etiqueta principal



//creo un juego y lo guardo en una variable
$juego1 = $xml->addChild('juego');
$juego1->addAttribute('id','1');//le añado un atributo id
$juego1->addAttribute('disponible','si');//añado otro atributo
$juego1->addChild('nombre','FIFA');//A EL JUEGO LE AÑADO UN NOMBRE

//CREO UNA VARIABLE DISPOSITIVOS PARA AÑADIRLE VARIOS SI ES NECE3SARIO
$dispositivos = $juego1->addChild('dispositivos');//AL JUEGO LE AÑADO DISPOSITIVOS
$dispositivos->addChild('dispositivo','XBOX');//A DISPOSITIVOS LE AÑADO DISPOSITIVO
$dispositivos->addChild('dispositivo','Play5');

//REPITO CON OTRO
$juego2 = $xml->addChild('juego');
$juego2->addAttribute('id','2');
$juego2->addAttribute('disponible','no');
$juego2->addChild('nombre','GTA');

$dispositivos = $juego2->addChild('dispositivos');
$dispositivos->addChild('dispositivo','XBOX');

//juego3 no es necesario cambiar la variable ya que se sobrescribe
$juego2 = $xml->addChild('juego');
$juego2->addAttribute('id','3');
$juego2->addAttribute('disponible','si');
$juego2->addChild('nombre','Tetrix');
$dispositivos = $juego2->addChild('dispositivos');
$dispositivos->addChild('dispositivo','XBOX');
$dispositivos->addChild('dispositivo','Pc');
$dispositivos->addChild('dispositivo','Play5');


//el objeto guardo en un fichero xml
//si ya existe se sobrescribe //hay que dar permisos a la carpeta sudo...
$xml->asXML('juegos.xml');














?>