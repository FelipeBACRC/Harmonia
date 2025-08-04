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
                <h5 class="text-primary text-uppercase text-center" style="letter-spacing: 5px;">
                    Refuerzos
                </h5>
                <h1 class="text-center">Solicitar Clase de Refuerzo</h1>
            </div>

            <form action="procesar_refuerzo.php" method="POST" onsubmit="return validarSeleccion();">
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
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="materia_id"
                                        value="<?= $curso->Id ?>" id="curso_<?= $curso->Id ?>">
                                    <label class="form-check-label fw-bold" for="curso_<?= $curso->Id ?>">
                                        <?= htmlspecialchars($curso->Nombre) ?>
                                    </label>
                                </div>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="m-0">
                                            <i class="fa fa-calendar text-primary mr-2"></i>
                                            <?= htmlspecialchars($curso->Horario->Dia) . ' ' . $inicio->format('H:i') ?>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <label for="comentario" class="form-label">Comentario (opcional)</label>
                        <textarea class="form-control" name="comentario" id="comentario" rows="4"
                            placeholder="Explique por qué necesita el refuerzo..."></textarea>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <button class="btn btn-primary" type="submit">Enviar Solicitud</button>
                </div>
            </form>

        </div>
    </div>

    <script>
        function validarSeleccion() {
            const radios = document.querySelectorAll('input[name="materia_id"]');
            let seleccionado = false;
            radios.forEach(r => {
                if (r.checked) seleccionado = true;
            });

            if (!seleccionado) {
                alert("Debe seleccionar una materia para solicitar refuerzo.");
                return false;
            }

            return true;
        }
    </script>

    <?php PrintFooterInterno(); ?>
    <?php PrintScriptInerno(); ?>
</main>
