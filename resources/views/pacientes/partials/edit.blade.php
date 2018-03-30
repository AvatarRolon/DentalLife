@extends('adminlte::page')

@section('htmlheader_title')
	{{ 'DentalLife-Agregar paciente' }}
@endsection

@section('contentheader_title')
    &nbsp;&nbsp;
    <a href="{{ url('/pacientes') }}" data-toggle="tooltip" title="Regresar a pacientes"><i class="ico-green-cream fa fa-angle-left"></i></a>
    &nbsp;&nbsp;
    {{ 'Editar paciente' }}
@endsection

@section('contentheader_description')
	{{ 'Edite un paciente existente' }}
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
            <form action="{{ url('pacientes/update') }}" method="POST" id="editarPaciente" class="form-inline" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <!-- Campo hidden de la curp -->
                @include('pacientes.partials.edit.curp') 

                <!-- Sección de datos personales -->
                @include('pacientes.partials.create.datospersonales')

                <!-- Información de contacto -->
                @include('pacientes.partials.create.contactoinfo') 
               
                <!-- Dirección -->
                @include('pacientes.partials.create.direccion') 

                <!-- Fotografía -->
                @include('pacientes.partials.edit.foto') 

                <!-- Botones de envío -->
                <div class="form-group">
                    <button class="btn btn-primary" type="submit" id="btnEditarAceptar"><i class="glyphicon glyphicon-ok"></i> Actualizar paciente</button>
                    <a id="btnDeletePaciente" data-remote="{{ $paciente -> id }}" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar paciente</a>
                    <a href="{{ url('/pacientes') }}" class="btn btn-default" ><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection