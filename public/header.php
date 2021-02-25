<!DOCTYPE html>
<html lang="es">

    <head>
        <title>La Herencia</title>
        <meta charset="utf-8"/>
        <meta name="description" content="Lacteos La Herencia" />
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
        <link rel="stylesheet" type="text/css" href="public/css/style.css"/>
        <link rel="shortcut icon" type="image/x-icon" href="public/img/logoHerencia.png"/> 

        <script type="text/javascript" src="public/js/jquery-3.2.1.js"></script>


    </head>

    <body>
        <img class="fade" alt="Productos lacteos la Herencia" src="public/img/logoHerencia.png" width="300" height="150"  />

        <header>

            <div class="topnav" id="myTopnav">
                <a href="#Inicio" class="active">Inicio</a>
                <a href="#Nuestra Historia">Nuestra Historia</a>
                <a href="#Productos">Productos</a>
                <a href="#Logros">Logros</a> 
                <a href="#Contactos">Contactos</a>
                <a href="#Visitenos">Visitenos</a>
                <a href="#Galería de fotos">Galería de fotos</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>

            <script>
                function myFunction() {
                    var x = document.getElementById("myTopnav");
                    if (x.className === "topnav") {
                        x.className += " responsive";
                    } else {
                        x.className = "topnav";
                    }
                }
            </script>




        </header>

        <section id="contenido">
            <section id="principal">
