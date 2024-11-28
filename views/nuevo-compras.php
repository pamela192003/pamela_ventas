
<form action="" id="frmRegistrar" style="margin: 10px 50px;">>
        <label for="id_producto">Producto:</label>
        <input type="number" id="id_producto" name="id_producto"><br><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad"><br><br>

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio"><br><br>

        <label for="id_trabajador">Trabajador:</label>
        <input type="text" id="id_trabajador" name="id_trabajador"><br><br>

        <button type="button" class="btn btn-success" onclick="RegistrarCompra()">Registrar</button>
    </form>

<script src="<?php echo BASE_URL;?>views/js/functions_compras.js"></script>
<script>listar_productos();</script>
<script>listar_trabajadores();</script>