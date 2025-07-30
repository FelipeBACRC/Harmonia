<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . "/Harmonia/View/LayoutInterno.php";
?>
<!DOCTYPE html>
<html lang="es">

<?php PrintCssInterno(); ?>
<main>
 <?php BarraNavegacion("Felipe","Bolanos","felipe@mail.com",402420695); ?>
<?php
$mensaje = $_GET['mensaje'] ?? '';
$roles = [
    ['id' => 1, 'nombre' => 'Administrador'],
    ['id' => 2, 'nombre' => 'Estudiante'],
    ['id' => 3, 'nombre' => 'Profesor']
];
?>

<div class="auth-wrapper d-flex no-block justify-content-center align-items-center">
    <div class="auth-box">
        <div id="loginform">
            <div class="logo m-3 text-center">
                <span class="db"><img src="../Img/logo-academia-png-100.png" /></span>
                <br />
                <h2 class="font-medium m-b-20">Registro de Usuario</h2>
                <br />
            </div>
            <div class="row">
                <div class="col-12">

                    <form action="AdministrarUsuarios.php" method="POST" class="form-horizontal m-t-20">

                        <?php if (!empty($mensaje)): ?>
                            <div class="alert alert-danger" role="alert">
                                <?= htmlspecialchars($mensaje) ?>
                            </div>
                        <?php endif; ?>

                        <div class="row justify-content-center">

                            <?php
                            function inputGroup($icon, $name, $type, $placeholder, $addonId) {
                                echo <<<HTML
                                <div class="col-md-6 d-flex justify-content-center">
                                    <div style="width: 75%;">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="$addonId"><i class="fas fa-$icon"></i></span>
                                            </div>
                                            <input type="$type" name="$name" class="form-control form-control-lg" placeholder="$placeholder" aria-describedby="$addonId" required>
                                        </div>
                                    </div>
                                </div>
HTML;
                            }

                            inputGroup("user", "Nombre", "text", "Nombre", "basic-addon1");
                            inputGroup("user", "Apellido", "text", "Apellido", "basic-addon2");
                            inputGroup("envelope", "Correo", "email", "Correo", "basic-addon3");
                            inputGroup("map-marker-alt", "Direccion", "text", "Dirección", "basic-addon4");
                            inputGroup("phone", "Telefono", "text", "Teléfono", "basic-addon5");
                            inputGroup("lock", "Contrasenna", "password", "Contraseña", "basic-addon6");
                            ?>

                            <div class="col-md-6 d-flex justify-content-center">
                                <div style="width: 75%;">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addonRol">
                                            <i class="fas fa-user-tag"></i>
                                        </span>
                                        <select name="RolId" id="Rol" class="form-control form-control-lg" required>
                                            <option value="">Seleccione un tipo de rol</option>
                                            <?php foreach ($roles as $rol): ?>
                                                <option value="<?= $rol['id'] ?>"><?= htmlspecialchars($rol['nombre']) ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="form-group text-center mt-3">
                            <div class="col-xs-12 p-b-20">
                                <button class="btn btn-primary btn-lg text-white btn-ora" type="submit" style="width: auto; padding-left: 40px; padding-right: 40px;">
                                    Procesar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="modal fade" id="registroExitosoModal" tabindex="-1" role="dialog" aria-labelledby="registroExitosoLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="registroExitosoLabel">Registro Exitoso</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ¡Usuario creado correctamente!
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php PrintFooterInterno(); ?>
    <?php PrintScriptInerno(); ?>
</main>