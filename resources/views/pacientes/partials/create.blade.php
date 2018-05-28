@extends('adminlte::page')

@section('htmlheader_title')
	{{ 'DentalLife-Agregar paciente' }}
@endsection

@section('contentheader_title')
    &nbsp;&nbsp;
    <a href="{{ url('/pacientes') }}" data-toggle="tooltip" title="Regresar a pacientes"><i class="ico-green-cream fa fa-angle-left"></i></a>
    &nbsp;&nbsp;
    {{ 'Agregar paciente' }}
@endsection

@section('contentheader_description')
	{{ 'Agregue un nuevo paciente' }}
@endsection

@section('main-content')
<div class="container-fluid spark-screen">
    @if (count($errors) > 0)
        <div class="row alert alert-danger text-center">
            <span>Por favor, complete los campos que son necesarios</span>
        </div>    
    @endif
    <div class="row">
        <div class="col">
            <form action="{{ url('/pacientes') }}" method="POST" id="nuevoPaciente" class="form-inline" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <!-- Sección de datos personales -->
                @include('pacientes.partials.create.datospersonales')

                <!-- Información de contacto -->
                @include('pacientes.partials.create.contactoinfo') 
               
                <!-- Dirección -->
                @include('pacientes.partials.create.direccion') 

                <!-- Fotografía -->
                @include('pacientes.partials.create.foto') 

                <!-- Botones de envío -->
                <div class="form-group">
                    <button class="btn btn-primary" id="agregarPaciente" type="submit"><i class="glyphicon glyphicon-ok"></i> Agregar paciente</button>
                    <a href="{{ url('/pacientes') }}" class="btn btn-danger" ><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection