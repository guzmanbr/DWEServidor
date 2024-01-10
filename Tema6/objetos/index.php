<?
require ('./Empresa.php');
require ('./EmpresaM.php');

echo "<pre>";

//Empresa
$empresa =  new Empresa("B123654","Vieja Rumasa SL","Madrid");
print_r($empresa);
echo "<br><br>";

//get llamo al cif
echo $empresa->getCif();
echo "<br>";
//set cambio nombre y cif
$empresa->setCif("A123654");
//para poder cambiarlo asi tiene que ser publico
$empresa->nombre="Nueva Rumasa SL";
print_r($empresa);
echo "<br><br><br>";

//EmpresaM  creo un objeto empresa
$empresaM1 =  new EmpresaM("B156396","Mi web","Zamora");
$empresaM2 =  new EmpresaM("C156396","Mi web2","Salamanca");
$empresaM3 =  new EmpresaM("F156396","Mi web3","Madrid");
print_r($empresaM1);
echo "<br><br>";

//get  llamo al get para obtener el cif
echo $empresaM1->cif;
echo "<br>";

//set llamo al set para cambiar cif 
$empresaM1->cif="1234132";
echo $empresaM1->cif;
echo "<br>";

//intento crear y llamar a un att q o existe y da error
$empresaM1->cifa="1234132";
echo "<br>";
echo $empresaM1->cifa;

echo "<br><br>";

//tostring
echo $empresaM1;
echo "<br><br>";
//funciones estaticas
echo EmpresaM::saluda();
echo "<br>";
echo "Se han creado :". EmpresaM::$cont;

echo "<pre>";




?>