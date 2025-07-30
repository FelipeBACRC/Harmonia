<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . "/Harmonia/View/LayoutInterno.php";
?>
<!DOCTYPE html>
<html lang="es">

<?php PrintCssInterno(); ?>
<main>
    <?php BarraNavegacion("Felipe","Bolanos","felipe@mail.com",402420695); ?>
    <?php
// Simulación del usuario cargado desde base de datos
$usuario = [
    "Id" => $_GET["id"] ?? 1,
    "Nombre" => "Felipe",
    "Apellido" => "Bolaños",
    "Correo" => "felipe@mail.com",
    "Direccion" => "San José",
    "Telefono" => "8888-8888",
    "RolId" => 2
];

// Simulación de roles disponibles
$roles = [
    ["id" => 1, "nombre" => "Administrador"],
    ["id" => 2, "nombre" => "Estudiante"],
    ["id" => 3, "nombre" => "Profesor"]
];

$mensaje = $_GET['mensaje'] ?? '';
?>

    <main>
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center">
            <div class="auth-box">
                <div id="loginform">
                    <div class="logo m-3 text-center">
                        <br />
                        <h2 class="font-medium m-b-20">Editar Usuario</h2>
                        <br />
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form action="AdministrarUsuarios.php" method="POST" class="form-horizontal m-t-20">
                                <input type="hidden" name="Id" value="<?= htmlspecialchars($usuario['Id']) ?>">

                                <?php if (!empty($mensaje)): ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= htmlspecialchars($mensaje) ?>
                                </div>
                                <?php endif; ?>

                                <div class="row justify-content-center">

                                    <?php
                                function inputGroup($icon, $name, $type, $placeholder, $addonId, $value) {
                                    echo <<<HTML
                                    <div class="col-md-6 d-flex justify-content-center">
                                        <div style="width: 75%;">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="$addonId"><i class="fas fa-$icon"></i></span>
                                                </div>
                                                <input type="$type" name="$name" value="$value" class="form-control form-control-lg" placeholder="$placeholder" aria-describedby="$addonId" required>
                                            </div>
                                        </div>
                                    </div>
HTML;
                                }

                                inputGroup("user", "Nombre", "text", "Nombre", "basic-addon1", htmlspecialchars($usuario["Nombre"]));
                                inputGroup("user", "Apellido", "text", "Apellido", "basic-addon2", htmlspecialchars($usuario["Apellido"]));
                                inputGroup("envelope", "Correo", "email", "Correo", "basic-addon3", htmlspecialchars($usuario["Correo"]));
                                inputGroup("map-marker-alt", "Direccion", "text", "Dirección", "basic-addon4", htmlspecialchars($usuario["Direccion"]));
                                inputGroup("phone", "Telefono", "text", "Teléfono", "basic-addon5", htmlspecialchars($usuario["Telefono"]));
                                ?>

                                    <!-- Dropdown de Rol -->
                                    <div class="col-md-6 d-flex justify-content-center">
                                        <div style="width: 75%;">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addonRol">
                                                    <i class="fas fa-user-tag"></i>
                                                </span>
                                                <select name="RolId" id="Rol" class="form-control form-control-lg"
                                                    required>
                                                    <option value="">Seleccione un tipo de rol</option>
                                                    <?php foreach ($roles as $rol): ?>
                                                    <option value="<?= $rol['id'] ?>"
                                                        <?= $usuario['RolId'] == $rol['id'] ? 'selected' : '' ?>>
                                                        <?= htmlspecialchars($rol['nombre']) ?>
                                                    </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group text-center mt-3">
                                    <div class="col-xs-12 p-b-20">
                                        <button class="btn btn-primary btn-lg text-white btn-ora" type="submit"
                                            style="width: auto; padding-left: 40px; padding-right: 40px;">
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
    </main>

    <?php PrintFooterInterno(); ?>
    <?php PrintScriptInerno(); ?>
</main>