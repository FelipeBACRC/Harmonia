<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $correo = $_POST["correo"] ?? '';
    $mensaje = $_POST["mensaje"] ?? '';

    if (!empty($correo) && !empty($mensaje)) {
        // Aquí puedes guardar en base de datos o enviar correo electrónico

        // Simulación de envío correcto
        header("Location: /Harmonia/View/Contacto.php?status=ok");
        exit();
    } else {
        header("Location: /Harmonia/View/Contacto.php?status=error");
        exit();
    }
}
