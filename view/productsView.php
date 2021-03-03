<?php

include_once 'public/headerSections.php';
?>
<div class="container">
    <h1 class="m-4 text-center titulosProductos2">Productos de Lácteos Herencia</h1>

    <div class="row text-center align-items-center">
        <div class="col-sm-6 text-center ">
            <p>Nuestros</p>
            <p>Productos</p>
        </div>
        <div class="col-sm-6">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="public/img/Producto1.jpg" class="d-block w-100" alt="..." >
                    </div>
                    <div class="carousel-item">
                        <img src="public/img/Queso1.jpg" class="d-block w-100" alt="..." >
                    </div>
                    <div class="carousel-item">
                        <img src="public/img/Quesos2.jpg" class="d-block w-100" alt="..." >
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
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

    <div class="row m-5">
        <div class="col-sm-6">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0 align-items-center">
                    <div class="col-md-5 m-2">
                        <img src="public/img/Queso1.jpg" alt="..." width="200" height="200">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title titulosProductos">Card title</h5>
                            <p class="card-text">This is a wider card with
                                additional content. This content is a little bit longer.</p>
                            <p> Precio: #####</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-5 m-2">
                        <img src="public/img/Quesos2.jpg" alt="..." width="200" height="200">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title titulosProductos">Card title</h5>
                            <p class="card-text">This is a wider card with
                                additional content. This content is a little bit longer.</p>
                            <p> Precio: #####</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row m-5">
        <div class="col-sm-6">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0 align-items-center">
                    <div class="col-md-5 m-2">
                        <img src="public/img/Producto1.jpg" alt="..." width="200" height="200">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title titulosProductos">Queso Fresco</h5>
                            <p class="card-text text-justify">Descripción: Lorem ipsum dolor sit amet,
                                dolore magna aliqua.</p>
                            <p> Precio: #####</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-5 m-2">
                        <img src="public/img/Queso1.jpg" alt="..." width="200" height="200">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title titulosProductos">Card title</h5>
                            <p class="card-text">This is a wider card
                                additional content. This content is a little bit longer.</p>
                            <p> Precio: #####</p>
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