<?php
function PrintCssInterno()
{
    echo '<head>
    <meta charset="utf-8">
    <title>Charlenne Stewart Academy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="icon" type="image/png" sizes="16x16" href="/Images/logo-academia-png-100.png" />
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link href="../Styles/css/Home/owl.carousel.min.css" rel="stylesheet">
    <link href="../Styles/css/Home/styleHomePage.css" rel="stylesheet" />
        </head>';
}

function BarraNavegacion($nombre = "", $apellido = "", $email = "", $id = null)
{
    echo '
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center py-4 px-xl-5">
            <div class="col-lg-3">
                <a href="../Home/principal.php" class="text-decoration-none">
                    <h1 class="m-0"><span class="text-primary">Charlenne </span>Stewart Academy</h1>
                </a>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Ubicación</h6>
                         <a href="https://maps.app.goo.gl/2vmDt6aQW7717niv9"><small>Av. 3, San José, Desamparados, Lomas de Salitral</small></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-envelope text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Escríbenos</h6>
                        <small>daurtecalderon@hotmail.com</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-phone text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Llámanos</h6>
                        <small>+506 8697 2380</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
               <a class="d-flex align-items-center justify-content-between bg-secondary w-100 text-decoration-none" data-bs-toggle="collapse" href="#navbar-vertical" style="height: 67px; padding: 0 30px;">
                    <h5 class="text-primary m-0"><i class="fa fa-book-open mr-2"></i>Clases</h5>
                    <i class="fa fa-angle-down text-primary"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 9;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Instrumentos <i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="#" class="dropdown-item">Piano</a>
                                <a href="#" class="dropdown-item">Guitarra</a>
                                <a href="#" class="dropdown-item">Violín</a>
                                <a href="#" class="dropdown-item">Bajo</a>
                            </div>
                        </div>
                        <a href="#" class="nav-item nav-link">Canto</a>
                        <a href="#" class="nav-item nav-link">Teoría Musical</a>
                        <a href="#" class="nav-item nav-link">Producción Musical</a>
                        <a href="#" class="nav-item nav-link">Composición</a>
                        <a href="#" class="nav-item nav-link">Historia de la Música</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="#" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0"><span class="text-primary">CHARLENNE</span></h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">

                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav py-0">
                            <a href="../Home/Principal.php" class="nav-item nav-link active">Home</a>
                             <div class="nav-item dropdown">
                                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Profesor</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="../Profesor/AsignarTarea.php" class="dropdown-item">Asignar Tareas</a>
                                    <a href="../Profesor/GestionNotas.php" class="dropdown-item">Gestion de Notas</a>
                                    <a href="../Profesor/FeedbackEstudiante.php" class="dropdown-item">Retroalimentacio a Estudiantes</a>
                                    <a href="../Profesor/SeguimientoEstudiante.php" class="dropdown-item">Seguimientos de Estudiantes</a>
                                </div>
                                </div>
                            <div class="nav-item dropdown">
                                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Estudiante</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="../Matricula/AdministrarMatricula.php" class="dropdown-item">Matricula</a>
                                    <a href="../Estudiante/MisClases.php" class="dropdown-item">Mis Clases</a>
                                    <a href="../Estudiante/MiCalificacion.php" class="dropdown-item">Mis Calificaciones</a>
                                    <a href="../Estudiante/ClaseRefuerzo.php" class="dropdown-item">Gestión Clase de Refuerzo</a>

                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Administración</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="../Matricula/PeriodosMatricula.php" class="dropdown-item">Periodos de Matrícula</a>
                                    <a href="../Usuario/AdministrarUsuarios.php" class="dropdown-item">Gestión de Usuarios</a>
                                </div>
                            </div>
                             <div class="nav-item dropdown">
                                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Gestion Financiera</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="../GestionFinanciera/ReportesFinancieros.php" class="dropdown-item">Reportes Financieros</a>
                                    <a href="../GestionFinanciera/EstadoCuentaEstudiante.php" class="dropdown-item">Estado de Cuenta de Estudiantes</a>
                                    <a href="../GestionFinanciera/BecaEstudiantil.php" class="dropdown-item">Beca de Estudiantes</a>
                                    <a href="../GestionFinanciera/MetodoPago.php" class="dropdown-item">Gestión de Métodos de Pago</a>



                                </div>
                                </div>
                                      <a href="../Home/Contacto.php" class="nav-item nav-link">Contacto</a>
                        </div>

                        <div class="navbar-nav py-0 ml-auto">
                            <ul class="navbar-nav float-left mr-auto"></ul>
                            <ul class="navbar-nav float-right">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic" href="#" data-bs-toggle="dropdown">
                                        <span class="m-l-5 font-medium d-none d-sm-inline-block">' . htmlspecialchars($nombre) . ' <i class="mdi mdi-chevron-down"></i></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" style="right: 0; left: auto; z-index: 1050;">
                                        <li>
                                            <div class="d-flex no-block align-items-center p-3 bg-primary text-white mb-2">
                                                <div class="ms-3">
                                                    <h4 class="mb-0 text-secondary">' . htmlspecialchars($nombre) . ' ' . htmlspecialchars($apellido) . '</h4>
                                                    <p class="mb-0">' . htmlspecialchars($email) . '</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>';
                                            if ($id !== null) {
                                                echo '<a class="dropdown-item" href="../Usuario/EditarPerfil.php">
                                                    <i class="ti-settings me-2"></i> Editar Perfil
                                                </a>';
                                            } else {
                                                echo '<span class="dropdown-item text-danger">ID no disponible</span>';
                                            }
    echo '                          </li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li>
                                            <a class="dropdown-item" href="../Login/login.php">
                                                <i class="fa fa-power-off me-2"></i> Cerrar Sesión
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>';
}


function PrintScriptInerno()
{
echo '
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> <!-- ESTA ES LA CLAVE -->
    <script src="../Scripts/Home/easing.min.js"></script>
    <script src="../Scripts/Home/owl.carousel.min.js"></script>
    <script src="../Scripts/Home/main.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="../Scripts/editables.js"></script>
    <script src="../Scripts/Cursos/dataTable.js"></script>
</body>';

}

function PrintFooterInterno()
{
    echo '
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-7 col-md-12">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Solicita información</h5>
                        <a href="https://maps.app.goo.gl/XWZCu5Wsnkcwbn6P6" class="text-white"><p><i class="fa fa-map-marker-alt mr-2"></i>Av. 3, San José, Desamparados, Lomas de Salitral</p></a>
                        <p><i class="fa fa-phone-alt mr-2"></i>+506 8697 2380</p>
                        <p><i class="fa fa-envelope mr-2"></i>daurtecalderon@hotmail.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light btn-square mr-2" href="https://www.facebook.com/p/Charlene-Stewart-Academy-100057123414005/?locale=es_LA"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-square" href="https://www.instagram.com/charst.music/?hl=es-la"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Clase</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Instrumentos</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Canto</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Teoría Musical</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Producción Musical</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Composición</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Historia de la Música</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">
                    &copy; ' . date('Y') . ' Charlenne Stewart Academy. Todos los derechos reservados.
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
    ';
}



?>