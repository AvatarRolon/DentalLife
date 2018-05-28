@extends('adminlte::page')

@section('htmlheader_title')
	{{ 'DentalLife-Pacientes' }}
@endsection

@section('contentheader_title')
	{{ 'Pacientes' }}
@endsection

@section('contentheader_description')
	{{ 'Información de sus pacientes' }}
@endsection

@section('main-content')
<div class="container-fluid spark-screen">
	<div class="row">
		<div class="col-md-12">
			<a class="btn btn-info" style="background-color: #47B7B1;" href="{{ url('/pacientes/create') }}" role="button">
				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
				Agregar
			</a>
			<!--button type="button" class="btn btn-primary" data-toggle="modal" id="imprimir"><i class="glyphicon glyphicon-print"></i> Imprimir</button-->
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col">
			<div class="box box-solid box-cream">
				<div class="box-header with-border">
					<i class="glyphicon glyphicon-list"></i>
					<h3 class="box-title">Pacientes</h3>
				</div>
				<div class="box-body">
					@include('pacientes.partials.tabla')				
				</div>
			</div>
		</div>
	</div>
</div>
@endsection