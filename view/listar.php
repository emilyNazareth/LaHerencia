<?php
include_once 'public/header.php';
?>

<table>
    <tr>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Duracion</th>
        <th>Sinopsis</th>
        <th>Idioma</th>
        <th>Generos</th>
        <th>Actores</th>
    </tr>

    <?php
    foreach ($vars['listado'] as $item) {
        ?>
        <tr>
            <td><?php echo $item[0]; ?></td>
            <td><?php echo $item[1]; ?></td>
            <td><?php echo $item[2]; ?></td>
            <td><?php echo $item[3]; ?></td>
            <td><?php echo $item[4]; ?></td>
            <td><?php echo $item[5]; ?></td>
            <td><?php echo $item[6]; ?></td>
        </tr>

        <?php
    }
    ?>
</table>

<?php
include_once 'public/footer.php';
?>