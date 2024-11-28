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
                <td>
                    <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                </td>
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
async function RegistrarCompra(){
let producto = document.querySelector('#producto').value;
let cantidad = document.querySelector('#cantidad').value;
let precio = document.querySelector('#precio').value;
let trabajador = document.querySelector('#trabajador').value;

if (producto == "" || cantidad == "" ||  precio == "" || trabajador == ""){
    alert("Error!!, Campos vacíos");
    return;
}
try {
    //capturamos datos del formulario html nuevo-producto
    const datos = new FormData(frmRegCompras);
    //enviamos datos hacia el controlador
    let respuesta = await fetch(base_url +'controller/compras.php?tipo=registrar',{
        method: 'POST',
        mode: 'cors',
        cache: 'no-cache',
        body: datos
    });
    json = await respuesta.json();
    if (json.status) {
        swal("registro", json.mensaje, "success");
    } else {
        swal("Registro", json.mensaje, "error");
    }

    console.log(json);
} catch (e) {
    console.log("Oops, ocurrio un error" + e);
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
