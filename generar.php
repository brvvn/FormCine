<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Carga de CSS y BOOSTRAP-->    
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <!-- Font Awesome -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>
    <title>Entradas Cinemark</title>
</head>
<body>
    <header>
        <!--Cargamos un NAV con BOOSTRAP -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand" href="index.php"><img id="logo2" src="img/favicon.png" width="32px" height="32px" alt="" srcset=""> CINEMARK</a>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="generar.php">Boleta</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
              </div>
            </div>
          </nav>
    </header>
    <!-- Seccion de total de la compra-->
    <main>
        <section class="contenedor-2">
            <div class="contenedor-2_paquete">
                <div class="paqueteB">
                    <div class="banner">
                        <img src="img/banner.png" alt="" srcset="">
                    </div>
                    <hr>
                    <h1>Resultado de la compra:</h1>

                    <?php
                     // Obtenemos el tipo de entrada que selecciona
                    $tipoEntrada = $_POST['entradaTipo'];
    
                     // Obtenemos la cantidad de entradas
                    $cantidadEntradas = $_POST['cantidad_entradas'];

                    // Definir los porcentajes de descuento
                    $descuentoNino = 0.3;
                    $descuentoAdulto = 0.05;
                    $descuentoAdultoMayor = 0.55;

                    // Calcular el descuento según el tipo de entrada
                    switch ($tipoEntrada) {
                        case 'nino':
                        $descuento = $descuentoNino;
                        break;
                    case 'adulto':
                        $descuento = $descuentoAdulto;
                        break;
                    case 'adulto_mayor':
                        $descuento = $descuentoAdultoMayor;
                        break;
                    default:
                        $descuento = 0;
                        break;
                    }

                    // Calculamos el precio con descuento y total
                    $precioEntrada = 2000; // Precio base de la entrada
                    $precioConDescuento = $precioEntrada - ($precioEntrada * $descuento);
                    $total = $precioConDescuento * $cantidadEntradas;

                    // Imprimela boleta de la compra junto con el total
                    
                    echo "· Tipo de entrada: $tipoEntrada<br>";
                    echo "· Cantidad de entradas: $cantidadEntradas<br>";
                    echo "· Descuento aplicado: " . ($descuento * 100) . "%<br>";
                    echo "· Precio unitario con descuento: $" . $precioConDescuento . "<br>";
                    echo "<h3>· Total a pagar: $" . $total."</h3>";
                    echo "<hr>";
                    ?>
                </div>
            </div>
        </section>
    </main>

    <!--Carga del FOOTER-->
    <footer class="text-center text-white" style="background-color: #f1f1f1;">
        <!-- Grid container -->
        <div class="container pt-4">
          <!-- Section: Social media -->
          <section class="mb-4">
            <!-- Facebook -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="https://facebook.com"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-facebook-f"></i
            ></a>
      
            <!-- Twitter -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="https://twitter.com"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-twitter"></i
            ></a>
      
            <!-- Google -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="https://google.com"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-google"></i
            ></a>
      
            <!-- Instagram -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="https://instagram.com"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-instagram"></i
            ></a>
      
            <!-- Linkedin -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="https://linkedin.com"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-linkedin"></i
            ></a>
            <!-- Github -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="https://Github.com"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-github"></i
            ></a>
          </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            Pagina Web creada por: Brandon Vidal
            - Profesor: Pedro Gatica | Programacion Web SANTO TOMAS
            <p>© 2023 CINEMARK. Todos los derechos reservados.</p>
        </div>
        <!-- Copyright -->
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>