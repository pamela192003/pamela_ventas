<h1 style="text-align: center;">Formulario de Registro de Persona</h1>
<div>
<form action="POST" id="frmRegistrar">
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
        <label for="">Rol: </label>
        <input type="text" class="form-control" required id="rol" name="rol">
    </div>
    <div>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" class="form-control" required>
    </div>
    <div>
        <label for="estado">Estado:</label>
        <select name="estado" id="estado" class="form-control" required>
            <option>Activo</option>
            <option>Inactivo</option>
        </select>
    </div>
    <div>
        <label for="fecha_reg">Fecha de Registro:</label>
        <input type="date" id="fecha_reg" name="fecha_reg" class="form-control" required>
    </div>
    <button type="button" class="btn btn-success" onclick="registrarPersona()">Registrar</button>
</form>

<script src="<?php echo BASE_URL;?>views/js/functions_persona.js"></script>
