@extends('adminlte::page')

@section('htmlheader_title')
	{{ 'DentalLife-Agendar cita' }}
@endsection

@section('contentheader_title')
    &nbsp;&nbsp;
    <a href="{{ url('/citas') }}" data-toggle="tooltip" title="Regresar a la agenda de citas"><i class="ico-green-cream fa fa-angle-left"></i></a>
    &nbsp;&nbsp;
    {{ 'Agendar cita' }}
@endsection

@section('contentheader_description')
	{{ 'Agendar una nueva cita' }}
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
				<div class="box box-solid box-cream">
					<div class="box-header with-border">	
				        <i class="glyphicon glyphicon-pencil"></i>			          
				        <h3 class="box-title">Agendar nueva cita</h3>
				        <div class="box-tools pull-right">
			                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			                </button>
              			</div> 
				    </div>	
				    <!-- form -->
            		<form method="POST" id="nuevaCita" action="/citas/store" >
					    <div class="box-body">	
							@include('citas.partials.campos')
						</div>
						<div >
							<div class="col-md-12 text-right">
								</br>
								<button type="submit" class="btn btn-primary " id="id_create"><i class="glyphicon glyphicon-save"></i> Guardar </button>
					            <a class="btn btn-danger" href="{{ url('/citas') }}" role="button">
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
