<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>

<!-- Sweet Alert -->
<script src="{{ asset('/js/sweetalert.min.js') }}" type="text/javascript"></script>

<!-- FullCalendar plugin -->
<script src="{{ asset('/js/moment.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/fullcalendar.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/es.js') }}" type="text/javascript"></script>

<!-- Scripts de pacientes -->
@include('pacientes.partials.script')

<!-- Scripts de catálogo de servicio -->
@include('catalogoServicio.partials.script')

<!-- Scripts de citas -->
@include('citas.partials.script')

<!-- Scripts de tratamientos -->
@include('tratamiento.partials.script')

<!--Select2-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>



<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>
