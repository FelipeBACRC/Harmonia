<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Harmonia/View/LayoutInterno.php";

$mensajeError = $_GET['error'] ?? '';
$mensajeExito = $_GET['success'] ?? '';
?>

<!DOCTYPE html>
<html lang="es">
<?php PrintCssInterno(); ?>
<main>
    <?php BarraNavegacion("Felipe", "Bolanos", "felipe@mail.com", 402420695); ?>

    <div class="container py-5">
        <h1 class="text-center mb-4">Asignar Nueva Tarea</h1>

        <?php if ($mensajeError): ?>
        <div class="alert alert-danger text-center"><?= htmlspecialchars($mensajeError) ?></div>
        <?php elseif ($mensajeExito): ?>
        <div class="alert alert-success text-center"><?= htmlspecialchars($mensajeExito) ?></div>
        <?php endif; ?>

        <div class="card card-body mx-auto" style="max-width: 600px;">
            <form action="procesar_tarea.php" method="POST" novalidate>
                <div class="mb-3">
                    <label for="materia" class="form-label">Materia</label>
                    <select id="materia" name="materia" class="form-control" required>
                        <option value="" disabled selected>Seleccione una materia</option>
                        <option value="Teoría del Canto">Teoría del Canto</option>
                        <option value="Lectura de Partitura">Lectura de Partitura</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="titulo" class="form-label">Título de la Tarea</label>
                    <input type="text" id="titulo" name="titulo" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea id="descripcion" name="descripcion" class="form-control" rows="4" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="fecha_entrega" class="form-label">Fecha de Entrega</label>
                    <input type="date" id="fecha_entrega" name="fecha_entrega" class="form-control" required>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Crear Tarea</button>
                </div>
            </form>
        </div>
    </div>

    <?php PrintFooterInterno(); ?>
    <?php PrintScriptInerno(); ?>
</main>