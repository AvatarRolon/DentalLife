@extends('pacientes.index')

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

@section('pacientes-content')
    @if (count($errors) > 0)
        <div class="row alert alert-danger text-center">
            <span>Por favor, complete los campos que son necesarios</span>
        </div>    
    @endif
    <div class="row">
        <div class="col">
            <form action="{{ url('/nuevo/paciente') }}" method="POST" id="nuevoPaciente" class="form-inline" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <!-- Sección de datos personales -->
                @include('pacientes.Layouts.partials.agregar.datospersonales')

                <!-- Información de contacto -->
                @include('pacientes.Layouts.partials.agregar.contactoinfo') 
               
                <!-- Dirección -->
                @include('pacientes.Layouts.partials.agregar.direccion') 

                <!-- Fotografía -->
                @include('pacientes.Layouts.partials.agregar.foto') 

                <!-- Botones de envío -->
                <div class="form-group">
                    <button class="btn btn-primary" id="agregarPaciente" type="submit"><i class="glyphicon glyphicon-ok"></i> Agregar paciente</button>
                    <a href="{{ url('/pacientes') }}" class="btn btn-default" ><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection