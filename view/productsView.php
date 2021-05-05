<?php

include_once 'public/headerSections.php';
?>
<div class="container text-center">
    <h1 class="m-4 text-center titulosProductos2">Productos de Lácteos Herencia</h1>

    <div class="row text-center align-items-center">
        <div class="col-6 text-center ">
            <p>Nuestros</p>
            <p>Productos</p>
        </div>
        <div class="col-6 text-center">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="public/img/Producto1.jpg" class="d-block w-50" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="public/img/Queso1.jpg" class="d-block w-50" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="public/img/Quesos2.jpg" class="d-block w-50" alt="...">
                    </div>
                </div>
            </div>
        </div> <!-- Falta agregarle el js para que funcione junto con el jquery -->
    </div><!-- Hacer pequeñas las imagenes -->


    <h1 class="m-5 text-center titulosProductos2">Nuestros productos favoritos</h1>


    <div class="row text-center align-items-center">
        <div class="col-sm-6">
            <div class="container">
                <div class="row justify-content-start">
                    <div class="col-10">
                        <img src="public/img/Producto1.jpg" alt="Queso Fresco" width="200" height=200">
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-4">
                        <img src="public/img/Producto1.jpg" alt="Queso Fresco" width="150" height="150">
                    </div>
                </div>
                <div class="row justify-content-evenly">
                    <div class="col-12">
                        <img src="public/img/Producto1.jpg" alt="Queso Fresco" width="120" height="120">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 ">
            <p>"Lorem ipsum dolor sit amet,
                consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore
                et dolore magna aliqua.</p>
        </div>
    </div>

    <h1 class="m-4 text-center titulosProductos2">Productos disponibles</h1>

    <div class="row" id="sizeCard">
        <div class="col-12">
            <div class="card mb-3" >
                <div class="row g-0 align-items-center">
                    <div class="col-md-5 m-2">
                        <img src="public/img/Queso1.jpg" alt="..." width="200" height="200">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title titulosProductos">Queso Turrialba Certificado con
                            Denominación de Origen</h5>
                            <p class="card-text text-left" id="cardProducts">Producto elaborado con leche fresca 
                            he íntegra y con una receta tradicional y origenal que ha
                            sido hereda de generación en generación, de sabor suave,
                            semiduro, cremoso y de color blanco-amarillento, ideal
                            para desayunos, para freír, o comerlo solo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" id="sizeCard">
        <div class="col-sm-6">
            <div class="card mb-3" >
                <div class="row g-0 align-items-center">
                    <div class="col-md-5 m-2">
                        <img src="public/img/Producto1.jpg" alt="..." width="200" height="200">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title titulosProductos">Queso maduro</h5>
                            <p class="card-text text-left" id="cardProducts">Producto 100% artesanal,
                            elaborado con técnicas ambiguas y además manteniendo
                            siempre la inocuidad, no contiene colorante ni cultivos lácteos,
                            de sabor suave-fuerte, es especial para derretir y utilizar en
                            elaboración de platillos en la cocina..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card mb-3" >
                <div class="row g-0 align-items-center">
                    <div class="col-md-5 m-2">
                        <img src="public/img/Queso1.jpg" alt="..." width="200" height="200">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title titulosProductos">Queso tierno</h5>
                            <p class="card-text text-left" id="cardProducts">Producto fresco, presenta un sabor y
                            consistencia suave bajo en sal, elaborado con estrictos
                            controles de higiene y desinfeccion, ideal para desayunos y
                            acompañamiento en distintos platillos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>

<?php

include_once 'public/footerSections.php';
?>