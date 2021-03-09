<!DOCTYPE html>
<html lang="es">

    <head>
        <title>La Herencia</title>
        <meta charset="utf-8" />
        <meta name="description" content="Lacteos La Herencia" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <link rel="stylesheet" type="text/css" href="public/css/style.css" />
        <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css" />
        <link rel="shortcut icon" type="image/x-icon" href="public/img/logoHerencia.png" />

        <script type="text/javascript" src="public/js/jquery-3.2.1.js"></script>

        <!--Galery-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    </head>

    <body>
        <div id="mainHeader">   
            <img class="img-fluid" alt="Productos lacteos la Herencia" src="public/img/logoHerencia.png" width="300"
                 height="150"/>
            <header>
                
                                <div class="topnav" id="myTopnav">
                                    <a href="?controlador=Index&accion=mostrar" class="active">Inicio</a>
                                    <a href="?controlador=History&accion=showHistory" class="active">Nuestra Historia</a>
                                    <a href="?controlador=Products&accion=showProducts" class="active">Productos</a>
                                    <a href="?controlador=Achievements&accion=showAchievements" class="active">Logros</a>
                                    <a href="?controlador=Contact&accion=showContact" class="active">Contactos</a>
                                    <a href="?controlador=VisitUs&accion=showVisitUs" class="active">Visítenos</a>
                                    <a href="?controlador=Galery&accion=showGalery" class="active">Galería de fotos</a>
                                    <a href="javascript:void(0);" class="icon" style="background-color: #B22222; color: black"
                                       onclick="updateClassName()">
                                        <i class="fa fa-bars" style="background-color: #B22222; color: black"></i>
                                    </a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                </div>
                
                                <script>
                                    function updateClassName() {
                                        var x = document.getElementById("myTopnav");
                                        if (x.className === "topnav") {
                                            x.className += " responsive";
                                        } else {
                                            x.className = "topnav";
                                        }
                                    }
                                </script>


                <!--                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav mr-auto">
                                            <li class="nav-item active">
                                                <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Nuestra Historia</a>
                                            </li>    
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Productos</a>
                                            </li> 
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Logros</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Contactos</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Visítenos</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Galería de fotos</a>
                                            </li>
                                        </ul>
                                     
                                    </div>
                                </nav>-->



                
            </header>

            <section id="contenido">
                <section id="principal">