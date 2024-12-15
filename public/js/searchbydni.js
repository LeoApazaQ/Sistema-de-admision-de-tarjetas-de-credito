document.getElementById("dni").addEventListener("input", function() {
    let dni = document.getElementById("dni").value;  // Obtener el DNI ingresado

    // Verificar si el DNI tiene 8 dígitos
    if (dni.length === 8) {
        fetch("https://apiperu.dev/api/dni/" + dni + "?api_token=843f3fd1ee8e609fb243c2cd081c8c0c0811d5ed7780a353eeb6c31897c6c79e")
        .then((response) => response.json())  // Convertir la respuesta a JSON
        .then((data) => {
            // Verificar que la respuesta tenga la propiedad 'data' y que contenga los valores que necesitamos
            if (data.data) {
                let nombres = data.data.nombres || '';  // Asignar el valor de 'nombres'
                let apellidos = data.data.apellido_paterno + ' ' + data.data.apellido_materno || '';  // Concatenar apellidos

                // Asignar los valores a los campos del formulario
                document.getElementById("nombres").value = nombres;
                document.getElementById("apellidos").value = apellidos;

                console.log('Datos obtenidos:', data.data);  // Ver los datos en consola
            } else {
                console.error('No se pudieron obtener los datos del cliente.');
            }
        })
        .catch((error) => {
            console.error('Error al traer los datos:', error);
        });
    }
});