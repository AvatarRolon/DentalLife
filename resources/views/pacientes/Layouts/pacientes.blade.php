@extends('pacientes.index')

@section('htmlheader_title')
	{{ 'DentalLife-Pacientes' }}
@endsection

@section('contentheader_title')
	{{ 'Pacientes' }}
@endsection

@section('contentheader_description')
	{{ 'Gestione a sus pacientes' }}
@endsection

@section('pacientes-content')
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-info" href="{{ url('/agregar/paciente') }}" role="button">
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
                    <table class="table table-striped table-hover table-responsive text-center" id="TablaPacientes">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>                                
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Tel&eacute;fono</th>
                                <th class="text-center">Ocupaci&oacute;n</th>
                                <th class="text-center">Edad</th>
                                <th class="text-center">G&eacute;nero</th>
                                <th class="text-center">Opci&oacute;n</th>    
                            </tr>
                        </thead>                         
                    </table>                        
                </div>					
            </div>   
        </div> 	
    </div>	
@endsection