<?php

session_start();
error_reporting(0);

$validar = $_SESSION['nombre'];
$id_empresa = $_SESSION['id_empresa'];

if ($validar == null || $validar = '') {

  header("Location: ../includes/login.php");
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
  <link href="../css/styles.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="user.php"><ion-icon name="person-circle-outline"></ion-icon> Admin <?php echo $_SESSION['id']; ?></a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
      <div class="input-group">
        <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
        <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
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
          <li><a class="dropdown-item" href="../includes/_sesion/cerrarSesion.php">Cerrar Sesion</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                      
                        <div class="nav">
                        <div class="sb-sidenav-menu-heading">Adminstrador</div>


                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAdmin" aria-expanded="false" aria-controls="collapseRecursoss">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Admistacion
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseAdmin" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="lector.php">Usuarios</a>
                                    <a class="nav-link" href="empresaAdm.php">Empresa</a>
                                </nav>
                            </div>

                        
                            <div class="sb-sidenav-menu-heading">Empresa</div>
                            
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Introduccion
                            </a>
                            
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCapacitacion" aria-expanded="false" aria-controls="collapseCapacitacion">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Capacitacion
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseCapacitacion" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Ineterpretacion ISO 9001
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">Sesion 1</a>
                                            <a class="nav-link" href="#">Sesion 2</a>
                                            <a class="nav-link" href="#">Sesion 3</a>
                                            <a class="nav-link" href="#">Sesion 4</a>
                                        </nav>
                                    </div>
                            </div>
                                
                                







                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseOrganisacion" aria-expanded="false" aria-controls="collapseOrganisacion">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Organizacion
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseOrganisacion" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Liderazgo
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">Objetivos</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Contexto de la organizacion
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">Pestel</a>
                                            <a class="nav-link" href="Foda/index.php">Foda</a>
                                            <a class="nav-link" href="#">Partes intersadas</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Operacion
                            </a>
                                </nav>
                            </div>


                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProceso" aria-expanded="false" aria-controls="collapseProceso">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Proceso
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseProceso" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Mapeo
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">Diagrama de Tortuga</a>
                                            <a class="nav-link" href="#">Diagrama SIPOC</a>
                                            <a class="nav-link" href="#">Diagrama General</a>
                                        </nav>
                                    </div>
                            </div>
                    
                           
                            
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Riesgos&Oportunidades
                            </a>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseRecursos" aria-expanded="false" aria-controls="collapseRecursoss">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Recursos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseRecursos" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Personal</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Infrestuctura</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Info.Documental</a>
                                </nav>
                            </div>

                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Operacion
                            </a>

                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Provedores
                            </a>

                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Desempeño                            </a>

                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Mejora
                            </a>


                          </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">SECAAC</div>
                        Transforma
                    </div>
                </nav>
            </div>
    <div id="layoutSidenav_content">
      <main>


       
      <div class="container is-fluid">
                    <div class="col-xs-12">
                        <center>
                            <h1>Administardor de Empresa</h1>
                        </center><br>

                        <div>
                            <a class="btn btn-primary" href="./subAdmin/registrar.php">Nueva Empresa
                                <i class="fa fa-plus"></i> </a>
                            <a class="btn btn-success" href="../includes/excel.php">Reporte Excel
                                <i class="fa fa-table" aria-hidden="true"></i>
                            </a>

                        </div>
                        <br>
                        </form>



                        <table class="table table-striped table-dark " id="table_id">


                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Logo</th>
                                    <th>Acciones</th>

                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                $conexion = mysqli_connect("localhost", "root", "", "r_user");
                                $SQL = "SELECT * FROM empresas where id_empresa='$id_empresa'";
                                $dato = mysqli_query($conexion, $SQL);

                                if ($dato->num_rows > 0) {
                                    while ($fila = mysqli_fetch_array($dato)) {

                                ?>
                                        <tr>
                                            <td><?php echo $fila['emp_nombre']; ?></td>
                                         <td>
                                    <img width="100" src="data:<?php echo $fila['tipo']; ?>;base64,<?php echo  base64_encode($fila['logo']); ?>">

                                </td>



                                            <td>


                                                <a class="btn btn-warning" href="editar_user.php?id=<?php echo $fila['id'] ?> ">
                                                    <i class="fa fa-edit"></i> </a>

                                                <a class="btn btn-danger" href="eliminar_user.php?id=<?php echo $fila['id'] ?>">
                                                    <i class="fa fa-trash"></i></a>

                                            </td>
                                        </tr>


                                    <?php
                                    }
                                } else {

                                    ?>
                                    <tr class="text-center">
                                        <td colspan="16">No existen registros</td>
                                    </tr>


                                <?php

                                }

                                ?>


</body>
</table>



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
<script src="../js/scripts.js"></script>
<script src="../js/user.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="../js/datatables-simple-demo.js"></script>
</body>

</html>