<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Harmonia/View/LayoutInterno.php";

$periodos = ['2025 - I', '2025 - II'];
$materias = ['Teoría del Canto', 'Lectura de Partitura'];

$seleccionPeriodo = $_GET['periodo'] ?? '';
$seleccionMateria = $_GET['materia'] ?? '';

$informes = [
    ['materia' => 'Teoría del Canto', 'periodo' => '2025 - I', 'estudiante' => 'Juan Pérez', 'comentario' => 'Buen desempeño, puede avanzar más rápido'],
    ['materia' => 'Teoría del Canto', 'periodo' => '2025 - I', 'estudiante' => 'Ana Gómez', 'comentario' => 'Le cuesta el ritmo, se recomienda apoyo extra'],
    ['materia' => 'Lectura de Partitura', 'periodo' => '2025 - II', 'estudiante' => 'Carlos Mora', 'comentario' => 'Gran mejora desde el mes pasado'],
];

$errorCarga = false;
?>

<!DOCTYPE html>
<html lang="es">
<?php PrintCssInterno(); ?>
<main>
<?php BarraNavegacion("Felipe", "Bolanos", "felipe@mail.com", 402420695); ?>

<div class="container py-5">
    <h1 class="mb-4 text-center">Informe de Avance de Estudiantes</h1>

    <?php if ($errorCarga): ?>
        <div class="alert alert-danger">Error al cargar los datos. Por favor, inténtalo más tarde.</div>
    <?php else: ?>

        <div class="text-center mb-4">
            <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#formularioSeguimiento">
                Crear Seguimiento
            </button>
        </div>
        <div class="collapse mb-4" id="formularioSeguimiento">
            <div class="card card-body">
                <form method="POST" action="procesar_seguimiento.php">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="estudiante" class="form-label">Estudiante</label>
                            <input type="text" class="form-control" name="estudiante" id="estudiante" required>
                        </div>
                        <div class="col-md-6">
                            <label for="materia" class="form-label">Materia</label>
                            <select name="materia" id="materia" class="form-control" required>
                                <option value="">Seleccione</option>
                                <?php foreach ($materias as $materia): ?>
                                    <option value="<?= htmlspecialchars($materia) ?>"><?= htmlspecialchars($materia) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="periodo" class="form-label">Periodo</label>
                            <select name="periodo" id="periodo" class="form-control" required>
                                <option value="">Seleccione</option>
                                <?php foreach ($periodos as $periodo): ?>
                                    <option value="<?= htmlspecialchars($periodo) ?>"><?= htmlspecialchars($periodo) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="comentario" class="form-label">Comentario</label>
                            <textarea name="comentario" id="comentario" class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary mt-2">Guardar Informe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
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
        $filtrados = array_filter($informes, function ($i) use ($seleccionPeriodo, $seleccionMateria) {
            if ($seleccionPeriodo && $i['periodo'] !== $seleccionPeriodo) return false;
            if ($seleccionMateria && $i['materia'] !== $seleccionMateria) return false;
            return true;
        });
        ?>

        <?php if (count($filtrados) === 0): ?>
            <p class="text-center">No se encontraron informes con los filtros seleccionados.</p>
        <?php else: ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Estudiante</th>
                        <th>Materia</th>
                        <th>Periodo</th>
                        <th>Comentario</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($filtrados as $i): ?>
                        <tr>
                            <td><?= htmlspecialchars($i['estudiante']) ?></td>
                            <td><?= htmlspecialchars($i['materia']) ?></td>
                            <td><?= htmlspecialchars($i['periodo']) ?></td>
                            <td><?= htmlspecialchars($i['comentario']) ?></td>
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

