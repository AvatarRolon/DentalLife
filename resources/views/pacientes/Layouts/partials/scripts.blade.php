<!-- Script para el cambio y agregado de una foto -->
<script type="text/javascript">
    $("#foto").change(setFotoPaciente);

    function setFotoPaciente(evt) {
        $("#thumb-foto-paciente").hide();
        $("#foto-paciente").show();

		var files = evt.target.files; // Objeto de la foto

		// Ciclo que revisa la img  y renderiza la imagen como un thumbnail.
		for (var i = 0, f; f = files[i]; i++) {

            // Solo procesa las imagenes
            if (!f.type.match('image.*')) {
                continue;
            }

            //Crea un objeto tipo FileReader
            var reader = new FileReader();

            //Se recibe la informaci�n
            reader.onload = (function(theFile) {
                return function(e) {
                    // Renderizado del thumbnail.
                    $("#picPaciente").attr("src",e.target.result);
                    //$("#fotohidden").val(e.target.result);
                };
            })(f);

            // Lee la img como una url.
            reader.readAsDataURL(f);
		}
	}
</script>

<!-- Script para quitar la foto -->
<script type="text/javascript">
    $("#foto-remove").click(fotoRemove);

    function fotoRemove(){
        $("#picPaciente").attr("src","{{ asset('/img/ico-man.png') }}");
        $("#foto").attr('value',"{{ asset('/img/ico-man.png') }}")
    }
</script>

<!-- Script para eliminar un paciente (con Sweet Alert)-->
<script type="text/javascript">
    $('a#btnDeletePaciente').click(function(event) {
        event.preventDefault();
        var idpaciente = $(this).data('remote')
        deletePaciente(idpaciente);
    });

    function deletePaciente(idpaciente){                
        //Creación del formulario
        var formularioPacientes = document.createElement('form');
        formularioPacientes.action = "/eliminar/paciente/"+idpaciente;
        formularioPacientes.method = 'post';

        // Input token
        var inputTokken = document.createElement('input');
        inputTokken.type = 'hidden';
        inputTokken.name = '_token';
        inputTokken.value = $('meta[name="csrf-token"]').attr('content');
        formularioPacientes.appendChild(inputTokken);
        
        

        swal({
            title: "¿Está seguro que desea eliminar al paciente?",
            text: "Una vez eliminado, los datos no podrán ser recuperados",
            icon: "warning",
            buttons: {
                cancel: "No, cancelar",
                confirm : "Sí, Eliminar Paciente"
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
                    text: "Los datos del paciente se conservarán",
                    icon: "info"
                });
            }
        });
    }
</script>