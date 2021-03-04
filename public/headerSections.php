<!DOCTYPE html>
<html lang="es">

    <head>
        <title>La Herencia</title>
        <meta charset="utf-8" />
        <meta name="description" content="Lacteos La Herencia" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <link rel="stylesheet" type="text/css" href="public/css/style.css" />
        <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css"/>
        <link rel="shortcut icon" type="image/x-icon" href="public/img/logoHerencia.png" />

        <script type="text/javascript" src="public/js/jquery-3.2.1.js"></script>

        <!--Galery-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    </head>

    <body>

        <img class="img-fluid" alt="Productos lácteos la Herencia" src="public/img/logoHerencia.png" width="300" height="150" />

        <header>

            <div class="topnav" id="myTopnav">
                <a href="?controlador=Index&accion=mostrar" class="active">Inicio</a>
                <a href="?controlador=History&accion=showHistory">Nuestra Historia</a>
                <a href="?controlador=Products&accion=showProducts">Productos</a>
                <a href="?controlador=Achievements&accion=showAchievements">Logros</a> 
                <a href="#Contactos">Contactos</a>
                <a href="?controlador=VisitUs&accion=showVisitUs">Visitenos</a>
                <a href="?controlador=Galery&accion=showGalery">Galería de fotos</a>
                <a href="javascript:void(0);" class="icon" onclick="updateClassName()">
                    <i class="fa fa-bars"></i>
                </a>
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



        </header>

