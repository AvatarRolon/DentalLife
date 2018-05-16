<script type="text/javascript">
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
</script>