@extends('pacientes.index')

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

@section('pacientes-content')
    @if (count($errors) > 0)
        <div class="row alert alert-danger text-center">
            <span>Por favor, complete los campos que son necesarios</span>
        </div>    
    @endif
    <div class="row">
        <div class="col">
            <form action="{{ url('/update/paciente') }}" method="POST" id="editarPaciente" class="form-inline" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <!-- Sección de datos personales -->
                @include('pacientes.Layouts.partials.editar.datospersonales')

                <!-- Información de contacto -->
                @include('pacientes.Layouts.partials.editar.contactoinfo') 
               
                <!-- Dirección -->
                @include('pacientes.Layouts.partials.editar.direccion') 

                <!-- Fotografía -->
                @include('pacientes.Layouts.partials.editar.foto') 

                <!-- Botones de envío -->
                <div class="form-group">
                    <button class="btn btn-primary" type="submit" id="btnEditarAceptar"><i class="glyphicon glyphicon-ok"></i> Actualizar paciente</button>
                    <a id="btnDeletePaciente" data-remote="{{ $paciente -> id }}" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar paciente</a>
                    <a href="{{ url('/pacientes') }}" class="btn btn-default" ><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection