let container = document.getElementById("contenedor-sellos");
let paciente = document.getElementById("paciente");
let recompensas = document.getElementById("recompensas");

paciente.addEventListener("change", obtenerSellos);

function obtenerSellos(){
    pacienteVal = paciente.value;
    fetch(`../../Controllers/obtSPP.php?idUsu=${pacienteVal}`)
        .then(response => response.json())
        .then(data => {
            container.innerHTML = "";
            if (data.length != 0){
                data.forEach(element => {
                    generarSelloAprobado(element.Fecha);
                });
                for (var i = data.length; i < 10; i++) {
                    generarSelloDes();
                }
                obtenerRecompensas(pacienteVal);
            }else{
                for (var i = 0; i < 10; i++) {
                    generarSelloDes();
                }
                obtenerRecompensas(pacienteVal);
            }
        })
        .catch(error => {
            console.error('Error al realizar la solicitud:', error);
        });
}
function obtenerRecompensas(idU){
    fetch(`../../Controllers/obtRPP.php?idUsu=${idU}`)
        .then(response => response.json())
        .then(data => {
            recompensas.innerHTML = "";
            if (data.length != 0){
                info = document.createElement("div");
                info.className = "info-recompensa";
                generarP("Beneficio", info);
                generarP("Estado", info);
                recompensas.appendChild(info);
                rec = document.createElement("div");
                rec.className = "recompensas-det";
                data.forEach(element => {
                    generarInput(element.Descripcion, rec);
                    generarInput(element.Estado, rec);
                    recompensas.appendChild(rec);
                });
            }else{
                generarP("No hay recompensas para mostrar", recompensas);
            }
        })
        .catch(error => {
            console.error('Error al realizar la solicitud:', error);
        });
}
function generarP(texto, contenedor){
    p = document.createElement("p");
    p.innerText = texto;

    contenedor.appendChild(p);
}
function generarSelloAprobado(data){
      contenedor = document.createElement("div");
      contenedor.className = "contenido-sellos";

      img = document.createElement("img");
      img.src = "../../Images/sello-aprov.webp";

      label = document.createElement("label");
      label.innerText = data;

      contenedor.appendChild(img);
      contenedor.appendChild(label);

      container.appendChild(contenedor);

}
function generarSelloDes(){
      contenedor = document.createElement("div");
      contenedor.className = "contenido-sellos";

      img = document.createElement("img");
      img.src = "../../Images/sello-desaprov.png";

      label = document.createElement("label");
      label.innerText = "Sin obtener";

      contenedor.appendChild(img);
      contenedor.appendChild(label);

      container.appendChild(contenedor);

}
function generarInput(value1, contenedor){
    let input = document.createElement("input");
    input.value = value1;
    input.disabled = true;
    contenedor.appendChild(input);
}