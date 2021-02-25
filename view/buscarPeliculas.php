<?php
include_once 'public/header.php';
?>

<form>
    <legend>Buscar pelicula</legend>
    <div>               
        <label for="nombre">Nombre de la pelicula</label>
        <input type="text" id="nombre" name="nombre" required />                       
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
    </div>
    <div>    
        <input type="button" href="javascript:;" onclick="buscarPeliculaPorNombre($('#nombre').val(), $('#generos').val());
                return false;" id="buscar" name="buscar" value="Buscar"/>    
    </div>
    <div>
        <span id="resultado"></span>
    </div>

    
</form>


<?php
include_once 'public/footer.php';
?>