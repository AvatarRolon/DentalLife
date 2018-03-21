@extends('pacientes.index')

@section('htmlheader_title')
	{{ 'DentalLife-Ver paciente' }}
@endsection

@section('contentheader_title')
    &nbsp;&nbsp;
    <a href="{{ url('/pacientes') }}"><i class="ico-green-cream fa fa-angle-left"></i></a>
    &nbsp;&nbsp;
    {{ 'Ver paciente' }}
@endsection

@section('contentheader_description')
	{{ 'Ver información de un paciente' }}
@endsection

@section('pacientes-content')
    <img src="" alt="img">
@endsection