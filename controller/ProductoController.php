<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ItemsController
 *
 * @author Nelson
 */
class ProductoController {

//    private $view;

    public function __construct() {
        $this->view = new View();
    }

// constructor

    public function mostrarajax() {
        $this->view->show("registrarproductoajax.php", null);
    }

    public function mostrarActualizarPelicula() {
        $id = $_GET['id'];
        require 'model/ProductoModel.php';
        $pelicula = ProductoModel::singleton();
        $peli['peliculaPorCodigo'] = $pelicula->buscar_pelicula_por_codigo($id);
        $this->view->show("actualizarPelicula.php", $peli);
    }

    public function mostrarBorrarPelicula() {
        $id = $_GET['id'];
        echo $id;
        require 'model/ProductoModel.php';
        $pelicula = ProductoModel::singleton();
        $peli['peliculaPorCodigo'] = $pelicula->buscar_pelicula_por_codigo($id);
        $this->view->show("borrarPelicula.php", $peli);
    }

    public function borrar_Pelicula() {
        $id = $_GET['id'];
        require 'model/ProductoModel.php';
        $pelicula = ProductoModel::singleton();
        $pelicula->borrar_Pelicula($id);
        $peli['peliculaPorCodigo'] = $pelicula->buscar_pelicula_por_codigo($id);
        $this->view->show("borrarPelicula.php", $peli);
    }

    public function borrarPeliculaActor() {
        require 'model/ProductoModel.php';
        $pelicula = ProductoModel::singleton();
        $pelicula->borrar_Pelicula_Actor($_POST['codigo_pelicula']);
    }

    public function mostrarGenero() {
        $this->view->show("registrarGenero.php", null);
    }

    public function mostrarActor() {
        $this->view->show("registrarActor.php", null);
    }

    public function mostrarBuscarPeliculas() {
        $this->view->show("buscarPeliculas.php", null);
    }

    public function registrarajax() {
        require 'model/ProductoModel.php';
        $pelicula = ProductoModel::singleton();
        $pelicula->registrar($_POST['codigo'], $_POST['nombre'], $_POST['duracion'], $_POST['sinopsis'], $_POST['idioma']);
        echo 'Pelicula registrada verifiquela en peliculas disponibles';
    }

    public function registrar_pelicula_genero() {
        require 'model/ProductoModel.php';
        $pelicula_genero = ProductoModel::singleton();
        foreach ($_POST['id_genero'] as $id_individual) {
            $pelicula_genero->registrarPeliculaGenero($_POST['codigo_pelicula'], $id_individual);
        }
    }

    public function actualizar_pelicula() {
        require 'model/ProductoModel.php';
        $pelicula = ProductoModel::singleton();
        $pelicula->actualizarPelicula($_POST['codigo'], $_POST['nombre'], $_POST['duracion'], $_POST['sinopsis'], $_POST['idioma']);
        echo 'Pelicula actualizada';     
        $peli['peliculaPorCodigo'] = $pelicula->buscar_pelicula_por_codigo($_POST['codigo']);        
    }

    public function registrar_pelicula_actor() {
        require 'model/ProductoModel.php';
        $pelicula_actor = ProductoModel::singleton();
        foreach ($_POST['id_actor'] as $id_individualA) {
            $pelicula_actor->registrarPeliculaActor($_POST['codigo_pelicula'], $id_individualA);
        }
    }

    public function registrar_genero() {
        require 'model/ProductoModel.php';
        $genero = ProductoModel::singleton();
        $genero->registrar_genero($_POST['nombre']);

        echo 'Genero registrado';
    }

    public function registrar_actor() {
        require 'model/ProductoModel.php';
        $actor = ProductoModel::singleton();
        $actor->registrar_actor($_POST['nombre'], $_POST['apellidos']);

        echo 'Actor registrado';
    }

    public function buscar_pelicula_por_nombre() {
        require 'model/ProductoModel.php';
        $pelicula = ProductoModel::singleton();
        if(!empty($_POST['id_genero'])){
        $cadena = implode(",", $_POST['id_genero']);        
        $pel['peliculas'] = $pelicula->buscar_pelicula_por_nombre($_POST['nombre'], $cadena);
        } else {
            $pel['peliculas'] = $pelicula->buscar_pelicula_por_nombre($_POST['nombre'], '');
        }
        $this->view->show("listaPeliculasBuscadas.php", $pel);
    }

    public function listar() {
        require 'model/ProductoModel.php';
        $peliculas = ProductoModel::singleton();
        $data['listado'] = $peliculas->listar();

        $this->view->show("listar.php", $data);
    }

}

// fin clase
?>
