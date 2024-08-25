let container = document.getElementById("container-citas");
let aviso = document.getElementById("no-register");
let paciente = document.getElementById("paciente");

paciente.addEventListener("change", function () {
	fetch(`../../Controllers/obtCPP.php?paci=${paciente.value}`)
        .then(response => response.json())
        .then(data => {
        	aviso.innerHTML ="";
        	container.innerHTML ="";
	        llenarCitas(data);
        })
        .catch(error => {
            console.error('Error al realizar la solicitud:', error);
        });

});

function editarCitas(idCita, idUsu){
    location.href = "editarC.php?idPed="+idCita+"&idUs="+idUsu;
}

function llenarCitas(data){
	content = document.createElement("div");
	content.className = "content-citas";

	tabla = document.createElement("table");
	tabla.className = "cancel-table";

	thead = document.createElement("thead");

	tr = document.createElement("tr");

	th1 = document.createElement("th");
	th1.innerText = "Nombre";
	th2 = document.createElement("th");
	th2.innerText = "Fecha";
	th3 = document.createElement("th");
	th3.innerText = "Hora";
	th4 = document.createElement("th");
	th4.innerText = "Estado";

	tr.appendChild(th1);
	tr.appendChild(th2);
	tr.appendChild(th3);
	tr.appendChild(th4);

	thead.appendChild(tr);
	tbody = document.createElement("tbody");

	data.forEach(element=>{	
		tr1 = document.createElement("tr");

    	label1 = document.createElement("td");
		label1.innerText = element.Nombre_Paciente;
		label1.addEventListener("click", function() {
		    editarCitas(element.idCita, element.idUsuario);
		});

		label2 = document.createElement("td");
		label2.innerText = element.Fecha;
		label2.addEventListener("click", function() {
		    editarCitas(element.idCita, element.idUsuario);
		});

		label3 = document.createElement("td");
		label3.innerText = element.Hora;
		label3.addEventListener("click", function() {
		    editarCitas(element.idCita, element.idUsuario);
		});

		label4 = document.createElement("td");
		label4.innerText = element.Estado;
		label4.addEventListener("click", function() {
		    editarCitas(element.idCita, element.idUsuario);
		});


    	tr1.appendChild(label1);
    	tr1.appendChild(label2);
    	tr1.appendChild(label3);
    	tr1.appendChild(label4);

		tbody.appendChild(tr1);
    });
    tabla.appendChild(thead);
	tabla.appendChild(tbody);

	content.appendChild(tabla);    	

	container.appendChild(content);
}