<h1 style="text-align: center;">Formulario de editar Persona</h1>
<div>
<form action="POST" id="frmActualizarP">
<input type="hidden" name="id_persona" id="id_persona">
    <div>
        <label for="nro_identidad">Número de Identidad:</label>
        <input type="text" id="nro_identidad" name="nro_identidad" class="form-control" required>
    </div>
    <div>
        <label for="razon_social">Razón Social:</label>
        <input type="text" id="razon_social" name="razon_social" class="form-control" required>
    </div>
    <div>
     <div>
            <label for="">Numero de Telefono</label>
            <input type="text" class="form-control" required id= "telefono" name="telefono">
     </div>
        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" class="form-control" required>
    </div>
    <div>
        <label for="departamento">Departamento:</label>
        <input type="text" id="departamento" name="departamento" class="form-control" required>
    </div>
    <div>
        <label for="provincia">Provincia:</label>
        <input type="text" id="provincia" name="provincia" class="form-control" required>
    </div>
    <div>
        <label for="distrito">Distrito:</label>
        <input type="text" id="distrito" name="distrito" class="form-control" required>
    </div>
    <div>
        <label for="cod_postal">Código Postal:</label>
        <input type="number" id="cod_postal" name="cod_postal" class="form-control" required>
    </div>
    <div>
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" class="form-control" required>
    </div>
    <div>
    <label for="rol">Rol:</label>
    <select id="rol" name="rol" class="form-control" required>
        <option value="" disabled selected>Seleccione un rol</option>
        <option value="proveedor">Proveedor</option>
        <option value="trabajador">Trabajador</option>
        <option value="trabajador">Adimistrador</option>
    </select>
    </div>
    <button type="button" class="btn btn-success" onclick="actualizarPersona()">Actualizar</button>
</form>

<script src="<?php echo BASE_URL;?>views/js/functions_persona.js"></script>

<script>
    //http://localhost/pamela_ventas/personaseditar-producto/1
    const id_p=<?php $pagina=explode("/", $_GET['views']); echo $pagina['1'];  ?>;
    ver_persona(id_p);
</script>
