@extends('adminlte::page')

@section('htmlheader_title')
	{{ 'DentalLife-Catálogo de servicios' }}
@endsection

@section('contentheader_title')
	{{ 'Catálogo de servicios' }}
@endsection

@section('contentheader_description')
	{{ 'Información de sus servicios' }}
@endsection

@section('main-content')
   <div class="row">
        <div class="col-md-12">
            <a class="btn btn-info" href="{{ url('catalogoServicio/create') }}" role="button">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                Agregar
            </a>
            <!--button type="button" class="btn btn-primary" data-toggle="modal" id="imprimir"><i class="glyphicon glyphicon-print"></i> Imprimir</button-->
        </div>
    </div>
    <br>
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col">
				<div class="box box-solid box-cream">
				    <div class="box-header with-border">	
				    	<i class="glyphicon glyphicon-list"></i>			          
				        <h3 class="box-title">Listado de los servicios</h3>
				    </div>			    
				    <div class="box-body">							
						@include('catalogoServicio.partials.tabla')
					</div>					
				</div>   
			</div> 	
		</div>	
	</div>	
@endsection