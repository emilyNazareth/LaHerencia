<?php

class ProductoModel {

    protected $db;
    private static $instance = null;

    // constructor
    private function __construct() {
        require 'libs/SPDO.php';
        $this->db = SPDO::singleton();
    }
    
    public static function singleton() {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function registrar($codigo, $nombre, $duracion, $sinopsis, $idioma) {
        $consulta = $this->db->prepare("call sp_registar_pelicula('" . $codigo . "', '" . $nombre . "', '" . $duracion . "', '" . $sinopsis . "', '" . $idioma . "')");
        $consulta->execute();
    }
    
    public function actualizarPelicula($codigo, $nombre, $duracion, $sinopsis, $idioma) {
        $consulta = $this->db->prepare("call sp_actualizar_pelicula('" . $codigo . "', '" . $nombre . "', '" . $duracion . "', '" . $sinopsis . "', '" . $idioma . "')");
        $consulta->execute();
    }
    

    public function registrarPeliculaGenero($codigo_pelicula, $id_genero) {
        $consulta = $this->db->prepare("call sp_registar_pelicula_genero('" . $codigo_pelicula . "', '" . $id_genero . "')");
        $consulta->execute();
    }

    public function registrarPeliculaActor($codigo_pelicula, $id_actor) {
        $consulta = $this->db->prepare("call sp_registar_pelicula_actor('" . $codigo_pelicula . "', '" . $id_actor . "')");
        $consulta->execute();
    }

    public function registrar_genero($nombre) {
        $consulta = $this->db->prepare("call sp_registar_genero('" . $nombre . "')");
        $consulta->execute();
    }

    public function registrar_actor($nombre, $apellidos) {
        $consulta = $this->db->prepare("call sp_registar_actor('" . $nombre . "', '" . $apellidos . "')");
        $consulta->execute();
    }

    public function obtenerGeneros() {
        $consulta = $this->db->prepare("call sp_obtener_generos()");
        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_OBJ);
        $consulta->closeCursor();
        return $resultado;
    }

    public function obtenerActores() {
        $consulta = $this->db->prepare("call sp_obtener_actores()");
        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_OBJ);
        $consulta->closeCursor();
        return $resultado;
    }

    public function buscar_pelicula_por_nombre($nombre, $generos) {
        $consulta = $this->db->prepare("call sp_buscar_peliculas('" . $nombre . "', '" . $generos . "' )");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->closeCursor();
        return $resultado;
    }

    public function buscar_pelicula_por_codigo($codigo) {
        $consulta = $this->db->prepare("call sp_obtener_pelicula_por_codigo('" . $codigo . "')");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->closeCursor();
        return $resultado;
    }

    public function borrar_Pelicula($codigo) {
        $consulta = $this->db->prepare("call sp_eliminar_pelicula('" . $codigo . "')");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->closeCursor();
        return $resultado;
    }
    
    public function borrar_Pelicula_Actor($codigo) {
        $consulta = $this->db->prepare("call sp_eliminar_pelicula_actor('" . $codigo . "')");
        $consulta->execute();       
    }

    

    public function listar() {
        $consulta = $this->db->prepare('call  sp_listar_peliculas()');
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        $consulta->closeCursor();
        return $resultado;
    }

//    public function buscarPeliculas() {
//        $consulta = $this->db->prepare('call  sp_listar_peliculas()');
//        $consulta->execute();
//        $resultado = $consulta->fetchAll();
//        $consulta->closeCursor();
//        return $resultado;
//    }
// listar
}

// fin clase
?>

