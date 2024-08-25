let container = document.getElementById("container-citas");
let paciente = document.getElementById("paciente");
let fecha = document.getElementById("fecha");
let estado = document.getElementById("estado");
let filtar = document.getElementById("filtrar");
let qfiltro = document.getElementById("qfiltro");

qfiltro.addEventListener("click", recargarPagina);
filtar.addEventListener("click", filtrarCitas);

function recargarPagina(){
    location.reload();
}

function filtrarCitas(){
	
    pacienteVal = paciente.value;
    fechaVal = fecha.value;
    estadoVal = estado.value;
    console.log(pacienteVal, fechaVal, estadoVal);
    container.innerHTML = "";
    
    fetch(`../../Controllers/filtrar.php`)
        .then(response => response.json())
        .then(data => {
        	if(pacienteVal == 0){
        		data = data.filter(( item => item.idUsuario != 0));
        	}else{
        		data = data.filter(( item => item.idUsuario == pacienteVal));
        	}
        	if (fecha.value == ""){
		    	data = data.filter(( item => item.Fecha != ""));	
		    }else{
		    	data = data.filter(( item => item.Fecha == fechaVal));
		    }
		    if(estadoVal == 0){
        		data = data.filter(( item => item.Estado != 0));
        	}else{
        		data = data.filter(( item => item.Estado == estadoVal));
        	} 
            generarElementos(data);
            console.log(data);
        })
        .catch(error => {
            console.error('Error al realizar la solicitud:', error);
        });
        
}

function generarElementos(data){
    tabla = document.createElement("table");
	tabla.className = "cancel-table";

	thead = document.createElement("thead");

	tr = document.createElement("tr");

    th0 = document.createElement("th");
	th0.innerText = "ID";
    th1 = document.createElement("th");
	th1.innerText = "Nombre";
	th2 = document.createElement("th");
	th2.innerText = "Fecha";
	th3 = document.createElement("th");
	th3.innerText = "Hora";
	th4 = document.createElement("th");
	th4.innerText = "Estado";
    th5 = document.createElement("th");
	th5.innerText = "Aprobar";
	th6 = document.createElement("th");
	th6.innerText = "Cancelar";

	tr.appendChild(th0);
	tr.appendChild(th1);
	tr.appendChild(th2);
	tr.appendChild(th3);
	tr.appendChild(th4);
	tr.appendChild(th5);
	tr.appendChild(th6);

	thead.appendChild(tr);
	tbody = document.createElement("tbody");
    data.forEach(element => {
        tr1 = document.createElement("tr");

        generarInput(element.idCita, tr1);
        generarInput(element.Nombre_Paciente, tr1);
        generarInput(element.Fecha, tr1);
        generarInput(element.Hora, tr1);
        generarInput(element.Estado, tr1);
        if(element.Editable){
        	if (element.Estado == "Pendiente"){
        		generarBoton("Aprobar",aprobarCita,element.idCita,tr1);
        		generarBoton("Cancelar",borrarCita,element.idCita,tr1);
        	}else{
        		generarBotonDes("Aprobar",tr1);
        		generarBotonDes("Cancelar",tr1);
        	}
        }else{
        	if (element.Estado == "Pendiente"){
        		generarBoton("Aprobar",aprobarCita,element.idCita,tr1);
        		generarBoton("Cancelar",borrarCita,element.idCita,tr1);
        	}else{
        		generarBotonDes("Aprobar",tr1);
        		generarBotonDes("Cancelar",tr1);
        	}
        }

		tbody.appendChild(tr1);
    });
    tabla.appendChild(thead);
	tabla.appendChild(tbody);

	container.appendChild(tabla); 
}

function generarInput(value1, tr){
    let input = document.createElement("td");
    input.innerText = value1;
    input.disabled = true;
    tr.appendChild(input);
}

function borrarCita(idCita){
    location.href = "../../Controllers/borrarCita.php?idCita="+idCita;
}

function aprobarCita(idCita){
    location.href = "../../Controllers/aprobarCita.php?idCita="+idCita;
}

function generarBoton(texto, funcion, idcita, tr){
    let input = document.createElement("button");
    input.innerHTML = texto;
    input.addEventListener("click", function(){
    	funcion(idcita);
    });
    td = document.createElement("td");
    td.appendChild(input);
    tr.appendChild(td);
}

function generarBotonDes(texto, tr){
    let input = document.createElement("button");
    input.innerHTML = texto;
    input.disabled = true;
    td = document.createElement("td");
    td.appendChild(input);
    tr.appendChild(td);
}