horarios = [];
let dia = document.getElementById("fecha");
let selHor = document.getElementById("hora");


dia.addEventListener("change", function () {
	fetch(`../../Controllers/obtCPF.php?fecha=${dia.value}`)
        .then(response => response.json())
        .then(data => {
        	horarios = ["10:00:00","10:40:00","11:20:00","12:00:00","12:40:00","01:20:00","04:00:00","04:40:00","05:20:00","06:00:00"];
            data.forEach(element=>{
            	horarios = horarios.filter((hora=> hora != element.Hora));
	        });
	        selHor.innerHTML ="";
	        llenarHorarios(horarios);
	        console.log(horarios);
        })
        .catch(error => {
            console.error('Error al realizar la solicitud:', error);
        });

});

function llenarHorarios(data){
    crearOption(0,"Seleccione un horario",selHor);
    data.forEach(info => {
        crearOption(info,info,selHor);
    });
}

function crearOption(valor,texto,select){
    let opcion = document.createElement("option");
    opcion.value = valor;
    opcion.text = texto;
    select.add(opcion);
}
