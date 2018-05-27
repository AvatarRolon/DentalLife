<script type="text/javascript">
	//Datos de checkbox tratamientos
	$("#categoriaServ_id").change(function(event){
		$.get("/selectServicios/"+event.target.value+"",function(response,accion){
			$("#fieldset").empty();
			for(var i = 0; i< response.length; i++){
				$("#fieldset").append( '<div><input type="checkbox" onclick="marcar('+response[i].id+')" name="checkbox" id="'+response[i].id+'"  value="'+response[i].nombre+'|'+response[i].costo+'"><label for="'+response[i].id+'" class="labelT">'+response[i].nombre+'</label></div><br>');	
			}
			//Verificar si hay un campo seleccionado en la lista de tratamientos 
			var tds = $("#tbody>tr");
			if(tds.length!=0){
				var check = $("#fieldset>div>label");
				for (var x=0; x < check.length; x++) { 
					for (var i=0; i < tds.length; i++) { 
						if(tds[i].firstChild.textContent==check[x].textContent){
							document.getElementById(check[x].control.id).checked=true;	
						}
					}
				}
			}
		});
	});
	//.............................................................................................
	function marcar(id) {
		console.log(id);
		if (document.getElementById(id).checked){
			//Optener la descripción y el costo
			var split = (document.getElementById(id).value).split('|'); // split al nombre y costo del tratamiento
			var texto = split[0]; //Almacena los nombres de cada tratamiento seleccioando
			var costo = split[1] ; //Almacena los costos de cada tratamiento
			//Obtiene la tabla para agregar los campos
			var tblBody = document.getElementById("tbody");
			//Crear los elementos
			var tr = document.createElement("tr");
			tr.id="tr"+id;
			//.......Descripción.........
			var td1 = document.createElement("td");
			td1.append(texto);
			tr.appendChild(td1);
			//.......Fecha de inicio............
			var td2 = document.createElement("td");
			td2.append('');
			td2.id="fechaI"+id;
			tr.appendChild(td2);
			//.......Fecha final.......
			var td3 = document.createElement("td");
			td3.append('');
			td3.id="fechaF"+id;
			tr.appendChild(td3);
			//.........Costo......
			var td4 = document.createElement("td");
			td4.append('$ '+costo);
			tr.appendChild(td4);
			//.....Opciones......
			var td5 = document.createElement("td");
			td5.innerHTML="<button type='button' class='btn btn-primary' id='edit_button"+(id)+"' value='Editar' class='edit' onclick='edit_row("+(id)+")'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></button><button type='button' class='btn btn-primary' style='display:none;' id='save_button"+(id)+"' value='Guardar' class='save' onclick='save_row("+(id)+")'><span class='glyphicon glyphicon-save' aria-hidden='true'></span></button>";
			tr.appendChild(td5);
			//...Agregar todos lo campos a la fila....
			tblBody.appendChild(tr);
			document.getElementById("total").value= parseInt(document.getElementById("total").value)+parseInt(costo);
			console.log(document.getElementById("total").value);
		}else{
			//Buscar el tr seleccionado para eliminar
			var tr="tr"+id;
			var auxCosto =  parseInt(document.getElementById(tr).childNodes[3].textContent.substring(1));
			document.getElementById("total").value= parseInt(document.getElementById("total").value)-parseInt(auxCosto);
			document.getElementById(tr).remove();
		}
	}
	//...............................................................................
	//Función que permite editar las fechas de inicio y finalizaciaón de la tabla
	function edit_row(no){
	 	document.getElementById("edit_button"+no).style.display="none";
	 	document.getElementById("save_button"+no).style.display="block";
		
		var fechaI=document.getElementById("fechaI"+no);
		var fechaF=document.getElementById("fechaF"+no);
			
		var fechaI_data=fechaI.innerHTML;
		var fechaF_data=fechaF.innerHTML;
		fechaI.innerHTML="<input class='form-control' type='date' id='fechaI_text"+no+"' value='"+fechaI_data+"'>";
		fechaF.innerHTML="<input class='form-control' type='date' id='fechaI_text"+no+"' value='"+fechaF_data+"'>";
	}
	//.............................................................................
	//Guardar las fechas de incio y finalizacion modificados 
	function save_row(no){
		var fechaI_val=document.getElementById("fechaI_text"+no).value;
	 	var fechaF_val=document.getElementById("fechaI_text"+no).value;

	 	document.getElementById("fechaI"+no).innerHTML=fechaI_val;
	 	document.getElementById("fechaF"+no).innerHTML=fechaF_val;

	 	document.getElementById("edit_button"+no).style.display="inline-block";
	 	document.getElementById("save_button"+no).style.display="none";

		swal({
		  title: "Agregado",
		  text: "Las fechas han sido agregadas",
		  icon: "success",
		});
	}
</script>