<?php
include_once 'public/header.php';
?>

<form>
    <legend>Registrar Pelicula</legend>
    <div>        
        <label for="codigo">Codigo</label>
        <input type="text" id="codigo" name="codigo" required />
        <br> 
        <br> 
        <label for="nombre">Nombre de la pelicula</label>
        <input type="text" id="nombre" name="nombre" required />
        <br> 
        <br> 
        <label for="duracion">Duración de la pelicula</label>
        <input type="text" id="duracion" name="duracion" required />
        <br> 
        <br> 
        <label for="sinopsis">Sinopsis</label>
        <input type="text" id="sinopsis" name="sinopsis" required />
        <br> 
        <br> 
        <label for="idioma">Idioma</label>
        <input type="text" id="idioma" name="idioma" required />
        <br> 
        <br> 
        <label for="genero">Seleccione los generos (Ctrl+click para selecionar o quitar varios):</label>
        <br> 
        <br> 
        <select  multiple name= "generos{}" id="generos">
            <?php
            include_once 'model/ProductoModel.php';
            $productModel = ProductoModel::singleton();
            $resultado['generos'] = $productModel->obtenerGeneros();

            foreach ($resultado['generos'] as $res) {
                ?>
                <option value="<?php print($res->id) ?>"><?php print($res->nombre) ?></option> 
                <?php
            }
            ?>


        </select>
        <br> 
        <br> 
        <label for="actor">Seleccione los actores (Ctrl+click para selecionar o quitar varios):</label>
        <br> 
        <br> 
        <select  multiple name= "actores{}" id="actores">
            <?php          
            $resultadoActor['actores'] = $productModel->obtenerActores();

            foreach ($resultadoActor['actores'] as $resActor) {
                ?>
                <option value="<?php print($resActor->id) ?>"><?php print($resActor->nombre . " " . $resActor->apellidos) ?></option> 
                <?php
            }
            ?>


        </select>

    </div>
    <div>    
        <input type="button" href="javascript:;" onclick="registarProductoAjax(($('#codigo').val()), ($('#nombre').val()),
                        $('#duracion').val(), $('#sinopsis').val(), $('#idioma').val()),
                        registrarPeliculaGenero($('#codigo').val(), $('#generos').val()),
                        registrarPeliculaActor($('#codigo').val(), $('#actores').val());
                return false;" id="registrar" name="registrar" value="Registrar"/>    
    </div>
    <div>
        <span id="resultado"></span>
    </div>
</form>


<?php
include_once 'public/footer.php';
?>