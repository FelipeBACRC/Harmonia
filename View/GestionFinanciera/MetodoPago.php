<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Harmonia/View/LayoutInterno.php";

$metodosPago = [
    (object)['id' => 1, 'nombre' => 'Tarjeta de crédito', 'activo' => true],
    (object)['id' => 2, 'nombre' => 'Transferencia bancaria', 'activo' => true],
    (object)['id' => 3, 'nombre' => 'SINPE móvil', 'activo' => false]
];
?>

<!DOCTYPE html>
<html lang="es">
<?php PrintCssInterno(); ?>
<main>
    <?php BarraNavegacion("Felipe", "Bolaños", "felipe@mail.com", 402420695); ?>

    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="mb-5 position-relative">
                <button class="btn btn-primary position-absolute" style="right: 0;" data-bs-toggle="modal" data-bs-target="#modalMetodoPago">
                    Agregar Método de Pago
                </button>
                <h5 class="text-primary text-uppercase text-center" style="letter-spacing: 5px;">Pagos</h5>
                <h1 class="text-center">Gestión de Métodos de Pago</h1>
            </div>

            <div class="row">
                <?php foreach ($metodosPago as $metodo): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title"><?= htmlspecialchars($metodo->nombre) ?></h5>
                                <p class="card-text">
                                    Estado: 
                                    <span class="badge <?= $metodo->activo ? 'bg-success' : 'bg-danger' ?>">
                                        <?= $metodo->activo ? 'Activo' : 'Deshabilitado' ?>
                                    </span>
                                </p>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-sm btn-outline-<?= $metodo->activo ? 'danger' : 'success' ?>">
                                    <?= $metodo->activo ? 'Deshabilitar' : 'Habilitar' ?>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalMetodoPago" tabindex="-1" aria-labelledby="modalMetodoPagoLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalMetodoPagoLabel">Agregar Método de Pago</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nombreMetodo" class="form-label">Nombre del método</label>
                        <input type="text" class="form-control" id="nombreMetodo" name="nombreMetodo" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>

    <?php PrintFooterInterno(); ?>
    <?php PrintScriptInerno(); ?>
</main>
</html>
