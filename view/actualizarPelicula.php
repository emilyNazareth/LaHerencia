<?php
include_once 'public/header.php';
?>

<form>
        <?php
        foreach ($vars['peliculaPorCodigo'] as $item) {
            ?>
                <td><?php $item['codigo']; ?></td>              
                <td><?php $item ['nombre']; ?></td>                
                <td><?php $item['duracion']; ?></td>
                <td><?php $item['sinopsis']; ?></td>
                <td><?php $item['idioma']; ?></td>
                <td><?php $item['generos']; ?></td>
                <td><?php $item['actores']; ?></td>
            <?php
        }
        ?> 

    <legend>Actualizar pelicula</legend>
    <div>        

        <label for="codigo">Codigo</label>
        <input type="text" id="codigo" name="codigo" value="<?php echo $item['codigo']; ?>" readonly="true" required/>
        <br> 
        <br> 
        <label for="nombre">Nombre de la pelicula</label>
        <input type="text" id="nombre" name="nombre"  value="<?php echo $item['nombre']; ?>" required />
        <br> 
        <br> 
        <label for="duracion">Duración de la pelicula</label>
        <input type="text" id="duracion" name="duracion" value="<?php echo $item['duracion']; ?>" required />
        <br> 
        <br> 
        <label for="sinopsis">Sinopsis</label>
        <input type="text" id="sinopsis" name="sinopsis" value="<?php echo $item['sinopsis']; ?>"  required />
        <br> 
        <br> 
        <label for="idioma">Idioma</label>
        <input type="text" id="idioma" name="idioma" value="<?php echo $item['idioma']; ?>" required />
        <br> 
        <br>                  
        <label for="actor">Seleccione los actores (Ctrl+click para selecionar o quitar varios):</label>
        <br> 
        <br> 
        <select  multiple name= "actores{}" id="actores">
            <?php
            $productModel2 = ProductoModel::singleton();
            $resultadoActor['actores'] = $productModel2->obtenerActores();

            foreach ($resultadoActor['actores'] as $resActor) {
                ?>
                <option value="<?php print($resActor->id) ?>"><?php print($resActor->nombre . " " . $resActor->apellidos) ?></option> 
                <?php
            }
            ?>


        </select>


    </div>
    <div>    

        <input type="button" href="javascript:;" onclick="borrarPeliculaActor($('#codigo').val()),
                    registrarPeliculaActor($('#codigo').val(), $('#actores').val()),
                    actualizarPelicula(($('#codigo').val()), ($('#nombre').val()),
                        $('#duracion').val(), $('#sinopsis').val(), $('#idioma').val());
                return false;" id="actualizar" name="actualizar" value="Actualizar"/>    

    </div>

    <div>
        <span id="resultado"></span>
    </div>
</form>


<?php
include_once 'public/footer.php';
?>