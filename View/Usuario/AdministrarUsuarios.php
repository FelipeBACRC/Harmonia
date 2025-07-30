<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . "/Harmonia/View/LayoutInterno.php";
?>
<!DOCTYPE html>
<html lang="es">

<?php PrintCssInterno(); ?>
<main>
    <?php BarraNavegacion("Felipe","Bolanos","felipe@mail.com",402420695); ?>
    <?php
// Simulación de usuarios obtenidos desde base de datos
$usuarios = [
    [
        'Id' => 1,
        'Nombre' => 'Felipe',
        'Apellido' => 'Bolaños',
        'Email' => 'felipe@mail.com',
        'Direccion' => 'San José',
        'Rol' => ['Nombre' => 'Administrador']
    ],
    [
        'Id' => 2,
        'Nombre' => 'Ana',
        'Apellido' => 'Ramírez',
        'Email' => 'ana@mail.com',
        'Direccion' => 'Cartago',
        'Rol' => ['Nombre' => 'Usuario']
    ]
];
?>

    <div class="container mt-4">
        <h2 class="text-lg-center">Gestión de Usuarios</h2>
        <br />
        <div class="d-flex justify-content-end">
            <a href="RegistrarUsuario.php" class="btn btn-primary mb-2">
                <i class="fa fa-plus"></i> Crear Usuario
            </a>
        </div>
        <table id="tablaUsuarios" class="table table-bordered mt-4 text-center display">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Dirección</th>
                    <th>Rol</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?= htmlspecialchars($usuario['Id']) ?></td>
                    <td><?= htmlspecialchars($usuario['Nombre']) ?></td>
                    <td><?= htmlspecialchars($usuario['Apellido']) ?></td>
                    <td><?= htmlspecialchars($usuario['Email']) ?></td>
                    <td><?= htmlspecialchars($usuario['Direccion']) ?></td>
                    <td><?= htmlspecialchars($usuario['Rol']['Nombre']) ?></td>
                    <td>
                        <a href="EditarUsuario.php?id=<?= $usuario['Id'] ?>" class="btn btn-sm btn-warning me-1">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalEliminado">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <!-- Modal de Eliminación Simulada -->
            <div class="modal fade" id="modalEliminado" tabindex="-1" role="dialog"
                aria-labelledby="modalEliminadoLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-success text-white">
                            <h5 class="modal-title" id="modalEliminadoLabel">Eliminación Exitosa</h5>
                            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Cerrar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <i class="fa fa-check-circle fa-3x text-success mb-3"></i>
                            <p>¡El usuario ha sido eliminado correctamente!</p>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

        </table>
    </div>

    <?php PrintFooterInterno(); ?>
    <?php PrintScriptInerno(); ?>
</main>