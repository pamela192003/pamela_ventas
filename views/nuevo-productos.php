<h1 style="text-align: center;">Formulario de Registro de Productos.</h1>
<div>
<form action="" class="from-control" id="frmRegistrar">
        <label for="">Codigo: </label>
        <input type="text" id="codigo" name="codigo" class="form-control" required>
    </div>
    <div>
        <label for="">Nombre: </label>
        <input type="text" id="nombre" name="nombre" class="form-control" required>
    </div>
    <div>
        <label for="">Detalle:</label>
        <input type="text" id="detalle" name="detalle" class="form-control" required>
    </div>
    <div>
        <label for="">Precio: </label>
        <input type="number" id="precio" name="precio" class="form-control" required>
    </div>
    <div>
        <label for="">Stock: </label>
        <input type="number" id="stock" name="stock" class="form-control" required>
    </div>
    <div>
        <label for="">Categoria</label>
        <input type="number" id="categoria" name="idcategoria" class="form-control" required>
    </div>
    <div>
        <label for="">Imagen: </label>
        <input type="text" id="imagen" name="imagen" class="form-control" required>
    </div>
    <div>
        <label for="">Proveedor: </label>
        <input type="number" id="proveedor" name="idproveedor" class="form-control" required>
    </div>
    <button type="button" class="btn btn-success" onclick="registrar_producto();">Registrar</button>
</form>

<script src="<?php echo BASE_URL ?>views/js/functions_producto.js"></script>
<script>listar_categorias();</script>