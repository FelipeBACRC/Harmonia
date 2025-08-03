<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . "/Harmonia/View/LayoutInterno.php";
?>
<!DOCTYPE html>
<html lang="es">
<?php PrintCssInterno(); ?>
<main>
<?php BarraNavegacion("Felipe", "Bolanos", "felipe@mail.com", 402420695); ?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Cancelar Clase por Excepción</h2>
    <p class="text-center">Utiliza este formulario si necesitas cancelar una clase por una razón excepcional.</p>

    <?php if (isset($_GET['status']) && $_GET['status'] === 'ok'): ?>
        <div class="alert alert-success" role="alert">
            La clase fue cancelada correctamente. Hemos registrado tu solicitud.
        </div>
    <?php elseif (isset($_GET['status']) && $_GET['status'] === 'error'): ?>
        <div class="alert alert-danger" role="alert">
            Hubo un problema con la información proporcionada. Verifica los datos e inténtalo de nuevo.
        </div>
    <?php endif; ?>

    <form action="/Harmonia/Controller/ProcesarCancelacionExcepcion.php" method="POST" class="mx-auto" style="max-width: 600px;">
<div class="form-group">
    <label for="clase">Clase</label>
    <select name="clase" id="clase" class="form-control" required>
        <option value="" disabled selected>Seleccione una clase</option>
        <option value="teoria_canto">Teoría del Canto</option>
        <option value="lectura_partitura">Lectura de Partitura</option>
    </select>
</div>
        <div class="form-group">
            <label for="dia">Día</label>
            <input type="date" name="dia" id="dia" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="hora">Hora</label>
            <input type="time" name="hora" id="hora" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="motivo">Motivo de la cancelación</label>
            <textarea name="motivo" id="motivo" class="form-control" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-danger btn-block">Enviar Solicitud de Cancelación</button>
    </form>
</div>

<?php PrintFooterInterno(); ?>
<?php PrintScriptInerno(); ?>
</main>
