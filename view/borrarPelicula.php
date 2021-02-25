<?php
include_once 'public/header.php';
?>
<form>
    <legend>Borrar pelicula</legend>
    <table>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Descripcií</th>
            <th>Sinopsis</th>
            <th>Idioma</th>
            <th>Generos</th>
            <th>Actores</th>                 
        </tr>
        <?php
        foreach ($vars['productByCode'] as $item) {
            ?>
            <tr>
                <td><?php echo $item['codigo']; ?></td>              
                <td><?php echo $item ['nombre']; ?></td>                
                <td><?php echo $item['duracion']; ?></td>
                <td><?php echo $item['sinopsis']; ?></td>
                <td><?php echo $item['idioma']; ?></td>
                <td><?php echo $item['generos']; ?></td>
                <td><?php echo $item['actores']; ?></td>
            </tr>

            <?php
        }
        ?>
    </table>
    <div>    
        <a type="button" href="?controlador=Producto&accion=borrar_Pelicula&id=<?php echo $item[0]; ?>">Borrar</a>
    </div>
</form>


<?php
include_once 'public/footer.php';
?>