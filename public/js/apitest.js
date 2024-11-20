let boton = document.getElementById("boton");
boton.addEventListener("click", traerDatos);

function traerDatos() {
    let dni = document.getElementById("dni").value;
    fetch("https://apiperu.dev/api/dni/" + dni + "?api_token=843f3fd1ee8e609fb243c2cd081c8c0c0811d5ed7780a353eeb6c31897c6c79e")
    .then((datos)=>datos.json())
    .then((datos)=>{
        console.log(datos.data);
    });
}
