@extends('adminlte::page')

@section('htmlheader_title')
	{{ 'DentalLife-Citas' }}
@endsection

@section('contentheader_title')
	{{ 'Citas' }}
@endsection

@section('contentheader_description')
	{{ 'Información de sus citas' }}
@endsection

@section('main-content')
   <!--div class="row">
        <div class="col-md-12">
            <a class="btn btn-info" href="{{ url('citas/create') }}" role="button" style="background-color: #47B7B1;">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                Agendar
            </a>
            <!--button type="button" class="btn btn-primary" data-toggle="modal" id="imprimir"><i class="glyphicon glyphicon-print"></i> Imprimir</button>
        </div>
    </div>
    <br-->
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col">
				<div class="box box-solid box-cream">
				    <div class="box-header with-border">	
				    	<i class="glyphicon glyphicon-list"></i>			          
				        <h3 class="box-title">Próximas citas</h3>
				    </div>			    
				    <div class="box-body">					
						<div id='calendar'></div>
					</div>					
				</div>   
			</div> 	
		</div>	
	</div>	
@endsection