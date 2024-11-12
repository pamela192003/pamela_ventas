async function registrar_Persona() {
    let nro_identidad = document.getElementById('nro_identidad').value;
    let razon_social = document.getElementById('#razon_social').value;
    let telefono = document.getElementById('#telefono').value;
    let correo = document.getElementById('#correo').value;
    let departamento = document.getElementById('#departamento').value;
    let provincia = document.getElementById('#provincia').value;
    let distrito = document.getElementById('#distrito').value;
    let cod_postal = document.getElementById('#cod_postal').value;
    let direccion = document.getElementById('#direccion').value;
    let rol = document.getElementById('#rol').value;
    let password = document.getElementById('#password').value;
    let estado = document.getElementById('#estado').value;
    let fecha_reg = document.getElementById('#fecha_reg').value;

    if (nro_identidad === "" || razon_social === "" || telefono === "" || correo === "" || departamento === "" || 
        provincia === "" || distrito === "" || cod_postal === "" || direccion === "" || 
        rol === "" || password === "" || estado === "" || fecha_reg === "") {
        alert("Error, campos vacíos");
        return;
    }

    try {
        const datos = new FormData(frmRegistrar);
        let respuesta = await fetch(base_url + 'controller/persona.php?tipo=registrar', {
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
