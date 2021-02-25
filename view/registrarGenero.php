<?php
include_once 'public/header.php';
?>

<form>
    <legend>Registrar Genero</legend>
    <div>
        <label for="nombre">Nombre del genero</label>
        <input type="text" id="nombre" name="nombre" required />             
    </div>
    <div>
        <input type="button" href="javascript:;" onclick="registrarGenero($('#nombre').val());
                return false;" id="registrar" name="registrar" value="Registrar"/>


    </div>
    <div>
        <span id="resultado"></span>
    </div>
</form>


<?php
include_once 'public/footer.php';
?>