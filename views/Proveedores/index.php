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
                <a class="nav-link fw-bold" style="color:#323232" href="../Infraestructura/index.php">Infrestuctura</a>
                <a class="nav-link fw-bold" style="color:#323232" href="../Documentada/index.php">Info.Documental</a>
              </nav>
            </div>

            <a class="nav-link fw-bold" style="color:#323232" href="../CrudArchivos/index.php">
              <div class="sb-nav-link-icon" style="color:#323232"><ion-icon name="keypad" style="color:#000000"></ion-icon></div>
              Operacion
            </a>

            <a class="nav-link fw-bold" style="color:#323232" href="index.php">
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
        <title>PROVEEDORES</title>
        <main class="container p-4">

          <div class="row">
            <div class="col-md-4">
              <!-- Mensaje de inicio de sesion correcto-->

              <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                  <?= $_SESSION['message'] ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              <?php session_unset();
              } ?>
              <!-- Metodo para añadir elemtos e impresion de la tabla-->
              <div class="card card-body">
                <form action="save_task.php" method="POST">
                  <div class="form-group">
                    <p class="titulo">PROVEEDORES NACIONALES</p>
                    <p class="sub"></p>
                    <input type="text" class="form-control mb-3" name="n" placeholder="Nombre del proveedor">
                    <input type="text" class="form-control mb-3" name="r" placeholder="R.F.C">
                    <input type="text" class="form-control mb-3" name="d" placeholder="Domicilio">
                    <input type="text" class="form-control mb-3" name="t" placeholder="No. Telefonico">
                    <input type="text" class="form-control mb-3" name="e" placeholder="Email">
                    <input type="text" class="form-control mb-3" name="a" placeholder="Actividad Comercial">
                    <input type="text" class="form-control mb-3" name="f" placeholder="Fecha de Evaluación">
                    <input type="text" class="form-control mb-3" name="c" placeholder="Calificación">
                    <input type="text" class="form-control mb-3" name="fe" placeholder="Fecha de Siguiente Evaluación">
                    <input type="text" class="form-control mb-3" name="cl" placeholder="Clasificación">

                  </div>
                  <input type="submit" name="save_task" class="forma" value="Guardar" />
                </form>
              </div>
            </div>
            <div class="col-md-8">
              <table class="default" id="tabla">

                <h1>PROVEEDORES</h1>

                <thead>
                  <p class="concepto"><b>PROOVEDORES NACIONALES:</b> Un proveedor se adapta a las necesidades de cada empresa, pero eso no quiere decir que sea fácil de delimitar. Esto es porque existen normas jurídicas para determinar cómo se interpone un proveedor en la producción o prestación de un servicio a otros.

                    Estas normas establecen particularidades para considerar quién es el verdadero proveedor a la hora de empezar la operación con un cliente, generando así un vínculo de colaboración entre ambas partes. Por lo que, este creará un valor añadido a la empresa para quien provee.</p>



                  </style>

                  <h1></h1>

                  <thead>
                    <thead>

                      <tr>
                        <td colspan="11">PROVEEDORES NACIONALES</td>
                      </tr>
                      <tr>
                        <td>Nombre del Proveedor</td>
                        <td>R.F.C.</td>
                        <td>Domicilio</td>
                        <td>No. Telefonico</td>
                        <td>Email</td>
                        <td>Actividad Comercial</td>
                        <td>Fecha de Evaluación</td>
                        <td>Calificación</td>
                        <td>Fecha de Siguiente Evaluación</td>
                        <td>Clasificación</td>
                        <td>Accion</td>
                      </tr>

                    </thead>
                  <tbody>
                    <h1> </h1>


                    <?php
                    include('db.php');


                         
                if ($id_empresa['id_empresa'] == 1) { //admin
                  $query = "SELECT * FROM proveedores";
                  $result_tasks = mysqli_query($conexion, $query);
                } else {

                  $query = "SELECT * FROM proveedores WHERE id_empresa = '$id_empresa'";
                  $result_tasks = mysqli_query($conexion, $query);
                }
          

                    while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
                      <tr>
                        <th><?php echo $row['n'] ?></th>
                        <th><?php echo $row['r'] ?></th>
                        <th><?php echo $row['d'] ?></th>
                        <th><?php echo $row['t'] ?></th>
                        <th><?php echo $row['e'] ?></th>
                        <th><?php echo $row['a'] ?></th>
                        <th><?php echo $row['f'] ?></th>
                        <th><?php echo $row['c'] ?></th>
                        <th><?php echo $row['fe'] ?></th>
                        <th><?php echo $row['cl'] ?></th>

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