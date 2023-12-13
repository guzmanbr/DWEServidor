<?

require ('../../fpdf186/fpdf.php');
require ('./Header.php');


$clientes = array(
    array('Manuel Fernandez','88888888K','c/Mala n1','18190 Armilla', 'Granada'),
    array('Raul Martinez','88888888K','c/Salamanca n1','19025 Salamanca', 'Salamanca'),
    array('Alejandro Balde','88888888K','c/Valladolid n1','18190 Valladolid', 'Valladolid'),
    array('Jose Ramos','88888888K','c/Soria n1','20190 Soria', 'Soria'),
);

$productos = array(
    array('Nike Airforce 1',2,120,21),
    array('Nike Air Max 95',1,150,12),
    array('Adidas Forum',1,99,15),
    array('Reebok Classic',1,80,21),
    array('Adidas Samba',1,65,21),
);


//creo nuevo objeto de FPDF
$pdf = new HeaderClase();

//añado pagina
$pdf->AddPage();

//Creo la tabla del cliente
crearCliente($clientes[1],$pdf);

//Creo  la tabla de la factura
crearTabla($productos,$pdf);

//Guardo
$pdf->Output();


function crearCliente($cliente,$pdf){

    //fuente y posicion
    $pdf->SetFont('Courier','',11);//familia,estilo,tamaño
    $pdf->SetY(12);
    $pdf->SetX(130);
    //Creo las celdas predeterminadas en su posicion
    $pdf->Cell(70,6,"Cliente",1,2,'C',false);
    $pdf->Cell(70,6,"Nombre:",0,2,'L',false);
    $pdf->Cell(70,6,"CIF/NIF:",0,2,'L',false);
    $pdf->Cell(70,6,"Calle:",0,2,'L',false);
    $pdf->Cell(70,6,"Codigo:",0,2,'L',false);
    $pdf->Cell(70,6,"Ciudad:",0,2,'L',false);
    $pdf->SetY(18);
    $pdf->SetX(150);

    //por cada fila
    foreach ($cliente as $dato) {
        //en cada fila vamos rellenando las celdas
        $pdf->Cell(70,6,$dato,0,2,'L',false);
    }
}



function crearTabla($productos,$pdf){

    //fuente y posicion
    $pdf->SetFont('Courier','',11);//familia,estilo,tamaño
    $pdf->SetY(90);
    $pdf->SetX(10);
    $pdf->SetFillColor(100,180,255);
    //Creo las celdas predeterminadas en su posicion
    $pdf->Cell(70,6,"Descripcion",1,0,'C',false);
    $pdf->Cell(30,6,"Cantidad",1,0,'C',false);
    $pdf->Cell(30,6,"Precio Ud",1,0,'C',false);
    $pdf->Cell(30,6,"Importe",1,0,'C',false);
    $pdf->Cell(30,6,"IVA",1,1,'C',false);

    //inicializo los totales
    $totalIva=0;
    $totalCompra=0;

    foreach ($productos as $producto) {

        $conta = 0;
        $cantidad=0;
        $precioUD=0;
        $totalArticulo=0;
        $ivaArticulo=0;


        foreach ($producto as $dato) {
    
            if ($conta==0) {
                $pdf->Cell(70,6,$dato,1,0,'C',false);
            }elseif ($conta==1) {
                $pdf->Cell(30,6,$dato,1,0,'C',false);
                $cantidad=$dato;//guardo la cantidad
            }elseif ($conta==2) {
                $pdf->Cell(30,6,($dato."$"),1,0,'C',false);
                $precioUD=$dato;//guardo el precio de la unidad
                $totalArticulo=$precioUD*$cantidad;//precio total de la suma de articulos
                $pdf->Cell(30,6,($totalArticulo."$"),1,0,'C',false);
            }elseif ($conta==3) {
                $ivaArticulo=(($totalArticulo*$dato)/100);//calculo el iva de cada articulo
                $pdf->Cell(30,6,($dato."%(".$ivaArticulo."$)"),1,1,'C',false);
            }

            //sumo los totales
            $totalIva+=$ivaArticulo;
            $totalCompra+=$totalArticulo;

            $conta++;
        }
    }

    //posicion y añado los precios totales
    $pdf->Ln();
    $pdf->SetY(210);
    $pdf->SetX(40);
    $pdf->Cell(70,6,"Total Impunible: ".$totalCompra."$",0,0,'C',false);
    $pdf->Cell(70,6,"Total IVA: ".$totalIva."$",0,0,'C',false);
    $pdf->Ln();
    $pdf->SetY(220);
    $pdf->SetX(75);
    $pdf->Line( 20, 218, 180, 218);
    $pdf->SetFont('Courier','B',13);//familia,estilo,tamaño
    $pdf->Cell(70,6,"Total: ".$totalIva+$totalCompra."$",0,0,'C',false);

}




?>