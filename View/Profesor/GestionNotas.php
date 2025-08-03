<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Harmonia/View/LayoutInterno.php";


$esProfesor = true; 


$calificaciones = [
    ['materia' => 'Teoría del Canto', 'periodo' => '2025 - I', 'estudiante' => 'Juan Pérez', 'nota' => 85],
    ['materia' => 'Lectura de Partitura', 'periodo' => '2025 - II', 'estudiante' => 'María Gómez', 'nota' => 90],
    ['materia' => 'Teoría del Canto', 'periodo' => '2025 - I', 'estudiante' => 'Ana Rivera', 'nota' => 88],
    ['materia' => 'Lectura de Partitura', 'periodo' => '2025 - II', 'estudiante' => 'Carlos Soto', 'nota' => 95],
];



if ($esProfesor && isset($_FILES['csv_file'])) {
    $mensaje = "Archivo CSV subido y procesado correctamente (simulado).";
}
?>

<!DOCTYPE html>
<html lang="es">
<?php PrintCssInterno(); ?>
<main>
<?php BarraNavegacion("Profesor", "Pérez", "profesor@mail.com", 123456789); ?>

<div class="container py-5">
    <h1 class="mb-4 text-center">Actualizar Calificaciones</h1>

    <?php if (!$esProfesor): ?>
        <div class="alert alert-danger text-center">
            No tienes permisos para editar calificaciones.
        </div>
    <?php else: ?>
        <?php if (!empty($mensaje)): ?>
            <div class="alert alert-success"><?= htmlspecialchars($mensaje) ?></div>
        <?php endif; ?>

        <form method="POST" class="mb-4" enctype="multipart/form-data">
            <label for="csv_file">Importar calificaciones desde CSV:</label>
            <input type="file" name="csv_file" id="csv_file" accept=".csv" required>
            <button type="submit" class="btn btn-primary">Subir CSV</button>
        </form>

      <select id="selectorMateria" class="form-control mb-4" onchange="filtrarNotas()">
    <option value="">Seleccione una materia y periodo</option>
    <?php
    $combinaciones = [];
    foreach ($calificaciones as $c) {
        $combo = $c['materia'] . ' - ' . $c['periodo'];
        if (!in_array($combo, $combinaciones)) {
            $combinaciones[] = $combo;
            echo "<option value=\"$combo\">$combo</option>";
        }
    }
    ?>
</select>


<table class="table table-bordered" id="tablaNotas">
    <thead>
        <tr>
            <th>Estudiante</th>
            <th>Nota</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($calificaciones as $index => $c): ?>
        <tr data-combo="<?= $c['materia'] . ' - ' . $c['periodo'] ?>">
            <td><?= $c['estudiante'] ?></td>
            <td>
                <input type="number" min="0" max="100" value="<?= $c['nota'] ?>" class="form-control nota-input">
            </td>
            <td>
                <button class="btn btn-success btn-sm" onclick="guardarNota(this)">Guardar</button>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<script>
function filtrarNotas() {
    const seleccion = document.getElementById('selectorMateria').value;
    const filas = document.querySelectorAll('#tablaNotas tbody tr');
    filas.forEach(fila => {
        fila.style.display = fila.dataset.combo === seleccion ? '' : 'none';
    });
}

function guardarNota(boton) {
    const fila = boton.closest('tr');
    const estudiante = fila.cells[0].innerText;
    const nota = fila.querySelector('.nota-input').value;
    alert(`Nota de ${estudiante} actualizada a ${nota}`);
}
</script>
    <?php endif; ?>
</div>

<?php PrintFooterInterno(); ?>
<?php PrintScriptInerno(); ?>
</main>
