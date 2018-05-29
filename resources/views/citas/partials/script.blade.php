<script type = "text/javascript">
	var citas;

	$(document).ready(function(){
		
        // Buscador de los pacientes existentes
        $('#paciente').select2({
            placeholder :'Buscar paciente',
    		language: {
    		    noResults: function (params) {
    		      return "Necesita agregar el paciente";
    		    }
		    }
		});
	});
	$(document).ready(function () {
		//Ajax que recupera los datos de las citas
		/*$.ajax({
			url: 'citas/getcitas',
			type: 'GET',
			async: false,
			success: function(data){
				citas = data;
			}
		});*/

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
			},
			events: function(start, end, timezone, callback) { //desplegar los enventos del calendario			
				$.ajax({
					url: 'citas/getcitas',
					type: 'GET',					
					success: function(data){
						var events = [];
						//events.push(data);
						$(data).each(function(){
							events.push({
								title:	$(this).attr('title'),
								start:	$(this).attr('start'),
								end:	$(this).attr('end'),
								url: 'citas/'+$(this).attr('id')+'/edit',
								color: '#20B2AA',
								textColor: 'white'
							});							
						});						
						callback(events);
					}
				});
			},
			eventClick: function(eventObject){
				window.location(eventObject.url);
			}
		});		
	}); 
</script>

<!--Script para cancelar una cita con Sweet Alert-->
<script type="text/javascript">
    $('a#btnCancelCita').click(function(event) {
        event.preventDefault();
        var idCita = $(this).data('remote')
        deletePaciente(idCita);
    });

    function deletePaciente(idCita){                
        //Creación del formulario
        var formularioPacientes = document.createElement('form');
        formularioPacientes.action = "/citas/"+idCita;
        formularioPacientes.method = 'post';

        //Input method
        var inputMethod = document.createElement('input');
        inputMethod.type = 'hidden';
        inputMethod.name = '_method';
        inputMethod.value = 'DELETE';
        formularioPacientes.appendChild(inputMethod);    

        // Input token
        var inputTokken = document.createElement('input');
        inputTokken.type = 'hidden';
        inputTokken.name = '_token';
        inputTokken.value = $('meta[name="csrf-token"]').attr('content');
        formularioPacientes.appendChild(inputTokken);                

        swal({
            title: "¿Está seguro que desea cancelar la cita?",
            text: "Se cancelará la cita",
            icon: "warning",
            buttons: {
                cancel: "No Cancelar",
                confirm : "Sí, Cancelar Cita"
            },
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                document.body.appendChild(formularioPacientes);
                formularioPacientes.submit();
            } else {
                swal({
                    title: "Operación cancelada",
                    text: "Los datos de la cita se conservarán",
                    icon: "info",
                    timer: 1000
                });
            }
        });
    }
</script>

<!-- Script para agendar una cita (con Sweet Alert)-->
<script type="text/javascript">
    $("#id_create").click(function(event){
        event.preventDefault();

        swal({
            title: "¿Está seguro que desea agendar la cita?",
            text: "Se agendará una nueva cita",
            icon: "warning",
            buttons: {
                cancel: "No, cancelar",
                confirm : "Sí, Agendar Cita"
            },
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
               $("#nuevaCita").submit();
            } else {
                swal({
                    title: "Operación cancelada",
                    text: "Revise la información antes de agendar la cita",
                    icon: "info",
                    timer: 1000
                });
            }
        });
    });
</script>

<!-- Script para actualizar una cita (con Sweet Alert)-->
<script type="text/javascript">
    $("#btnEditarCita").click(function(event){
        event.preventDefault();

        swal({
            title: "¿Está seguro que desea actualizar la información de la cita?",
            text: "Una vez se actualicen los datos, no podremos restaurar las modificaciones",
            icon: "warning",
            buttons: {
                cancel: "No, cancelar",
                confirm : "Sí, Reagendar Cita"
            },
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                $("#formEditarCita").submit();
            } else {
                swal({
                    title: "Operación cancelada",
                    text: "Los datos de la cita se conservarán",
                    icon: "info",
                    timer: 1000
                });
            }
        });
    });
</script>