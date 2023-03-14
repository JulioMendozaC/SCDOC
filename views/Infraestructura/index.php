<?php

session_start();
error_reporting(0);

$validar = $_SESSION['nombre'];
$id_empresa = $_SESSION['id_empresa'];



if ($validar == null || $validar = '') {

  header("Location: ../../includes/login.php");
  die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Administrador</title>
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <link href="../../css/styles.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css">
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-dark" style="  background: #323232;">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="user.php"><ion-icon name="person-circle-outline"></ion-icon> Admin <?php echo $_SESSION['nombre']; ?></a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
      <div class="input-group">
      </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#!">Perfil</a></li>

          <li>
            <hr class="dropdown-divider" />
          </li>
          <li><a class="dropdown-item" href="../../includes/_sesion/cerrarSesion.php">Cerrar Sesion</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark  " style="background: #008590; 
            	background: linear-gradient( #04C5D5,  #008590, #008590 );" id="sidenavAccordion">
        <div class="sb-sidenav-menu">

          <div class="nav">
            <div class="sb-sidenav-menu-heading" style="color:#FFFF">Administrador</div>


            <a class="nav-link collapsed fw-bold" style="color:#323232" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAdmin" aria-expanded="false" aria-controls="collapseRecursoss" style="color: #0000;">
              <div class="sb-nav-link-icon" style="color:#323232"><ion-icon name="shield-checkmark"></ion-icon></div>
              Admistacion
              <div class="sb-sidenav-collapse-arrow"><ion-icon name="key" style="color:#000000"></ion-icon></div>
            </a>
            <div class="collapse" style="color:#323232" id="collapseAdmin" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link fw-bold" style="color:#323232" href="../user.php">Usuarios</a>
                <a class="nav-link fw-bold" style="color:#323232" href="../empresas.php">Empresa</a>
              </nav>
            </div>

          </div>
          <div class="nav">
            <div class="sb-sidenav-menu-heading" style="color:#FFFF">Mapas</div>


            <a class="nav-link collapsed fw-bold" style="color:#323232" href="#" data-bs-toggle="collapse" data-bs-target="#collapseOrganisacion" aria-expanded="false" aria-controls="collapseOrganisacion">
              <div class="sb-nav-link-icon" style="color:#323232"><ion-icon name="library" style="color:#000000"></ion-icon></div>
              Organizacion
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color:#000000"></i></div>
            </a>
            <div class="collapse" style="color:#323232" id="collapseOrganisacion" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                <a class="nav-link collapsed fw-bold" style="color:#323232" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                  Liderazgo
                  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color:#000000"></i></div>
                </a>
                <div class="collapse" style="color:#323232" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                  <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link fw-bold" style="color:#323232" href="../Objetivo/index.php">Objetivos</a>
                  </nav>
                </div>
                <a class="nav-link collapsed fw-bold " style="color:#323232" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                  Contexto de la organizacion
                  <div class="sb-sidenav-collapse-arrow" style="color:#323232"><i class="fas fa-angle-down" style="color:#000000"></i></div>
                </a>
                <div class="collapse" style="color:#323232" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                  <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link fw-bold" style="color:#323232" href="../Pestel/index.php">Pestel</a>
                    <a class="nav-link fw-bold" style="color:#323232" href="../Foda/index.php">Foda</a>
                    <a class="nav-link fw-bold" style="color:#323232" href="../Partes_Interesadas/index.php">Partes intersadas</a>
                  </nav>
                </div>
                <a class="nav-link fw-bold" style="color:#323232" href="../Comunicacion/index.php">
                  <div class="sb-nav-link-icon" style="color:#323232"></div>
                  Comunicación
                </a>
              </nav>
            </div>


            <a class="nav-link collapsed fw-bold" style="color:#323232" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProceso" aria-expanded="false" aria-controls="collapseProceso">
              <div class="sb-nav-link-icon" style="color:#323232"><ion-icon name="bar-chart" style="color:#000000"></ion-icon></div>
              Proceso
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color:#000000"></i></div>
            </a>
            <div class="collapse" style="color:#323232" id="collapseProceso" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                <a class="nav-link collapsed fw-bold" style="color:#323232" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                  Mapeo
                  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color:#000000"></i></div>
                </a>
                <div class="collapse" style="color:#323232" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                  <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link fw-bold" style="color:#323232" href="../Tortuga/index.php">Diagrama de Tortuga</a>
                    <a class="nav-link fw-bold" style="color:#323232" href="../SIPOC/index.php">Diagrama SIPOC</a>
                    <a class="nav-link fw-bold" style="color:#323232" href="../General/index.php">Diagrama General</a>
                  </nav>
                </div>
            </div>



            <a class="nav-link fw-bold" style="color:#323232" href="../Riesgos_Oportunidades/index.php">
              <div class="sb-nav-link-icon" style="color:#323232"><ion-icon name="shield-half" style="color:#000000"></ion-icon></div>Riesgos&Oportunidades
            </a>

            <a class="nav-link collapsed fw-bold" style="color:#323232" href="#" data-bs-toggle="collapse" data-bs-target="#collapseRecursos" aria-expanded="false" aria-controls="collapseRecursoss">
              <div class="sb-nav-link-icon" style="color:#323232"><ion-icon name="cube" style="color:#000000"></ion-icon></div>
              Recursos
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color:#000000"></i></div>
            </a>
            <div class="collapse" style="color:#323232" id="collapseRecursos" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link fw-bold" style="color:#323232" href="../CrudPersonal/index.php">Personal</a>
                <a class="nav-link fw-bold" style="color:#323232" href="index.php">Infrestuctura</a>
                <a class="nav-link fw-bold" style="color:#323232" href="../Documentada/index.php">Info.Documental</a>
              </nav>
            </div>

            <a class="nav-link fw-bold" style="color:#323232" href="../CrudArchivos/index.php">
              <div class="sb-nav-link-icon" style="color:#323232"><ion-icon name="keypad" style="color:#000000"></ion-icon></div>
              Operacion
            </a>

            <a class="nav-link fw-bold" style="color:#323232" href="../Proveedores/index.php">
              <div class="sb-nav-link-icon" style="color:#323232"><ion-icon name="people-circle" style="color:#000000"></ion-icon></div>
              Provedores
            </a>

            <a class="nav-link fw-bold" style="color:#323232" href="../Desempeño/index.php">
              <div class="sb-nav-link-icon" style="color:#323232"><ion-icon name="cog" style="color:#000000"></ion-icon></div>
              Desempeño
            </a>

            <a class="nav-link fw-bold" style="color:#323232" href="../Mejora/index.php">
              <div class="sb-nav-link-icon fw-bold" style="color:#323232"><ion-icon name="star-half" style="color:#000000"></ion-icon></div>
              Mejora
            </a>

          </div>
        </div>
        <div class="sb-sidenav-footer fw-bold" style=" background: #323232; color:#FFFFFF">
          <div class="small fw-bold" style="color:#FFFFFF">SECAAC</div>
          Transforma
        </div>
      </nav>

    </div>
    <div id="layoutSidenav_content">
      <main class="container p-4">


        <div class="row">
          <div class="col-md-4">
         
            <!-- Metodo para añadir elemtos e impresion de la tabla-->
            <div class="card card-body">
              <form action="save_task.php" method="POST">
                <div class="form-group">
                  <p class="titulo">INVENTARIO DE INFRAESTRUCTURA</p>
                  <p class="sub"></p>
                  <input type="text" class="form-control mb-3" name="r" placeholder="Responsable">
                  <input type="text" class="form-control mb-3" name="t" placeholder="Tipo de mantenimiento">
                  <input type="text" class="form-control mb-3" name="p" placeholder="Periodo/frecuencia de mantenimiento">
                  <input type="text" class="form-control mb-3" name="re" placeholder="Responsable del Mantenimiento">
                  <input type="text" class="form-control mb-3" name="u" placeholder="Ubicación física">

                  <p class="sub">FECHA DE ADQUISICIÓN O PUESTA EN SERVICIO</p>
                  <input type="text" class="form-control mb-3" name="d" placeholder="D">
                  <input type="text" class="form-control mb-3" name="m" placeholder="M">
                  <input type="text" class="form-control mb-3" name="a" placeholder="A">

                  <p class="sub">VIDA ÚTIL (AÑOS)</p>
                  <input type="text" class="form-control mb-3" name="c" placeholder="5">
                  <input type="text" class="form-control mb-3" name="di" placeholder="10">
                  <input type="text" class="form-control mb-3" name="ve" placeholder="20">

                  <p class="sub">ESTADO ACTUAL</p>
                  <input type="text" class="form-control mb-3" name="un" placeholder="1">
                  <input type="text" class="form-control mb-3" name="do" placeholder="2">
                  <input type="text" class="form-control mb-3" name="tr" placeholder="3">


                </div>
                <input type="submit" name="save_task" class="forma" value="Guardar" />
              </form>
              </form>
            </div>
          </div>
          <div class="col-md-8">
            <table class="default" id="tabla">

              <h1>RECURSOS-INFRAESTRUCTURA</h1>

              <thead>
                <p class="concepto"><b>INVENTARIO DE INFRAESTRUCTURA:</b> Los inventarios de infraestructura resultan muy amplios. Se debe incluir puentes, acueductos, estructuras deportivas, educativas o de salud, carreteras, obras hidráulicas de riego, drenajes y sistemas de alcantarillado, fuentes de agua y otros recursos, e incluso antenas de radio y telefonía, entre muchas otras.</p>
                <p class="concepto"><b>FECHA DE ADQUISICIÓN:</b> Es la fecha en la que la empresa adquirente toma el control del negocio o negocios adquiridos. Esta fecha es relevante, pues el valor de los elementos patrimoniales identificables de las empresas o negocios adquiridos, y también el valor del coste de la adquisición, se determinan con referencia a éste momento.</p>
                <p class="concepto"><b>VIDA ÚTIL (AÑOS):</b>La Vida Útil es el periodo de tiempo que se espera utilizar un activo de una empresa, bajo una actividad económica eficiente. Como Activo fijo de una empresa nos referimos a bienes que tienen una duración dentro del ciclo económico superior a un año.</p>
                <p class="concepto"><b>ESTADO ACTUAL:</b>Consiste en detectar las fortalezas y debilidades de la empresa que originen ventajas o desventajas competitivas. Para llevarlo a cabo se estudian los siguientes factores: Producción. Capacidad de producción, costes de fabricación, calidad e innovación tecnológica.</p>

                <h1></h1>

                <thead>
                  <thead>
                    <tr>
                      <td colspan="5">INVENTARIO DE INFRAESTRUCTURA</td>
                      <td colspan="3">FECHA DE ADQUISICIÓN O PUESTA EN SERVICIO</td>
                      <td colspan="3">VIDA ÚTIL (AÑOS)</td>
                      <td colspan="3">ESTADO ACTUAL</td>

                    </tr>

                    <tr>
                      <td>Responsable</td>
                      <td>Tipo de mantenimiento</td>
                      <td>Periodo/frecuencia de mantenimiento</td>
                      <td>Responsable del Mantenimiento</td>
                      <td>Ubicación física</td>
                      <td>D</td>
                      <td>M</td>
                      <td>A</td>
                      <td>5</td>
                      <td>10</td>
                      <td>20</td>
                      <td>1</td>
                      <td>2</td>
                      <td>3</td>
                    </tr>

                  </thead>
                <tbody>
                  <h1> </h1>


                  <?php

                  include('db.php');

                  if ($id_empresa['id_empresa'] == 1) { //admin
                    $query = "SELECT * FROM infraestructura";
                    $result_tasks = mysqli_query($conexion, $query);
                  } else {
  
                    $query = "SELECT * FROM infraestructura WHERE id_empresa = '$id_empresa'";
                    $result_tasks = mysqli_query($conexion, $query);
                  }

                  

                  while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
                    <tr>
                      <th><?php echo $row['r'] ?></th>
                      <th><?php echo $row['t'] ?></th>
                      <th><?php echo $row['p'] ?></th>
                      <th><?php echo $row['re'] ?></th>
                      <th><?php echo $row['u'] ?></th>
                      <th><?php echo $row['d'] ?></th>
                      <th><?php echo $row['m'] ?></th>
                      <th><?php echo $row['a'] ?></th>
                      <th><?php echo $row['c'] ?></th>
                      <th><?php echo $row['di'] ?></th>
                      <th><?php echo $row['ve'] ?></th>
                      <th><?php echo $row['un'] ?></th>
                      <th><?php echo $row['do'] ?></th>
                      <th><?php echo $row['dr'] ?></th>

                      <td>
                        <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
                          <i class="fas fa-marker"></i>
                        </a>
                        <a href="delete_task.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                          <i class="far fa-trash-alt"></i>
                        </a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
            </table>
          </div>
        </div>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>






      </main>



      <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Your Website 2022</div>
            <div>
              <a href="#">Privacy Policy</a>
              &middot;
              <a href="#">Terms &amp; Conditions</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Iconos ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <!-- Scrips para el bar -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="../../js/scripts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="../../assets/demo/chart-area-demo.js"></script>
  <script src="../../assets/demo/chart-bar-demo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
  <script src="../../js/datatables-simple-demo.js"></script>
</body>

</html>