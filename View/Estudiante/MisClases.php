<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Harmonia/View/LayoutInterno.php";


$cursos = [
    (object)[
        'Id' => 1,
        'Nombre' => 'Teoría del Canto',
        'TotalEstudiantes' => 10,
        'Imagen' => 'https://akamai.sscdn.co/gcs/cifra-blog/es/wp-content/uploads/2023/03/259e579-hombre-cantando-microfono.webp',
        'Horario' => (object)[
            'Dia' => 'Lunes',
            'HoraInicio' => '08:00:00',
            'HoraFin' => '10:00:00',
            'Aula' => (object)['Nombre' => 'Sala 1']
        ]
    ],
    (object)[
        'Id' => 2,
        'Nombre' => 'Lectura de Partitura',
        'TotalEstudiantes' => 8,
        'Imagen' => 'https://woodandfirestudio.com/wp-content/uploads/2023/06/Zeichenflaeche-1-1.jpg',
        'Horario' => (object)[
            'Dia' => 'Martes',
            'HoraInicio' => '10:00:00',
            'HoraFin' => '12:00:00',
            'Aula' => (object)['Nombre' => 'Sala 2']
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="es">
<?php PrintCssInterno(); ?>
<main>
    <?php BarraNavegacion("Felipe", "Bolanos", "felipe@mail.com", 402420695); ?>

    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="mb-5 position-relative">
                <a href="../Clase/CancelarClase.php" class="btn btn-primary position-absolute"
                    style="right: 0; top: 0;">
                    Cancelar Clases
                </a>
                <h5 class="text-primary text-uppercase text-center" style="letter-spacing: 5px;">
                    Clases
                </h5>
                <h1 class="text-center">Mis Clases</h1>
            </div>

            <div class="row">
                <?php foreach ($cursos as $curso): ?>
                <?php
                    $inicio = new DateTime($curso->Horario->HoraInicio);
                    $fin = new DateTime($curso->Horario->HoraFin);
                    $duracion = $inicio->diff($fin);
                ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="<?= htmlspecialchars($curso->Imagen) ?>"
                            alt="Imagen de <?= htmlspecialchars($curso->Nombre) ?>">

                        <div class="bg-secondary1 p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0">
                                    <i class="fa fa-map-marker text-primary mr-2"></i>
                                    <?= htmlspecialchars($curso->Horario->Aula->Nombre) ?>
                                </small>
                                <small class="m-0">
                                    <i class="fa fa-users text-primary mr-2"></i>
                                    <?= intval($curso->TotalEstudiantes) ?> estudiante(s)
                                </small>
                                <small class="m-0">
                                    <i class="far fa-clock text-primary mr-2"></i>
                                    <?= $duracion->h ?>h <?= $duracion->i ?>m
                                </small>
                            </div>
                            <a class="h5"
                                href="https://woodandfirestudio.com/wp-content/uploads/2023/06/Zeichenflaeche-1-1.jpg">
                                <?= htmlspecialchars($curso->Nombre) ?>
                            </a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0">
                                        <i class="fa fa-calendar text-primary mr-2"></i>
                                        <?= htmlspecialchars($curso->Horario->Dia) . ' ' . (new DateTime($curso->Horario->HoraInicio))->format('H:i') ?>

                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <?php PrintFooterInterno(); ?>
    <?php PrintScriptInerno(); ?>
</main>