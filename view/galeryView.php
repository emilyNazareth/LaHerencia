<?php
include_once 'public/headerSections.php';
?>


<div id="galery" class="text-center m-5">
    <h2 id="titulosGalery">Galería de Fotos</h2>
    <div id="carouselExampleControls" class="carousel slide mt-4" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <center>
                    <img class="d-block w-50 " src="public/img/galery1.jpg" alt="First slide">
                </center>
            </div>

            <div class="carousel-item">
                <center>
                    <img class="d-block w-50  " src="public/img/galery2.jpg" alt="Second slide">
                </center>
            </div>
            <div class="carousel-item">
                <center>
                    <img class="d-block w-50" src="public/img/galery3.jpg" alt="Third slide">
                </center>
            </div>
            <div class="carousel-item">
                <center>
                    <img class="d-block w-50" src="public/img/galery4.png" alt="four slide">
                </center>
            </div>
            <div class="carousel-item">
                <center>
                    <img class="d-block w-50" src="public/img/galery5.jpg" alt="five slide">
                </center>
            </div>
            <div class="carousel-item">
                <center>
                    <img class="d-block w-50" src="public/img/galery6.png" alt="six slide">
                </center>
            </div>
            <div class="carousel-item">
                <center>
                    <img class="d-block w-50" src="public/img/galery7.jpg" alt="six slide">
                </center>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span id="previous">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span id="next">Siguiente</span>
        </a>
    </div>
</div>


<?php
include_once 'public/footerSections.php';
?>