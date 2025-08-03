<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Harmonia/View/LayoutInterno.php";

$mensaje = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fechaInicio = $_POST['fechaInicio'] ?? '';
    $fechaFin = $_POST['fechaFin'] ?? '';

    if (!$fechaInicio || !$fechaFin) {
        $error = "Ambas fechas son obligatorias.";
    } elseif (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $fechaInicio) || !preg_match('/^\d{4}-\d{2}-\d{2}$/', $fechaFin)) {
        $error = "Formato de fecha inválido. Use AAAA-MM-DD.";
    } elseif ($fechaFin < $fechaInicio) {
        $error = "La fecha de cierre no puede ser anterior a la fecha de inicio.";
    } else {
        $mensaje = "El período de matrícula fue configurado correctamente.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<?php PrintCssInterno(); ?>
<main>
<?php BarraNavegacion("Administrador", "Admin", "admin@mail.com", 123456789); ?>

<div class="container py-5">
    <h1 class="mb-4">Configuración del Período de Matrícula</h1>

    <?php if ($mensaje): ?>
        <div class="alert alert-success"><?= htmlspecialchars($mensaje) ?></div>
    <?php endif; ?>
    <?php if ($error): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form method="POST" novalidate>
        <div class="mb-3">
            <label for="fechaInicio" class="form-label">Fecha de Inicio</label>
            <input type="date" id="fechaInicio" name="fechaInicio" class="form-control" value="<?= htmlspecialchars($_POST['fechaInicio'] ?? '') ?>" required>
        </div>

        <div class="mb-3">
            <label for="fechaFin" class="form-label">Fecha de Cierre</label>
            <input type="date" id="fechaFin" name="fechaFin" class="form-control" value="<?= htmlspecialchars($_POST['fechaFin'] ?? '') ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Configuración</button>
    </form>
</div>

<?php PrintFooterInterno(); ?>
<?php PrintScriptInerno(); ?>
</main>
