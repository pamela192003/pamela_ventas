async function registrarCategoria() {
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value;
    if (nombre == "" || detalle == "") {
        alert("error,campos vacios");
        return;
    }
    try {
       const datos = new FormData(frmRegistrar);
       let respuesta = await fetch(base_url+'controller/Categoria.php?tipo=registrar', { //await es una promesa que si o si espera una respuesta
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
        console.log("opss, ocurrio un error" + e);
    }
}
async function listar_categorias() {
    try {
        let respuesta = await fetch(base_url+'controller/Categoria.php?tipo=listar');
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
                <td>${item.nombre}</td>
                <td>${item.detalle}</td>
                 <td>${item.options}</td>
        `;
        document.querySelector('#tbl_categoria').appendChild(nueva_fila);
            });
        }else{
            Swal.fire("No se encontraron categorias.");
        }
        console.log(json);
    } catch (error) {
        console.log("Oops salio un error "+error);
    }

}

if (document.querySelector('#tbl_categoria')) {
    listar_categorias();
}
async function ver_categoria(id) {
    const formData = new FormData();
    formData.append('id_categoria', id); 
    try {
        let respuesta = await fetch(base_url+'controller/Categoria.php?tipo=ver', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if (json.status) {
            document.querySelector('#id_categoria').value = json.contenido.id;
            document.querySelector('#nombre').value = json.contenido.nombre;
            document.querySelector('#detalle').value = json.contenido.detalle;
        }else{
            window.location = base_url+"categoria";
        }
        console.log(json);
    } catch (error) {
        console.log("oops ocurrio un error al editar categoria"+error)
    }
}

async function actualizarCategoria() {
    const datos = new FormData(formActualizarC);
    try {
        let respuesta = await fetch(base_url + 'controller/Categoria.php?tipo=actualizar', {
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
        console.log("Oops, ocurrio un error categoria"+e);
    }
 }

 async function eliminar_categoria(id) {
    swal ({
        title: "¿Realmente desea eliminar la categoria?",
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
    formData.append('id_categoria',
        id);
        try {
            let respuesta = await fetch(base_url + 'controller/Categoria.php?tipo=eliminar',{
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
                swal('Eliminar', 'Error al eliminar categoria', 'warning');
            }
        } catch (e) {
            console.log("ocurrio un error" + e);
        }
}
