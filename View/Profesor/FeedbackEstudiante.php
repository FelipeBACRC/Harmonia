<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Harmonia/View/LayoutInterno.php";

$estudiantes = ['Juan Pérez', 'Ana Gómez', 'Carlos Mora'];
$feedbacks = [
    ['estudiante' => 'Juan Pérez', 'video' => 'feedback_juan.mp4'],
    ['estudiante' => 'Ana Gómez', 'video' => 'feedback_ana.mp4']
];

$mensajeError = $_GET['error'] ?? '';
$mensajeExito = $_GET['success'] ?? '';
?>

<!DOCTYPE html>
<html lang="es">
<?php PrintCssInterno(); ?>
<main>
<?php BarraNavegacion("Felipe", "Bolanos", "felipe@mail.com", 402420695); ?>

<div class="container py-5">
    <h1 class="text-center mb-4">Feedback en Video</h1>

    <?php if ($mensajeError): ?>
        <div class="alert alert-danger text-center"><?= htmlspecialchars($mensajeError) ?></div>
    <?php elseif ($mensajeExito): ?>
        <div class="alert alert-success text-center"><?= htmlspecialchars($mensajeExito) ?></div>
    <?php endif; ?>


    <div class="card card-body mb-4">
        <form action="procesar_feedback_video.php" method="POST" enctype="multipart/form-data">
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="estudiante" class="form-label">Estudiante</label>
                    <select name="estudiante" id="estudiante" class="form-control" required>
                        <option value="">Seleccione un estudiante</option>
                        <?php foreach ($estudiantes as $estudiante): ?>
                            <option value="<?= htmlspecialchars($estudiante) ?>"><?= htmlspecialchars($estudiante) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="video" class="form-label">Archivo de Video (.mp4)</label>
                    <input type="file" name="video" class="form-control" accept=".mp4" required>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary mt-2">Subir Feedback</button>
                </div>
            </div>
        </form>
    </div>

    <?php if (count($feedbacks) === 0): ?>
        <p class="text-center">No hay feedback disponible.</p>
    <?php else: ?>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Estudiante</th>
                    <th>Video</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($feedbacks as $f): ?>
                    <tr>
                        <td><?= htmlspecialchars($f['estudiante']) ?></td>
                        <td>
                            <video width="320" height="240" controls>
                                <source src="/Harmonia/uploads/<?= htmlspecialchars($f['video']) ?>" type="video/mp4">
                                Tu navegador no soporta video.
                            </video>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>

<?php PrintFooterInterno(); ?>
<?php PrintScriptInerno(); ?>
</main>

