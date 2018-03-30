<!-- Script para crear la tabla de los pacietes con (Datatables) -->
<script>
    $(document).ready(function(){
        $('#TablaPacientes').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('pacientes') }}",
            columns: [
                {data: 'id', name: 'id', className: "text-center"},
                {data: 'nombre', name: 'nombre', className: "text-center"},
                {data: 'telefono', name: 'telefono', className: "text-center"},
                {data: 'ocupacion', name: 'ocupacion', className: "text-center"},
                {data: 'edad', name: 'edad', className: "text-center"},
                {data: 'sexo', name: 'sexo', className: "text-center"},
                { data: 'action', name: 'sexo', className: "text-center"}
            ],
            language: {
                processing:     "Procesando",
                search:         "Buscar:",
                info:           "Mostrando _START_ de _END_ , _TOTAL_ elementos totales",
                infoEmpty:      "No existen pacientes",
                emptyTable:     "No existen pacientes",
                paginate: {
                    first:      "Primero",
                    previous:   "Anterior",
                    next:       "Siguiente",
                    last:       "&Uacute;ltimo"
                },
                lengthMenu: "Mostrar _MENU_ entradas"
            }
        });
    });
</script>

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
        formularioPacientes.action = "/pacientes/"+idpaciente;
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
                    icon: "info",
                    timer: 1000
                });
            }
        });
    }
</script>

<!-- Script para agregar un paciente (con Sweet Alert)-->
<script type="text/javascript">
    $("#agregarPaciente").click(function(event){
        event.preventDefault();

        swal({
            title: "¿Está seguro que desea agregar un nuevo paciente?",
            text: "Se añadira un nuevo paciente",
            icon: "warning",
            buttons: {
                cancel: "No, cancelar",
                confirm : "Sí, Agregar Paciente"
            },
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                $("#nuevoPaciente").submit();
            } else {
                swal({
                    title: "Operación cancelada",
                    text: "Revise la información antes de agregar al paciente",
                    icon: "info",
                    timer: 1000
                });
            }
        });
    });
</script>

<!-- Script para actualizar un paciente (con Sweet Alert)-->
<script type="text/javascript">
    $("#btnEditarAceptar").click(function(event){
        event.preventDefault();

        swal({
            title: "¿Está seguro que desea actualizar la información del paciente?",
            text: "Una vez se actualicen los datos, no podremos restaurar las modificaciones",
            icon: "warning",
            buttons: {
                cancel: "No, cancelar",
                confirm : "Sí, Actualizar Paciente"
            },
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                $("#editarPaciente").submit();
            } else {
                swal({
                    title: "Operación cancelada",
                    text: "Los datos del paciente se conservarán",
                    icon: "info",
                    timer: 1000
                });
            }
        });
    });
</script>