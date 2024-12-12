async function listar_compras() {
    try {
        let respuesta = await fetch(base_url+'controller/compras.php?tipo=listar');
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
                <td>${item.producto.nombre}</td>
                <td>${item.cantidad}</td>
                <td>${item.precio}</td>
                <td>${item.trabajador.razon_social}</td>
                <td>${item.options}</td>
        `;
        document.querySelector('#tbl_compras').appendChild(nueva_fila);
            });
        }else{
            Swal.fire("No se encontraron compras.");
        }
        console.log(json);
    } catch (error) {
        console.log("Oops salio un error "+error);
    }

}

if (document.querySelector('#tbl_compras')) {
    listar_compras();
}

async function registrarCompras() {
    // Capturamos los valores de los campos del formulario de compra
    let id_producto = document.getElementById('producto').value;
    let cantidad = document.querySelector('#cantidad').value;
    let precio = document.querySelector('#precio').value;
   
    let id_trabajador = document.querySelector('#trabajador').value;

    // Validación de campos vacíos
    if (
        id_producto === "" || cantidad === "" || precio === "" || 
         id_trabajador === ""
    ) {
        alert("Error: ¡Hay campos vacíos!");
        return;
    }

    try {
        // Capturamos los datos del formulario HTML
        
        const datos = new FormData(frmRegistrar);

        // Enviar los datos hacia el controlador mediante el método POST
        let respuesta = await fetch(base_url + 'controller/compras.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });

        // Procesamos la respuesta JSON
        let json = await respuesta.json();
        if (json.status) {
            swal("Compra Registrada", json.mensaje, "success");
            
        } else {
            swal("Error", json.mensaje, "error");
        }

        console.log(json);
    } catch (e) {
        console.log("Oops, ocurrió un error: " + e);
    }
}

//FUNCION PARA LLAMAR AL CONTROLADOR DE CATEGORIA(FUNCION DIRECTA)
//  listar_categorias registrados en la base de datos

async function listar_productos(){
try {
    // envia datos hacia el controlador
    let respuesta = await fetch(base_url +'controller/Producto.php?tipo=listar');
    json = await respuesta.json();
    if (json.status) {
        let datos = json.contenido;
        let contenido_select1= '<option value="">Seleccione</option>'
        
        datos.forEach(element => {
            contenido_select1 += '<option value="'+element.id+'">'+element.nombre+'</option>';
           
        });
        document.getElementById('producto').innerHTML = contenido_select1;
    }
    console.log(respuesta);
} catch (e) {
    console.e("Error al cargar categorias" + e)
}
}


async function listar_trabajadores(){
try {
    let respuesta = await fetch(base_url + 'controller/persona.php?tipo=listarTrabajadores');
    let json = await respuesta.json();
    if (json.status) {
        let datos = json.contenido;
        let contenido_select2 = '<option value="">Seleccione trabajador</option>';
        datos.forEach(element => {
            contenido_select2 += '<option value="'+element.id+'">'+element.razon_social+'</option>';
        });
        document.getElementById('trabajador').innerHTML = contenido_select2;
    }
    console.log(respuesta);
} catch (e) {
    console.error("Error al cargar trabajador: " + e);
}
}


async function ver_compra(id) {
    const formData = new FormData();
    formData.append('id_compra', id); 
    try {
        let respuesta = await fetch(base_url+'controller/compras.php?tipo=ver', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if (json.status) {
            document.querySelector('#id_compra').value = json.contenido.id;
            document.querySelector('#id_producto').value = json.contenido.id_producto;
            document.querySelector('#cantidad').value = json.contenido.cantidad;
            document.querySelector('#precio').value = json.contenido.precio;
            document.querySelector('#trabajador').value = json.contenido.id_trabajador;
        }else{
            window.location = base_url+"compra";
        }
        console.log(json);
    } catch (error) {
        console.log("oops ocurrio un error al editar compra"+error);
    }
}

async function actualizarCompra() {
    const datos = new FormData(formACtualizarC);
    try {
        let respuesta = await fetch(base_url + 'controller/compras.php?tipo=actualizar', {
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
        console.log("Oops, ocurrio un error compras"+e);
    }
}

async function eliminar_compra(id) {
    swal ({
        title: "¿Realmente desea eliminar la compra?",
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
    formData.append('id_compra',
        id);
        try {
            let respuesta = await fetch(base_url + 'controller/compras.php?tipo=eliminar',{
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
                swal('Eliminar', 'Error al eliminar compra', 'warning');
            }
        } catch (e) {
            console.log("ocurrio un error" + e);
        }
}
