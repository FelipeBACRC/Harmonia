<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Harmonia/View/LayoutInterno.php";

// Datos simulados de reportes (mes, ingresos, egresos, etc.)
$reportes = [
    ['fecha' => '2025-07-31', 'nombre' => 'Reporte Julio 2025', 'balance' => 1500, 'ingresos' => 3000, 'egresos' => 1500, 'pendientes' => 200],
    ['fecha' => '2025-08-31', 'nombre' => 'Reporte Agosto 2025', 'balance' => 2000, 'ingresos' => 4000, 'egresos' => 2000, 'pendientes' => 100],
];

// Capturar filtros
$rangoInicio = $_GET['fecha_inicio'] ?? '';
$rangoFin = $_GET['fecha_fin'] ?? '';
$generarManual = isset($_GET['generar_manual']);

$mensaje = '';
$reportesFiltrados = $reportes;

if ($generarManual) {
    $mensaje = "Reporte generado manualmente con éxito.";
} elseif ($rangoInicio && $rangoFin) {
    // Filtrar reportes según rango
    $reportesFiltrados = array_filter($reportes, function($r) use ($rangoInicio, $rangoFin) {
        return ($r['fecha'] >= $rangoInicio) && ($r['fecha'] <= $rangoFin);
    });
    if (empty($reportesFiltrados)) {
        $mensaje = "No se encontraron reportes en el rango seleccionado.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<?php PrintCssInterno(); ?>
<main>
<?php BarraNavegacion("Administrador", "Admin", "admin@mail.com", 123456789); ?>

<div class="container py-5">
    <h1 class="text-center mb-4">Reportes Financieros</h1>

    <?php if ($mensaje): ?>
        <div class="alert alert-info text-center"><?= htmlspecialchars($mensaje) ?></div>
    <?php endif; ?>

    <div class="d-flex justify-content-between mb-4">
        <form method="GET" class="d-flex gap-2 align-items-center">
            <label for="fecha_inicio" class="mb-0">Fecha inicio:</label>
            <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control" value="<?= htmlspecialchars($rangoInicio) ?>" required>
            <label for="fecha_fin" class="mb-0">Fecha fin:</label>
            <input type="date" name="fecha_fin" id="fecha_fin" class="form-control" value="<?= htmlspecialchars($rangoFin) ?>" required>
            <button type="submit" class="btn btn-primary">Filtrar</button>
        </form>

        <form method="GET">
            <input type="hidden" name="generar_manual" value="1">
            <button type="submit" class="btn btn-success">Generar Reporte Manual</button>
        </form>
    </div>

    <?php if (empty($reportesFiltrados)): ?>
        <p class="text-center">No hay reportes disponibles.</p>
    <?php else: ?>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nombre del Reporte</th>
                    <th>Fecha</th>
                    <th>Balance Mensual</th>
                    <th>Ingresos Totales</th>
                    <th>Egresos Detallados</th>
                    <th>Mensualidades Pendientes</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reportesFiltrados as $r): ?>
                    <tr>
                        <td><?= htmlspecialchars($r['nombre']) ?></td>
                        <td><?= htmlspecialchars($r['fecha']) ?></td>
                        <td>$<?= number_format($r['balance'], 2) ?></td>
                        <td>$<?= number_format($r['ingresos'], 2) ?></td>
                        <td>$<?= number_format($r['egresos'], 2) ?></td>
                        <td>$<?= number_format($r['pendientes'], 2) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>

<?php PrintFooterInterno(); ?>
<?php PrintScriptInerno(); ?>
</main>
