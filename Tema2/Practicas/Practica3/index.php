<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

    <?
      include("../../../Fragmentos/header.html")
    ?>
    

    <div class="container px-4 py-5" id="icon-grid">
        
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
        <div class="col d-flex align-items-start">
            <div>
                <h3 class="fw-bold mb-0 fs-4 text-body-emphasis"><a href="php/ejercicio1.php" class="nav-link">Ejercicio1</a></h3>
                <p>1. Crea una página que:<br><br>
                    a. Muestra el nombre del fichero que se está ejecutando. <br><br>
                    b. Muestra la dirección IP del equipo desde el que estás accediendo. <br><br>
                    c. Muestra el path donde se encuentra el fichero que se está ejecutando. <br><br>
                    d. Muestra la fecha y hora actual formateada en 2022-09-4 19:17:18. <br><br>
                    e. Muestra la fecha y hora actual en Oporto formateada en (día de la semana, día de 
                    mes de año, hh:mm:ss , Zona horaria). <br><br>
                    f. Inicializa y muestra una variable en timestamp y en fecha con formato dd/mm/yyyy 
                    de tu cumpleaños.<br><br>
                    g. Calcular la fecha y el día de la semana de dentro de 60 días.
                </p>
            </div>
        </div>

        <div class="col d-flex align-items-start">
            <div>
                <h3 class="fw-bold mb-0 fs-4 text-body-emphasis"><a href="php/ejercicio2.php?nombre=guzman" class="nav-link">Ejercicio2</a></h3>
                <p>Crea una página a la que se le pase por url una variable con el nombre que quieras y 
                    muestre el valor de la variable, el tipo, si es numérico o no y si lo es, si es entero o float. (No 
                    hace falta usar if)
                </p>
            </div>
        </div>

        <div class="col d-flex align-items-start">
            <div>
                <h3 class="fw-bold mb-0 fs-4 text-body-emphasis"><a href="php/ejercicio3.php?ano=1998?mes=02?dia=01" class="nav-link">Ejercicio3</a></h3>
                <p> Crea una página en la que se le pase como parámetros en la URL (ano, mes y día) y muestre 
                    el día de la semana de dicho día. (Por defecto, dale el valor de 03/10/2023) 
                </p>
            </div>
        </div>

        <div class="col d-flex align-items-start">
             <div>
                <h3 class="fw-bold mb-0 fs-4 text-body-emphasis"><a href="php/ejercicio4.php?fecha1=1998-02-01?fecha2=1998-01-01" class="nav-link">Ejercicio4</a></h3>
                <p> Crea una página en la que se le pase como parámetros en la URL (ano, mes y día) de dos 
                    personas y muestre las fechas de nacimiento de ambos y la diferencia de edad en años. </p>
            </div>
        </div>
        
        </div>
    </div>

    <?
        include("../../../Fragmentos/footer.html")
    ?>


</body>
</html>