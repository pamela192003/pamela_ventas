<form action="" id="frmRegistrar" style="margin: 10px 50px;">
    <div>
        <label for="">Nombre: </label>
        <input type="text" class="form-control" required id="nombre" name="nombre">
       
    </div>
    <div>
        <label for="">Detalle:</label>
        <input type="text" class="form-control" required id= "detalle" name="detalle">
    </div><br>
    <button type="button" class="btn btn-info " onclick="registrar_categoria();">Registrar</button>
</form>
<script src="<?php echo BASE_URL;?>views/js/funtions_categoria.js"></script>