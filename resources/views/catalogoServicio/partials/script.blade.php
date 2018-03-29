<script type="text/javascript">
    $(document).ready(function(){
        $('#TablaServicios').dataTable();  
    });

    //delete
    $('.eliminar').on('click', function(e){
        let id = this.id;
        e.preventDefault();
        var self = $(this);
       swal({
            title: "¿Está seguro que desea eliminar el servicio?",
            text: "Una vez eliminado, los datos no podrán ser recuperados",
            icon: "warning",
            buttons: {
                cancel: "No, cancelar",
                confirm : "Sí, Eliminar Servicio"
            },
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                $(".delete"+id).submit();
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

    //Editar
    $('.editar').on('click', function(e){
        let id = this.id;
        e.preventDefault();
        var self = $(this);
        swal({
            title: "¿Está seguro que desea actualizar la información del servicio?",
            text: "Una vez se actualicen los datos, no podremos restaurar las modificaciones",
            icon: "warning",
            buttons: {
                cancel: "No, cancelar",
                confirm : "Sí, Actualizar Servicio"
            },
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                $("#editServicio").submit();
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