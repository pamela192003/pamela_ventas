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