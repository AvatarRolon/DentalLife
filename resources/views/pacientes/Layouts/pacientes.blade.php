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
            <a class="btn btn-b-cream" href="{{ url('/agregar/paciente') }}" role="button">
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
                    <table class="table table-striped table-hover table-responsive" id="TablaPaavi">
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
                            @foreach($pacientes as $paciente)
                                <tr>
                                    <td class="text-center">{{ $paciente -> id }}</td>
                                    <td class="text-center">{{ $paciente -> nombre." ".$paciente -> apPat." ".$paciente -> apMat }}</td>
                                    <td class="text-center">{{ $paciente -> telefono }}</td>
                                    <td class="text-center">{{ $paciente -> ocupacion }}</td>
                                    <td class="text-center">{{ $paciente -> edad }}</td>
                                    <td class="text-center">{{ $paciente -> sexo }}</td>                            
                                    <td class="text-center">
                                        <a href="{{ url('/ver/paciente/'.$paciente -> id) }}"><i class="ico-cream ico-b-cream fa fa-eye" data-toggle="tooltip" title="Ver datos"></i></a>
                                        &nbsp;
                                        <a><i class="ico-cream ico-b-cream fa fa-edit" data-toggle="tooltip" title="Editar datos"></i></a>
                                        &nbsp;
                                        <a><i class="ico-cream ico-b-cream fa fa-history" data-toggle="tooltip" title="Historia cl&iacute;nica"></i></a>
                                        &nbsp;
                                        <a><i class="ico-cream ico-r-cream fa fa-trash" data-toggle="tooltip" title="Borrar paciente"></i></a>
                                    </td>
                                </tr>    
                            @endforeach                        
                        </tbody> 
                    </table>                        
                </div>					
            </div>   
        </div> 	
    </div>	
    <!-- Opciones de paginación -->             
    {{ $pacientes->render() }}
@endsection