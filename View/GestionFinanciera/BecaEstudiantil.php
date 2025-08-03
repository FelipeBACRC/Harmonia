<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Harmonia/View/LayoutInterno.php";

// Datos simulados
$becasDisponibles = [0, 25, 50, 75]; // en porcentaje
$estudiantes = [
    ['id' => 1, 'nombre' => 'Juan Pérez', 'subtotal' => 50000, 'beca' => 25],
    ['id' => 2, 'nombre' => 'María Gómez', 'subtotal' => 50000, 'beca' => 0],
    ['id' => 3, 'nombre' => 'Luis Rodríguez', 'subtotal' => 50000, 'beca' => 50],
];

// Procesar formulario simulado (no guarda cambios, solo muestra mensaje)
$mensaje = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idEstudiante = $_POST['estudiante'] ?? '';
    $porcentajeBeca = $_POST['beca'] ?? '';

    if ($idEstudiante !== '' && $porcentajeBeca !== '') {
        $mensaje = "Beca asignada: Estudiante ID $idEstudiante, Beca $porcentajeBeca%";
    } else {
        $mensaje = "Por favor, seleccione estudiante y porcentaje de beca.";
    }
}

function calcularDescuento($subtotal, $porcentaje) {
    return $subtotal * $porcentaje / 100;
}
?>

<!DOCTYPE html>
<html lang="es">
<?php PrintCssInterno(); ?>
<main>
<?php BarraNavegacion("Admin", "Admin", "admin@mail.com", 123456789); ?>

<div class="container py-5">
    <h1 class="mb-4 text-center">Gestión de Becas a Estudiantes</h1>

    <?php if ($mensaje): ?>
        <div class="alert alert-info"><?= htmlspecialchars($mensaje) ?></div>
    <?php endif; ?>

    <form method="POST" class="row g-3 mb-5">
        <div class="col-md-6">
            <label for="estudiante" class="form-label">Seleccionar Estudiante</label>
            <select name="estudiante" id="estudiante" class="form-control" required>
                <option value="">-- Seleccione --</option>
                <?php foreach ($estudiantes as $est): ?>
                    <option value="<?= $est['id'] ?>">
                        <?= htmlspecialchars($est['nombre']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="col-md-4">
            <label for="beca" class="form-label">Porcentaje de Beca</label>
            <select name="beca" id="beca" class="form-control" required>
                <option value="">-- Seleccione --</option>
                <?php foreach ($becasDisponibles as $porcentaje): ?>
                    <option value="<?= $porcentaje ?>"><?= $porcentaje ?>%</option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="col-md-2 d-flex align-items-end">
            <button type="submit" class="btn btn-primary w-100">Asignar Beca</button>
        </div>
    </form>

    <h2 class="mb-3">Reporte de Estudiantes Becados</h2>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre Completo</th>
                <th>Subtotal</th>
                <th>% Beca</th>
                <th>Descuento</th>
                <th>Total con Descuento</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estudiantes as $est): 
                $descuento = calcularDescuento($est['subtotal'], $est['beca']);
                $total = $est['subtotal'] - $descuento;
            ?>
            <tr>
                <td><?= $est['id'] ?></td>
                <td><?= htmlspecialchars($est['nombre']) ?></td>
                <td>₡<?= number_format($est['subtotal'], 2) ?></td>
                <td><?= $est['beca'] ?>%</td>
                <td>₡<?= number_format($descuento, 2) ?></td>
                <td>₡<?= number_format($total, 2) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php PrintFooterInterno(); ?>
<?php PrintScriptInerno(); ?>
</main>
