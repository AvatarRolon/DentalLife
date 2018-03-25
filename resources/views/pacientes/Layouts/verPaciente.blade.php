@extends('pacientes.index')

@section('htmlheader_title')
	{{ 'DentalLife-Ver paciente' }}
@endsection

@section('contentheader_title')
    &nbsp;&nbsp;
    <a href="{{ url('/pacientes') }}" data-toggle="tooltip" title="Regresar a pacientes"><i class="ico-green-cream fa fa-angle-left"></i></a>
    &nbsp;&nbsp;
    {{ 'Ver paciente' }}
@endsection

@section('contentheader_description')
	{{ 'Vea información de un paciente' }}
@endsection

@section('pacientes-content')
    <br>
    <div class="row">
        <div class="col">
            <!-- Ver los datos personales -->
            @include('pacientes.Layouts.partials.verPaciente.datosPersonales');

            <!-- Ver la información de contacto-->
            @include('pacientes.Layouts.partials.verPaciente.contactoinfo')

            <!-- Ver la dirección-->
            @include('pacientes.Layouts.partials.verPaciente.direccion')
        </div>
    </div>
@endsection