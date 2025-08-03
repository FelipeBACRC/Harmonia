<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Harmonia/View/LayoutInterno.php";


$periodos = ['2025 - I', '2025 - II'];
$materias = ['Teoría del Canto', 'Lectura de Partitura'];

$seleccionPeriodo = $_GET['periodo'] ?? '';
$seleccionMateria = $_GET['materia'] ?? '';

$calificaciones = [
    ['materia' => 'Teoría del Canto', 'periodo' => '2025 - I', 'nota' => 85],
    ['materia' => 'Lectura de Partitura', 'periodo' => '2025 - II', 'nota' => 90],
];


$errorCarga = false; 
?>

<!DOCTYPE html>
<html lang="es">
<?php PrintCssInterno(); ?>
<main>
<?php BarraNavegacion("Felipe", "Bolanos", "felipe@mail.com", 402420695); ?>

<div class="container py-5">
    <h1 class="mb-4 text-center">Mis Calificaciones</h1>

    <?php if ($errorCarga): ?>
        <div class="alert alert-danger">Error al cargar los datos. Por favor, inténtalo más tarde.</div>
    <?php else: ?>
        <form method="GET" class="row g-3 mb-4">
            <div class="col-md-6">
                <label for="periodo" class="form-label">Periodo Académico</label>
                <select name="periodo" id="periodo" class="form-control" required>
                    <option value="">Seleccione un periodo</option>
                    <?php foreach ($periodos as $periodo): ?>
                        <option value="<?= htmlspecialchars($periodo) ?>" <?= $periodo === $seleccionPeriodo ? 'selected' : '' ?>>
                            <?= htmlspecialchars($periodo) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-6">
                <label for="materia" class="form-label">Materia</label>
                <select name="materia" id="materia" class="form-control">
                    <option value="">Todas</option>
                    <?php foreach ($materias as $materia): ?>
                        <option value="<?= htmlspecialchars($materia) ?>" <?= $materia === $seleccionMateria ? 'selected' : '' ?>>
                            <?= htmlspecialchars($materia) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary mt-3">Filtrar</button>
            </div>
        </form>

        <?php

        $filtradas = array_filter($calificaciones, function ($c) use ($seleccionPeriodo, $seleccionMateria) {
            if ($seleccionPeriodo && $c['periodo'] !== $seleccionPeriodo) return false;
            if ($seleccionMateria && $c['materia'] !== $seleccionMateria) return false;
            return true;
        });
        ?>

        <?php if (count($filtradas) === 0): ?>
            <p class="text-center">No se encontraron calificaciones para los filtros seleccionados.</p>
        <?php else: ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Materia</th>
                        <th>Periodo Académico</th>
                        <th>Calificación</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($filtradas as $c): ?>
                        <tr>
                            <td><?= htmlspecialchars($c['materia']) ?></td>
                            <td><?= htmlspecialchars($c['periodo']) ?></td>
                            <td><?= htmlspecialchars($c['nota']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    <?php endif; ?>
</div>

<?php PrintFooterInterno(); ?>
<?php PrintScriptInerno(); ?>
</main>
