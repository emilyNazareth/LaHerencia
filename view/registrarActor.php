<?php
include_once 'public/header.php';
?>

<form>
    <legend>Registrar Actor</legend>
    <div>
        <label for="nombre">Nombre del actor</label>
        <input type="text" id="nombre" name="nombre" required />

        <label for="apellidos">Apellidos del actor</label>
        <input type="text" id="apellidos" name="apellidos" required />
    </div>
    <div>
        <input type="button" href="javascript:;" onclick="registrarActor($('#nombre').val(), $('#apellidos').val() );
                return false;" id="registrar" name="registrar" value="Registrar"/>
    </div>
    <div>
        <span id="resultado"></span>
    </div>
</form>


<?php
include_once 'public/footer.php';
?>