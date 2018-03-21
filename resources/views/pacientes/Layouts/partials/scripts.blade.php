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