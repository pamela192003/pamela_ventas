<h1 style="text-align: center;">Formulario de editar producto.</h1>
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
        <label for="categoria">Categoria</label>
        <select name="categoria" id="categoria" class="form-control" required>
        <option>seleccione</option>
        </select>
    </div>
    <div>
        <label for="">Imagen: </label>
        <input type="file" id="imagen" name="imagen" class="form-control" required>
    </div>
    <div>
    <label for="proveedor">proveedor</label>
        <select id="proveedor" name="proveedor" class="form-control" required>
        <option>seleccione</option>
        </select>

    </div>
    <button type="button" class="btn btn-success" onclick="registrar_producto();">Registrar</button>
</form>

<script src="<?php echo BASE_URL ?>views/js/functions_producto.js"></script>
<script>listar_categorias();</script>
<script>listar_proveedor();</script>
<script>
    //http://localhost/pamela_ventas/editar-producto/1
    const id_p=<?php $pagina= explode("/", $_GET['views']); echo $pagina['1'] ;?>; //captura el link
    ver_producto(id_p);
</script>