<?

require ('../../fpdf186/fpdf.php');
require ('./Header.php');

//creo nuevo objeto de FPDF

$pdf = new HeaderClase();

$pdf->AddPage();
//Se genera header automaticamente

$pdf->SetFont('Courier','B',10);//familia,estilo,tamaño
$pdf->SetY(12);
$pdf->SetX(130);
$pdf->Cell(70,5,"Cliente",1,2,'C',false);
$pdf->Cell(70,5,"Nombre:",0,2,'L',false);
$pdf->Cell(70,5,"CIF/NIF:",0,2,'L',false);
$pdf->Cell(70,5,"Calle:",0,2,'L',false);
$pdf->Cell(70,5,"Codigo:",0,2,'L',false);
$pdf->Cell(70,5,"Ciudad:",0,2,'L',false);



//Añado otra pagina
$pdf->AddPage();
//añadir imagen
$pdf->Image('./imagen.jpg',50,20,120,90);//nombre, posicion, ancho alto




$pdf->Output();//Guardo




$clientes = array(
    array('pc1','Lenovo','1TB','4Gb RAM'),
    array('pc2','Asus','2TB','8Gb RAM'),
    array('pc3','Mac','2TB','4Gb RAM'),
    array('pc4','Hp','1TB','8Gb RAM'),
);



function crearTabla($array,$pdf){


    $pdf->SetFont('Courier','B',10);//familia,estilo,tamaño
    $pdf->SetY(12);
    $pdf->SetX(130);
    $pdf->Cell(70,5,"Cliente",1,2,'C',false);
    $pdf->Ln();//salto
    $pdf->SetY(12);
    $pdf->SetX(130);
    //por cada fila
    foreach ($array as $row) {
        //en cada fila vamos rellenando las celdas
        foreach ($row as $dato) {
            $pdf->Cell(45,10,$dato,1,0,'C',false);
        }
        $pdf->Ln();
    }


}




?>