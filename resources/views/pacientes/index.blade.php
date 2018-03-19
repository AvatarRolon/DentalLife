@extends('adminlte::page')

@section('htmlheader_title')
	{{ 'DentalLife-Pacientes' }}
@endsection

@section('contentheader_title')
	{{ 'Pacientes' }}
@endsection

@section('contentheader_description')
	{{ 'Gestione a sus pacientes' }}
@endsection

@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">
				<a class="btn btn-success" href="" role="button">
					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
					Agregar
				</a>
				<!--button type="button" class="btn btn-primary" data-toggle="modal" id="imprimir"><i class="glyphicon glyphicon-print"></i> Imprimir</button-->
			</div>
		</div>
	</div>
	<br>
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col">
				<div class="box box-solid box-primary">
				    <div class="box-header with-border">	
				    	<i class="glyphicon glyphicon-list"></i>			          
				        <h3 class="box-title">Pacientes</h3>
				    </div>			    
				    <div class="box-body">	
				        <table class="table table-striped table-hover" id="TablaPaavi">
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
                          <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">Nombre del paciente</td>
                                <td class="text-center">0123456789</td>
                                <td class="text-center">Ocupación</td>
                                <td class="text-center">100</td>
                                <td class="text-center">M ó F</td>                            
                                <td class="text-center">
                                    <i class="fa fa-eye" style="font-size: 1.5em; cursor: pointer; color: #00BFFF;" data-toggle="tooltip" title="Ver datos"></i>
                                    &nbsp;
									<i class="fa fa-edit" style="font-size: 1.5em; cursor: pointer; color: #00BFFF;" data-toggle="tooltip" title="Editar datos"></i>
                                    &nbsp;
									<i class="fa fa-history" style="font-size: 1.5em; cursor: pointer; color: #00BFFF;" data-toggle="tooltip" title="Historia cl&iacute;nica"></i>
                                    &nbsp;
									<i class="fa fa-trash" style="font-size: 1.5em; cursor: pointer; color: #DC143C;" data-toggle="tooltip" title="Borrar paciente"></i>
                                </td>
                            </tr>                            
                          </tbody> 
                        </table>                        
					</div>					
				</div>   
			</div> 	
		</div>	
	</div>
@endsection