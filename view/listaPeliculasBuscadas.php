
<form>
   
    <table>
        <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Duracion</th>
            <th>Sinopsis</th>
            <th>Idioma</th>
            <th>Generos</th>
            <th>Actores</th>
            <th>Accion</th>        
        </tr>

        <?php
        foreach ($vars['peliculas'] as $item) {
            ?>
            <tr>
                <td><?php echo $item[0]; ?></td>
                <td><?php echo $item[1]; ?></td>
                <td><?php echo $item[2]; ?></td>
                <td><?php echo $item[3]; ?></td>
                <td><?php echo $item[4]; ?></td>
                <td><?php echo $item[5]; ?></td>
                <td><?php echo $item[6]; ?></td>               
                <td> 

                    <a type="button" href="?controlador=Producto&accion=mostrarActualizarPelicula&id=<?php echo $item[0]; ?>">Actualizar</a>
                    <br>
                    <br>
                    <a type="button" href="?controlador=Producto&accion=mostrarBorrarPelicula&id=<?php echo $item[0]; ?>">Borrar</a>

            </tr>

            <?php
        }
        ?>
    </table>    

</form>

