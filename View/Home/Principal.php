<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . "/Harmonia/View/LayoutInterno.php";
?>
<!DOCTYPE html>
<html lang="es">

<?php PrintCssInterno(); ?>
<main>
 <?php BarraNavegacion("Felipe","Bolanos","felipe@mail.com",402420695); ?>
   <div class="container-fluid p-0 pb-5 mb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#header-carousel" data-slide-to="1"></li>
            <li data-target="#header-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" style="min-height: 300px;">
                <img class="position-relative w-100" src="../Img/Home/carousel-1.jpg" style="min-height: 300px; object-fit: cover;">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="p-5" style="width: 100%; max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-md-3">Tu espacio para crecer con la música</h5>
                        <h1 class="display-3 text-white mb-md-4">Formamos Músicos, Inspiramos Vidas”</h1>
                    </div>
                </div> 
            </div>
            <div class="carousel-item" style="min-height: 300px;">
                <img class="position-relative w-100" src="../Img/Home/carousel-2.jpg" style="min-height: 300px; object-fit: cover;">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="p-5" style="width: 100%; max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-md-3">Tu espacio para crecer con la música</h5>
                        <h1 class="display-3 text-white mb-md-4">Descubre el Músico que Hay en Ti</h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="min-height: 300px;">
                <img class="position-relative w-100" src="../Img/Home/carousel-3.jpg" style="min-height: 300px; object-fit: cover;">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="p-5" style="width: 100%; max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-md-3">Tu espacio para crecer con la música</h5>
                        <h1 class="display-3 text-white mb-md-4">Donde la Música y el Talento se Encuentran</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php PrintFooterInterno(); ?>
    <?php PrintScriptInerno(); ?>
</main>
