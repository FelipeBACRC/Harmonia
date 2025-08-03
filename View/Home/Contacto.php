<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . "/Harmonia/View/LayoutInterno.php";
?>
<!DOCTYPE html>
<html lang="es">
<?php PrintCssInterno(); ?>
<main>
<?php BarraNavegacion("Felipe", "Bolanos", "felipe@mail.com", 402420695); ?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Contacto con la Academia</h2>
    <p class="text-center">Si tienes alguna duda, puedes enviarnos un mensaje y con gusto te atenderemos.</p>

    <?php if (isset($_GET['status']) && $_GET['status'] === 'ok'): ?>
        <div class="alert alert-success" role="alert">
            Tu mensaje fue enviado correctamente. Pronto te contactaremos.
        </div>
    <?php elseif (isset($_GET['status']) && $_GET['status'] === 'error'): ?>
        <div class="alert alert-danger" role="alert">
            Ocurrió un error al enviar tu mensaje. Intenta nuevamente más tarde.
        </div>
    <?php endif; ?>

    <form action="/Harmonia/Controller/EnviarMensajeContacto.php" method="POST" class="mx-auto" style="max-width: 600px;">
        <div class="form-group">
            <label for="correo">Correo electrónico</label>
            <input type="email" name="correo" id="correo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="mensaje">Mensaje</label>
            <textarea name="mensaje" id="mensaje" rows="5" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Enviar mensaje</button>
    </form>
</div>

<?php PrintFooterInterno(); ?>
<?php PrintScriptInerno(); ?>
</main>
