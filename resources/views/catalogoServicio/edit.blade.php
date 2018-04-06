@extends('adminlte::page')

@section('htmlheader_title')
	{{ 'DentalLife-Editar servicio' }}
@endsection

@section('contentheader_title')
    &nbsp;&nbsp;
    <a href="{{ url('/catalogoServicio') }}" data-toggle="tooltip" title="Regresar al catalógo de servicios"><i class="ico-green-cream fa fa-angle-left"></i></a>
    &nbsp;&nbsp;
    {{ 'Editar servicio' }}
@endsection

@section('contentheader_description')
	{{ 'Editar el servicio' }}
@endsection

@section('main-content')
    @if (count($errors) > 0)
        <div class="row alert alert-danger text-center">
        	<h4><i class="icon fa fa-warning"></i> Error!</h4>
            <span>Por favor, complete los campos que son necesarios</span>
        </div>    
    @endif

   <div class="container-fluid spark-screen">
		</br>
		<div class="row">
			<div class="col">
				<div class="box box-solid  box-cream">
				    <div class="box-header with-border">
				    	<i class="glyphicon glyphicon-pencil"></i>
				        <h3 class="box-title">Editar servicio</h3>   
				        <div class="box-tools pull-right">
			                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			                </button>
              			</div>                     
				    </div>
				    <!-- form -->
            		<form id="editServicio" method="POST" action="{{ url('/catalogoServicio/'.$servicios->id) }}" >
            			<input name="servicio" id="servicio" type="hidden" value="{{ $servicios->id }}">
            			<input name="_method" type="hidden" value="PATCH">
					    <div class="box-body">	
							@include('catalogoServicio.partials.campos')
						</div>
						<div class="box-footer">
							<div class="col-md-12 text-right">
								<button type="submit" class="btn btn-primary editar"><i class="glyphicon glyphicon-save"></i> Guardar </button>
					            <a class="btn btn-danger" href="{{ url('/catalogoServicio/') }}" role="button">
					                <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Salir
					            </a>	 								
							</div>							
						</div>
					</form>
				</div>				
			</div>
		</div>
	</div>
@endsection