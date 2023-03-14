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
                    <a class="nav-link fw-bold" style="color:#323232" href="index.php">Objetivos</a>
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
            <!-- Mensaje de inicio de sesion correcto-->

            
            <!-- Metodo para añadir elemtos e impresion de la tabla-->
            <div class="card card-body">
              <form action="save_task.php" method="POST">
                <div class="form-group">
                  <h3>REGISTRO DE CAMPOS</h3>
                  <p class="sub">Especifico</p>
                  <input type="text" class="form-control mb-3" name="ob" placeholder="Objetivo">
                  <input type="text" class="form-control mb-3" name="me" placeholder="Meta">
                  <p class="sub">Medible</p>
                  <input type="text" class="form-control mb-3" name="ind" placeholder="Indicadores">
                  <input type="text" class="form-control mb-3" name="fu" placeholder="Fuente de los Datos">
                  <p class="sub">Alcanzable</p>
                  <input type="text" class="form-control mb-3" name="es" placeholder="Estrategías para lograrlo">
                  <input type="text" class="form-control mb-3" name="re" placeholder="Responsables">
                  <p class="sub">Recurso Disponible</p>
                  <input type="text" class="form-control mb-3" name="fi" placeholder="Financieros">
                  <input type="text" class="form-control mb-3" name="hu" placeholder="Humanos">
                  <input type="text" class="form-control mb-3" name="eq" placeholder="Equipo e Infraestructura">
                  <input type="text" class="form-control mb-3" name="ti" placeholder="Tiempo">
                  <p class="sub">Linea de Tiempo</p>
                  <input type="text" class="form-control mb-3" name="feI" placeholder="Fecha de Inicio 000-00-000">
                  <input type="text" class="form-control mb-3" name="feT" placeholder="Fecha de Termino 000-00-00">
                </div>
                <input type="submit" name="save_task" class="forma" value="Guardar" />
              </form>
              </form>
            </div>
          </div>
          <div class="col-md-8">
            <table class="default" id="tabla">

              <h1>OBJETIVO</h1>
              <p class="concepto"><b>OBJETIVO:</b> Resultado deseados que se esperan alcanzar con la
                ejecución de las actividades que integran un proyecto, empresa o entidad.</p>
              <p class="concepto"><b>META:</b> Fin hacia el que se dirigen las acciones o deseos.</p>
              <p class="concepto"><b>INDICADORES:</b> A donde va dirigido</p>
              <p class="concepto"><b>FUENTE DE LOS DATOS:</b> ¿De que fuente fue rescatada la información?</p>
              <p class="concepto"><b>ESTRATEGIAS PARA LOGRARLO:</b> Plan para lograr la meta</p>
              <p class="concepto"><b>RESPONSABLES:</b> ¿Quienbes estaran a cargo?</p>
              <p class="concepto"><b>RECURSOS FINANCIEROS:</b> Recursos financiero disponible</p>
              <p class="concepto"><b>RECURSOS HUMANOS:</b> ecursos Humano disponible</p>
              <p class="concepto"><b>EQUIPO E INFRAESTRUCTURA:</b> Recursos de Equipo e Infraestructura disponibles</p>
              <p class="concepto"><b>TIEMPO:</b> Tiempo disponible</p>
              <p class="concepto"><b>FECHA DE INICIO:</b>Fecha de Comienzo 000-00-00</p>
              <p class="concepto"><b>FECHA DE TERMINO:</b>Fecha de Termino 000-00-00</p>


              <thead>

                <tr>
                  <td colspan="2">Especifico</td>
                  <td colspan="2">Medible</td>
                  <td colspan="2">Alcanzable</td>
                  <td colspan="4">Realista</td>
                  <td colspan="2">Limite de tiempo</td>
                <tr>
                  <td rowspan="2">Objetivo</td>
                  <td rowspan="2">Meta</td>
                  <td rowspan="2">Indicadores</td>
                  <td rowspan="2">Fuente de los datos</td>
                  <td rowspan="2">Estrategías para lograrlo</td>
                  <td rowspan="2">Responsables</td>
                  <td colspan="4">Recursos disponibles</td>
                  <td rowspan="2">Fecha de inicio</td>
                  <td rowspan="2">Fecha de termino</td>
                </tr>

                <tr>
                  <td>Financieros</td>
                  <td>Humanos</td>
                  <td>Equipo e infraestructura</td>
                  <td>Tiempo</td>
                </tr>
              </thead>
              <tbody>
                <h1> </h1>


                <?php

                include('db.php');

              
                if ($id_empresa['id_empresa'] == 1) { //admin
                  $query = "SELECT * FROM objetivos";
                  $result_tasks = mysqli_query($conexion, $query);
                } else {

                  $query = "SELECT * FROM objetivos WHERE id_empresa = '$id_empresa'";
                  $result_tasks = mysqli_query($conexion, $query);
                }
              

                while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
                  <tr>
                    <th><?php echo $row['ob'] ?></th>
                    <th><?php echo $row['me'] ?></th>
                    <th><?php echo $row['ind'] ?></th>
                    <th><?php echo $row['fu'] ?></th>
                    <th><?php echo $row['es'] ?></th>
                    <th><?php echo $row['re'] ?></th>
                    <th><?php echo $row['fi'] ?></th>
                    <th><?php echo $row['hu'] ?></th>
                    <th><?php echo $row['eq'] ?></th>
                    <th><?php echo $row['ti'] ?></th>
                    <th><?php echo $row['feI'] ?></th>
                    <th><?php echo $row['feT'] ?></th>



                    <td>
                      <a href="edit.php?id_obj=<?php echo $row['id_obj'] ?>" class="btn btn-secondary">
                        <i class="fas fa-marker"></i>
                      </a>
                      <a href="delete_task.php?id_obj=<?php echo $row['id_obj'] ?>" class="btn btn-danger">
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