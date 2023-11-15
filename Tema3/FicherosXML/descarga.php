<?

//Descargar
header(('Content-Type: txt/xml'));
header("Content-Disposition: attachment; filename=descarga.xml");
readfile("./instrumentos.xml");
exit;


?>