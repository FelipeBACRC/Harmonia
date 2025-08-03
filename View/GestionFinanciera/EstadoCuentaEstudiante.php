<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Harmonia/View/LayoutInterno.php";

// Datos simulados
$estudiantes = [
    ['id' => 1, 'nombre' => 'Juan Pérez', 'pendiente' => true, 'periodos' => ['2025-I', '2025-II'], 'subtotal' => 100000, 'recargo' => 5000, 'impuesto' => 0],
    ['id' => 2, 'nombre' => 'María Gómez', 'pendiente' => false, 'periodos' => [], 'subtotal' => 0, 'recargo' => 0, 'impuesto' => 0],
    ['id' => 3, 'nombre' => 'Luis Rodríguez', 'pendiente' => true, 'periodos' => ['2025-II'], 'subtotal' => 50000, 'recargo' => 2500, 'impuesto' => 0],
];

// Parámetros
$seleccionEstudianteId = $_GET['estudiante'] ?? '';
$filtrarPendientes = isset($_GET['solo_pendientes']);

// Buscar estudiante seleccionado
$estudianteSeleccionado = null;
foreach ($estudiantes as $est) {
    if ($est['id'] == $seleccionEstudianteId) {
        $estudianteSeleccionado = $est;
        break;
    }
}

// Filtrar estudiantes con pendientes si aplica
$estudiantesFiltrados = $filtrarPendientes 
    ? array_filter($estudiantes, fn($e) => $e['pendiente']) 
    : $estudiantes;

function calcularTotal($subtotal, $recargo, $impuesto) {
    return $subtotal + $recargo + $impuesto;
}
?>

<!DOCTYPE html>
<html lang="es">
<?php PrintCssInterno(); ?>
<main>
<?php BarraNavegacion("Admin", "Admin", "admin@mail.com", 123456789); ?>

<div class="container py-5">
    <h1 class="mb-4 text-center">Estado de Cuenta de Estudiantes</h1>

    <form method="GET" class="row g-3 mb-4 align-items-end">
        <div class="col-md-6">
            <label for="estudiante" class="form-label">Seleccionar Estudiante</label>
            <select name="estudiante" id="estudiante" class="form-control">
                <option value="">-- Todos --</option>
                <?php foreach ($estudiantes as $est): ?>
                    <option value="<?= $est['id'] ?>" <?= ($est['id'] == $seleccionEstudianteId) ? 'selected' : '' ?>>
                        <?= htmlspecialchars($est['nombre']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="col-md-4 form-check">
            <input type="checkbox" id="solo_pendientes" name="solo_pendientes" class="form-check-input" <?= $filtrarPendientes ? 'checked' : '' ?>>
            <label for="solo_pendientes" class="form-check-label">Mostrar solo con pagos pendientes</label>
        </div>

        <div class="col-md-2 text-end">
            <button type="submit" class="btn btn-primary w-100">Filtrar</button>
        </div>
    </form>

    <?php if ($seleccionEstudianteId && $estudianteSeleccionado): ?>
        <h3>Estado de cuenta de <?= htmlspecialchars($estudianteSeleccionado['nombre']) ?></h3>
        <?php if ($estudianteSeleccionado['pendiente']): ?>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Periodo(s) Pendientes</th>
                        <th>Subtotal</th>
                        <th>Recargo</th>
                        <th>Impuesto</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= implode(', ', $estudianteSeleccionado['periodos']) ?></td>
                        <td>$<?= number_format($estudianteSeleccionado['subtotal'], 2) ?></td>
                        <td>$<?= number_format($estudianteSeleccionado['recargo'], 2) ?></td>
                        <td>$<?= number_format($estudianteSeleccionado['impuesto'], 2) ?></td>
                        <td>$<?= number_format(calcularTotal($estudianteSeleccionado['subtotal'], $estudianteSeleccionado['recargo'], $estudianteSeleccionado['impuesto']), 2) ?></td>
                    </tr>
                </tbody>
            </table>
            <button class="btn btn-success mt-3" onclick="alert('Función de exportar aún no implementada')">Exportar Estado de Cuenta</button>
        <?php else: ?>
            <p class="alert alert-success">El estudiante no tiene pagos pendientes.</p>
        <?php endif; ?>

    <?php else: ?>
        <h3>Listado de estudiantes <?= $filtrarPendientes ? 'con pagos pendientes' : '' ?></h3>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre Completo</th>
                    <th>Periodos Pendientes</th>
                    <th>Subtotal</th>
                    <th>Recargo</th>
                    <th>Impuesto</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estudiantesFiltrados as $est): ?>
                    <?php if ($filtrarPendientes && !$est['pendiente']) continue; ?>
                    <tr>
                        <td><?= $est['id'] ?></td>
                        <td><?= htmlspecialchars($est['nombre']) ?></td>
                        <td><?= $est['pendiente'] ? implode(', ', $est['periodos']) : '-' ?></td>
                        <td>₡<?= number_format($est['subtotal'], 2) ?></td>
                        <td>₡<?= number_format($est['recargo'], 2) ?></td>
                        <td>₡<?= number_format($est['impuesto'], 2) ?></td>
                        <td>₡<?= number_format(calcularTotal($est['subtotal'], $est['recargo'], $est['impuesto']), 2) ?></td>
                    </tr>
                <?php endforeach; ?>
                <?php if(empty($estudiantesFiltrados)): ?>
                    <tr><td colspan="7" class="text-center">No hay estudiantes para mostrar.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>

<?php PrintFooterInterno(); ?>
<?php PrintScriptInerno(); ?>
</main>
