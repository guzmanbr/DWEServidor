<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema3</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

  <?
    include("../Fragmentos/header.html")
  ?>
  <?
    include("../Fragmentos/nav.html")
  ?>
    
  <div class="container px-4 py-5" id="icon-grid">
        
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
      <div class="col d-flex align-items-start">
        <div>
            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis"><a href="Practica4/indexPractica4.php" class="nav-link">Practica 4</a></h3>
            <p>Practica figuras geometricas.</p>
        </div>
      </div>

      

      <div class="col d-flex align-items-start">
        <div>
            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis"><a href="Practica5/practica5.php" class="nav-link">Practica 5</a></h3>
            <p>Practica con arrays.</p>
        </div>
      </div>

        
    </div>
  </div>

  <?
    include("../Fragmentos/footer.html")
  ?>




</body>
</html>