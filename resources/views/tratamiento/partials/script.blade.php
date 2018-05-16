<script type="text/javascript">
	//...............................................................................
	var datosTabla; 
	var totalA =0;
	
	//Datos de checkbox tratamientos
	$("#categoriaServ_id").change(function(event){
		$.get("/selectServicios/"+event.target.value+"",function(response,accion){
			$("#fieldset").empty();
			for(var i = 0; i< response.length; i++){
				$("#fieldset").append( '<div><input type="checkbox" onclick="marcar()" name="checkbox" id="'+response[i].id+'"  value="'+response[i].nombre+'|'+response[i].costo+'"><label for="'+response[i].id+'" class="labelT">'+response[i].nombre+'</label></div><br>');	
			}
			//var check = $("#fieldset>div>label");
			
			var tds = $("#tbody>tr");
			if(tds.length!=0){
				var check = $("#fieldset>div>label");
				for (var x=0; x < check.length; x++) { 
					//console.log(check[x].textContent);
					for (var i=0; i < tds.length; i++) { 
						if(tds[i].firstChild.textContent==check[x].textContent){
							console.log(check[x]);
						}
						//console.log(tds[i].firstChild.textContent);
					}
				}
				/*for (var x=0; x < tds.length; x++) { 
					console.log(tds[x].firstChild.textContent);
				}*/
			}
		});
		//................................................................
		var tblBody = document.getElementById("tbody");
		datosTabla = tblBody.outerHTML; //Almacena los datos anteriores si existe de la tabla 
		totalA = document.getElementById("total").value; //Almacena el total de tratamiento 
		//console.log(tds[0].textContent);
	});

	//Las opciones marcadas en el modal se almacenaran en una tabla
	function marcar() {
		//Almacenar los checkboxes del formulario
		var checkboxes = document.getElementById("id_create").checkbox;
		var texto ="";
		var id="";
		var costo="";
		var total = 0;

		for (var x=0; x < checkboxes.length; x++) { 
			if (checkboxes[x].checked ) {
				//........................................................
				//Elimina los datos alamacenados con anterioridad en la tabla
				var tblBody = document.getElementById("tbody"); 
				$("#tbody tr").remove(); //Borrar los campos de la tabla
				tblBody.innerHTML = datosTabla; //Almacenar los datos anteriores de la tabla
				//.................................................................................
				var tratamiento =checkboxes[x].value;
				var split = tratamiento.split('|'); // split al nombre y costo del tratamiento
			 	texto = texto + split[0] +"|"; //Almacena los nombres de cada tratamiento seleccioando
			 	costo = costo + split[1] +"|"; //Almacena los costos de cada tratamiento
			 	id=id+checkboxes[x].id+"|"; //Obtener los ID´S de los servicios	
			}
		}
		//Obtiene la infromación de los tratamientos seleccionados
		var splitTexto = texto.split('|');
		var splitCosto = costo.split('|');

		for (var x=0; x < splitTexto.length-1; x++) { 
			//Obtiene la tabla para agregar los campos
			var tblBody = document.getElementById("tbody");
			var tr = document.createElement("tr");
			var td1 = document.createElement("td");
			var td2 = document.createElement("td");
			var td3 = document.createElement("td");
			var td4 = document.createElement("td");
			//Celda de descripción
			td1.append(''+splitTexto[x]+'');
			tr.appendChild(td1);
			//Fecha de inicio
			td2.append('');
			tr.appendChild(td2);
			//Fecha final
			td3.append('');
			tr.appendChild(td3);
			//costo
			td4.append('$ '+splitCosto[x]+'');
			tr.appendChild(td4);
			tblBody.appendChild(tr);
			//Sumar el total de todos los tratamientos
			total= total+parseInt(splitCosto[x]);
		}
		//Modificar el input del total 
		document.getElementById("total").value=total+parseInt(totalA);
	}
	//...............................................................................
</script>