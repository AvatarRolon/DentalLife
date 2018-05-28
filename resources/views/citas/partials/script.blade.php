<script type = "text/javascript">
	/*$(document).ready(function(){
        // Buscador de los pacientes existentes
        $('#paciente').select2({
            placeholder :'Buscar paciente',
    		language: {
    		    noResults: function (params) {
    		      return "Necesita agregar el paciente";
    		    }
		    }
		});
	});*/
	$(document).ready(function () {

		/*
			Plugin: FullCalendar

			Página de documentación: https://fullcalendar.io/docs
		*/

		$("#calendar").fullCalendar({
			locale: "es", // Opción de idioma
			themeSystem: 'bootstrap4', // Tema de bootstrap 4
			bootstrapFontAwesome: { // Fuente de iconos
				close: 'fa-times',
				prev: 'fa-chevron-left',
				next: 'fa-chevron-right',
				prevYear: 'fa-angle-double-left',
				nextYear: 'fa-angle-double-right'
			},
			header: { // Toolbar con los botones superiores
				left: 'prev,next today,addEventButton',
				center: 'title',
				right: 'month,agendaWeek,agendaDay,listMonth'
			},
			weekNumbers: true, // Mostrar número de la semana
			eventLimit: true, // Hábilita el link "more" cuando hay muchos eventos presentes      
			dayClick: function (date) { // Evento cuando se preciona una fecha
				//var dateStr = prompt('Enter a date in YYYY-MM-DD format');
				date = moment(date.format());
				
				//Código de Sweet alert
				swal({
						title: "Escriba los datos de la cita:",
						buttons: true,
						content: {
							element: "input",
							attributes: {
								placeholder: "Nombre de la cita",
								type: "text",
							},
						},
						icon: "info"
					})
					.then((value) => {
						if (value) {
							swal("¡Éxito!", "¡La cita fue agregada con éxito!", "success");
							$('#calendar').fullCalendar('renderEvent', {
								title: value,
								start: date,
								allDay: true,
								color: "#20B2AA" //Color del evento
							});
						} else {
							swal("¡Cancelado!", "¡No se pudo guardar la cita!", "error");
						}
					});
			}
		});
	}); 
</script>