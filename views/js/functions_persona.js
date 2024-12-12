async function registrarPersona(){
    let nro_identidad = document.getElementById('nro_identidad').value;
    let razon_social = document.querySelector('#razon_social').value;
    let telefono = document.querySelector('#telefono').value;
    let correo = document.querySelector('#correo').value;
    let departamento = document.querySelector('#departamento').value;
    let provincia = document.querySelector('#provincia').value;
    let distrito = document.querySelector('#distrito').value;
    let cod_postal = document.querySelector('#cod_postal').value;
    let direccion = document.querySelector('#direccion').value;
    let rol = document.querySelector('#rol').value;
   

    if (nro_identidad == "" || razon_social == "" || telefono == "" || correo == "" || departamento == "" || 
        provincia == "" || distrito == "" || cod_postal == "" || direccion == "" || 
        rol == "") {
        alert("Error, campos vacíos");
        return;
    }

    try {
        const datos = new FormData(frmRegistrar);
        let respuesta = await fetch(base_url + '/controller/persona.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
        if (json.status) {
            swal("Registro", json.mensaje, "success");
        } else {
            swal("Registro", json.mensaje, "error");
        }

        console.log(json);
    } catch (e) {
        console.log("Oops, ocurrió un error " + e);
    }
}
async function listar_personas() {
    try {
        let respuesta = await fetch(base_url+'controller/persona.php?tipo=listar_p');
        let json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let cont = 0;
            datos.forEach(item=>{
                let nueva_fila = document.createElement("tr");
                nueva_fila.id = "fila"+item.id; // id anuevo asignado-------------id de la BD
                cont+=1;
                nueva_fila.innerHTML = `
                <th>${cont}</th> 
                <td>${item.nro_identidad}</td>
                <td>${item.razon_social}</td>
                <td>${item.telefono}</td>
                <td>${item.correo}</td>
                <td>${item.departamento}</td>
                <td>${item.cod_postal}</td>
                <td>${item.direccion}</td>
                <td>${item.rol}</td>
                <td>${item.options}</td>
        `;
        document.querySelector('#tbl_persona').appendChild(nueva_fila);
            });
        }else{
            Swal.fire("No se encontraron productos.");
        }
        console.log(json);
    } catch (error) {
        console.log("Oops salio un error "+error);
    }

}

if (document.querySelector('#tbl_persona')) {
    listar_personas();
}


// EDITAR
async function ver_persona(id) {
    const formData = new FormData();
    formData.append('id_persona', id); 
    try {
        let respuesta = await fetch(base_url+'controller/Persona.php?tipo=ver', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if (json.status) {
            document.querySelector('#id_persona').value = json.contenido.id;
            document.querySelector('#nro_identidad').value = json.contenido.nro_identidad;
            document.querySelector('#razon_social').value = json.contenido.razon_social;
            document.querySelector('#telefono').value = json.contenido.telefono;
            document.querySelector('#correo').value = json.contenido.correo;
            document.querySelector('#departamento').value = json.contenido.departamento;
            document.querySelector('#provincia').value = json.contenido.provincia;
            document.querySelector('#distrito').value = json.contenido.distrito;
            document.querySelector('#cod_postal').value = json.contenido.cod_postal;
            document.querySelector('#direccion').value = json.contenido.direccion;
            document.querySelector('#rol').value = json.contenido.rol;
        }else{
            window.location = base_url+"persona";
        }
        console.log(json);
    } catch (error) {
        console.log("oops ocurrio un error al editar persona"+error)
    }
}

async function actualizarPersona() {
    const datos = new FormData(formActualizarPer);
    try {
        let respuesta = await fetch(base_url + 'controller/Persona.php?tipo=actualizar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
        if(json.status){
            swal("Registro", json.mensaje, "success");
        }else{
            swal("Registro", json.mensaje, "error");
        }
        console.log(json);
    } catch (e) {

    }
}

async function eliminar_persona(id) {
    swal ({
        title: "¿Realmente desea eliminar el usuario?",
        text: "",
        icon: "warning",
        buttons: true,
        dangerMode: true
    }).then((willDelete)=>{
        if (willDelete) {
            fnt_eliminar(id);

        }
    })
}
async function fnt_eliminar(id) {
    const formData = new FormData();
    formData.append('id_persona',
        id);
        try {
            let respuesta = await fetch(base_url + 'controller/Persona.php?tipo=eliminar',{
                 method: 'POST',
                 mode: 'cors',
                 cache: 'no-cache',
                 body: formData
        
            });
            json = await respuesta.json();
            if (json.status) {
                swal("Eliminar", "eliminado correctamente", "success");
                document.querySelector('#fila'+id).remove();
            }else{
                swal('Eliminar', 'Error al eliminar persona', 'warning');
            }
        } catch (e) {
            console.log("ocurrio un error" + e);
        }
}