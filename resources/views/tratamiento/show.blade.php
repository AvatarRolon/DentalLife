@extends('adminlte::page')

@section('htmlheader_title')
	{{ 'DentalLife-Ver tratamiento' }}
@endsection

@section('contentheader_title')
    &nbsp;&nbsp;
    <a href="{{ url('/tratamientos') }}" data-toggle="tooltip" title="Regresar a la lista de tratamientos"><i class="ico-green-cream fa fa-angle-left"></i></a>
    &nbsp;&nbsp;
    {{ 'Ver tratamiento' }}
@endsection

@section('contentheader_description')
	{{ 'Ver información de un tratamiento en especifico' }}
@endsection

@section('main-content')
    @if (count($errors) > 0)
        <div class="row alert alert-danger text-center">
        	<h4><i class="icon fa fa-warning"></i> Error!</h4>
            <span>Por favor, complete los campos que son necesarios</span>
        </div>    
    @endif
    <div class="container-fluid spark-screen">
	    <!--<div class="row">
	        <a href="" class="btn btn-info"><i class="fa fa-edit"></i> Editar</a>
	        <a id="" data-remote="" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</a>
	    </div>-->
   		<br>
		<div class="row">
			<div class="col">
				<div class="box box-solid box-cream">
					<div class="box-header with-border">	
				        <i class="glyphicon glyphicon-thumbs-up"></i>			          
				        <h3 class="box-title">Datos del tratamiento</h3>
				        <div class="box-tools pull-right">
			                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			                </button>
              			</div> 
				    </div>	
				    <!-- form -->
            		<form method="POST" action="/tratamientos/" >
					    <div class="box-body">	
							@include('tratamiento.partials.showDatos')
						</div>
						<div class="box-footer">
							<div class="col-md-12 text-right">
					            <a class="btn btn-danger" href="{{ url('/tratamientos/') }}" role="button">
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
