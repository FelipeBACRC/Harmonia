<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . "/Harmonia/View/LayoutInterno.php";
?>
<!DOCTYPE html>
<html lang="es">

<?php PrintCssInterno(); ?>
<main>
 <?php BarraNavegacion("Felipe","Bolanos","felipe@mail.com",402420695); ?>
<?php
// Simulación de datos existentes (rellenar con los datos reales desde la BD)
$usuario = [
    "Id" => 1,
    "Nombre" => "Felipe",
    "Apellido" => "Bolaños",
    "Correo" => "felipe@mail.com",
    "Direccion" => "San José",
    "Telefono" => "8888-8888"
];

$mensaje = $_GET['mensaje'] ?? ''; // mensaje de error si aplica
?>

<div class="auth-wrapper d-flex no-block justify-content-center align-items-center">
    <div class="auth-box">
        <div id="loginform">
            <div class="logo m-3 text-center">
                <br />
                <h2 class="font-medium m-b-20">Editar Perfil</h2>
                <br />
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="editar_perfil.php" method="POST" class="form-horizontal m-t-20">
                        <input type="hidden" name="Id" value="<?= htmlspecialchars($usuario['Id']) ?>">

                        <?php if (!empty($mensaje)): ?>
                            <div class="alert alert-danger" role="alert">
                                <?= htmlspecialchars($mensaje) ?>
                            </div>
                        <?php endif; ?>

                        <div class="row justify-content-center">
                            <div class="col-md-6 d-flex justify-content-center">
                                <div style="width: 75%;">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" name="Nombre" class="form-control form-control-lg" placeholder="Nombre" aria-describedby="basic-addon1" value="<?= htmlspecialchars($usuario['Nombre']) ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex justify-content-center">
                                <div style="width: 75%;">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon2"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" name="Apellido" class="form-control form-control-lg" placeholder="Apellido" aria-describedby="basic-addon2" value="<?= htmlspecialchars($usuario['Apellido']) ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex justify-content-center">
                                <div style="width: 75%;">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><i class="fas fa-envelope"></i></span>
                                        </div>
                                        <input type="email" name="Correo" class="form-control form-control-lg" placeholder="Correo" aria-describedby="basic-addon3" value="<?= htmlspecialchars($usuario['Correo']) ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex justify-content-center">
                                <div style="width: 75%;">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon4"><i class="fas fa-map-marker-alt"></i></span>
                                        </div>
                                        <input type="text" name="Direccion" class="form-control form-control-lg" placeholder="Dirección" aria-describedby="basic-addon4" value="<?= htmlspecialchars($usuario['Direccion']) ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex justify-content-center">
                                <div style="width: 75%;">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon5"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="text" name="Telefono" class="form-control form-control-lg" placeholder="Teléfono" aria-describedby="basic-addon5" value="<?= htmlspecialchars($usuario['Telefono']) ?>">
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
            </div>
        </div>
    </div>
</div>
    <?php PrintFooterInterno(); ?>
    <?php PrintScriptInerno(); ?>
</main>
