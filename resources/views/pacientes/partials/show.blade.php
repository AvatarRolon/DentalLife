@extends('adminlte::page')

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

@section('main-content')
<div class="container-fluid spark-screen">
    <div class="row">
        <a href="{{ url('pacientes/'.$paciente -> id.'/edit') }}" class="btn btn-info"><i class="fa fa-edit"></i> Editar paciente</a>
        <a id="btnDeletePaciente" data-remote="{{ $paciente -> id }}" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar paciente</a>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <!-- Ver los datos personales -->
            @include('pacientes.partials.show.datosPersonales');

            <!-- Ver la información de contacto-->
            @include('pacientes.partials.show.contactoinfo')

            <!-- Ver la dirección-->
            @include('pacientes.partials.show.direccion')
        </div>
    </div>
</div>
@endsection