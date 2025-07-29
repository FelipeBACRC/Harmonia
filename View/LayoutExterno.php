<?php

function PrintCss()
{
    echo '<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" type="image/png" sizes="16x16" href="View/Img/logo-academia-png-100.png" />
    <title>Login - Charlenne Stewart Academy</title>
    <link href="../Styles/style.css" rel="stylesheet" />
        </head>';
}

function PrintScript()
{
    echo '
 <script src="../Scripts/jquery.min.js"></script>
    <script src="../Scripts/popper.min.js"></script>
    <script src="../Scripts/bootstrap.min.js"></script>'
    ;
}
function PrintFooter()
{
    echo '
    <footer class="text-center py-3 mt-4 border-top" >
        <medium>&copy; ' . date('Y') . ' Charlenne Stewart Academy. Todos los derechos reservados.</medium>
    </footer>';
}
?>