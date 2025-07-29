<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . "/Harmonia/View/LayoutExterno.php";
?>
<!DOCTYPE html>
<html lang="es">

        <?php PrintCss(); ?>
<main>

    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center"
         style="background: url('../Img/bg-secondary.png') no-repeat;">
        <div class="auth-box on-sidebar">
            <div id="loginform">
                <div class="logo">
                    <span class="db"><img src="../Img/logo-academia-png-100.png" alt="logo de la Academia" /></span><br />
                    <div class="text-decoration-none">
                        <h1 class="m-0"><span class="text-primary">Charlenne </span>Stewart Academy</h1>
                    </div>
                    <br />
                    <h3 class="font-medium m-b-20">Recuperar Usuario</h3>
                </div>
                <div class="row">
                    <div class="col-12">
                        <?php
                            $mensaje = "";
                            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                                $correo = $_POST["Correo"] ?? "";
                                $pass = $_POST["Contrasenna"] ?? "";
                                if ($correo === "admin@example.com" && $pass === "123456") {
                                    header("Location: dashboard.php");
                                    exit;
                                } else {
                                    $mensaje = "Credenciales incorrectas.";
                                }
                            }
                        ?>
                        <?php if (!empty($mensaje)): ?>
                            <div class="alert alert-danger" role="alert">
                                <?= htmlspecialchars($mensaje) ?>
                            </div>
                        <?php endif; ?>

                        <form method="POST" class="form-horizontal m-t-20">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-user"></i></span>
                                </div>
                                <input type="text" name="Correo" class="form-control form-control-lg" placeholder="Correo" required />
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <a href="login.php" id="to-recover" class="text-dark float-right"><i class="fa fa-lock m-r-5"></i> Iniciar Sesion</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <div class="col-xs-12 p-b-20">
                                    <button class="btn btn-block btn-lg btn-ora" type="submit">Recuperar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div id="recoverform" style="display: none;">
                <div class="logo">
                    <span class="db"><img src="assets/img/logo-temp.png" alt="logo de la Academia" /></span>
                    <h5 class="font-medium m-b-20">Recuperar Contraseña</h5>
                    <span>Ingrese su correo electrónico y se le enviarán las instrucciones!</span>
                </div>
                <div class="row m-t-20">
                    <form class="col-12" action="#">
                        <div class="form-group row">
                            <div class="col-12">
                                <input class="form-control form-control-lg" type="email" required placeholder="Correo">
                            </div>
                        </div>
                        <div class="row m-t-20">
                            <div class="col-12">
                                <button class="btn btn-block btn-lg btn-danger" type="submit" name="action">Recuperar</button>
                            </div>
                        </div>
                    </form>
                            
                </div>
            </div>
        </div>  
    </div>
    <?php PrintFooter(); ?>
    <?php PrintScript(); ?>
</main>
