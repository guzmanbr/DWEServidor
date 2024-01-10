<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema4</title>
    <link rel="shortcut icon" href="#" type="image/x-icon">
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
            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis"><a href="BD/index.php" class="nav-link">B.D</a></h3>
            <p></p>
        </div>
      </div>

      <div class="col d-flex align-items-start">
        <div>
            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis"><a href="PDO/pdo.php" class="nav-link">PDO</a></h3>
            <p></p>
        </div>
      </div>

      <div class="col d-flex align-items-start">
        <div>
            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis"><a href="Practica13/index.php" class="nav-link">Practica 13</a></h3>
            <p></p>
        </div>
      </div>

      <div class="col d-flex align-items-start">
        <div>
            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis"><a href="Practica14/index.php" class="nav-link">Practica 14</a></h3>
            <p></p>
        </div>
      </div>

      <div class="col d-flex align-items-start">
        <div>
            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis"><a href="Tareas/13_A_MySQLi/index.php" class="nav-link">Tarea 13 MySQL</a></h3>
            <p></p>
        </div>
      </div>

      <div class="col d-flex align-items-start">
        <div>
            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis"><a href="Tareas/13_B_PDO/index.php" class="nav-link">Tarea 13 PDO</a></h3>
            <p></p>
        </div>
      </div>

        
    </div>
  </div>

  <?
    include("../Fragmentos/footer.html")
  ?>




</body>
</html>