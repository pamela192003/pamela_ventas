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