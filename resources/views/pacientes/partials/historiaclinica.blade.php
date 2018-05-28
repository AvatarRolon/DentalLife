@extends('adminlte::page') 

@section('htmlheader_title') 
    {{ 'DentalLife-Historia Clínica' }} 
@endsection 

@section('contentheader_title')
    &nbsp;&nbsp;
    <a href="{{ url('/pacientes') }}" data-toggle="tooltip" title="Regresar a pacientes"><i class="ico-green-cream fa fa-angle-left"></i></a>
    &nbsp;&nbsp;
    {{ 'Historia Clínica' }} 
@endsection 

@section('contentheader_description') 
    {{ 'Consultar la historia clínica de un paciente'}} 
@endsection 

@section('main-content')
<div class="container-fluid spark-screen">
    <!--div class="row">
		<div class="col-md-12">
			<a class="btn btn-info" style="background-color: #47B7B1;" href="{{ url('/pacientes/create') }}" role="button">
				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
				Agregar
			</a>
			<button type="button" class="btn btn-primary" data-toggle="modal" id="imprimir"><i class="glyphicon glyphicon-print"></i> Imprimir</button>
		</div>
	</div>
    <br-->
    <div class="row">
        <div class="col">
            <div class="box box-solid box-cream">
                <div class="box-header with-border">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <i class="fa fa-info-circle"></i>
                            <h3 class="box-title">Matrícula: {{ $paciente->id }} </h3>
                        </div>
                        <div class="col-md-6 text-center">
                            @if($paciente->sexo == 'M')
                                <i class="fa fa-child"></i>
                            @else
                                <i class="fa fa-female"></i>
                            @endif
                            <h3 class="box-title">Paciente: {{ $paciente->nombre.' '.$paciente->apPat.' '.$paciente->apMat }} </h3>
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-8">
                            <table class="table table-hover">
                                <tr>
                                    <th class="text-center" colspan="6">
                                        Datos Personales
                                    </th>
                                </tr>
                                <tr class="text-center">
                                    <th>Dirección</th>
                                    <th>Teléfono</th>
                                    <th>Fecha de Naimiento</th>
                                    <th>Ocupación</th>
                                    <th>Edad</th>
                                    <th>Sexo</th>
                                </tr>
                                <tr class="text-center">
                                    <td> {{ $paciente->calle.', '.$paciente->colonia.', '.$paciente->numCasa }} </td>
                                    <td> {{$paciente->telefono}} </td>
                                    <td> {{$paciente->fechaNac}} </td>
                                    <td> {{$paciente->ocupacion}} </td>
                                    <td> {{$paciente->edad}} </td>
                                    <td> {{$paciente->sexo}} </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-xs-6 col-md-4 text-center">
                            <img src="/storage{{ $paciente->foto }}" class="img-thumbnail" width="250" height="250" alt="Foto del paciente">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabsHC">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#tratamientos" aria-controls="tratamientos" role="tab" data-toggle="tab">Tratamientos</a></li>
                                    <li role="presentation"><a href="#odontograma" aria-controls="odontograma" role="tab" data-toggle="tab">odontograma</a></li>
                                    <li role="presentation"><a href="#notas" aria-controls="notas" role="tab" data-toggle="tab">Notas</a></li>
                                    <li role="presentation"><a href="#alertaClinica" aria-controls="alertaClinica" role="tab" data-toggle="tab">Alertas Clínicas</a></li>                                    
                                </ul>
                                
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="tratamientos">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table table-hover">
                                                    <tr class="text-center">
                                                        <th>ID</th>
                                                        <th>Fecha de inicio</th>
                                                        <th>Fecha de terminación</th>
                                                        <th>Estado del tratamiento</th>
                                                        <th>Tratamiento</th>
                                                    </tr>
                                                    <tr class="text-center success">
                                                        <td>1</td>
                                                        <td>2015-05-27</td>
                                                        <td>2017-05-27</td>
                                                        <td>Finalizado</td>
                                                        <td>Inserte nombre de tratamiento</td>
                                                    </tr>
                                                    <tr class="text-center danger">
                                                        <td>2</td>
                                                        <td>2015-05-27</td>
                                                        <td>2017-05-27</td>
                                                        <td>Cancelado</td>
                                                        <td>Inserte nombre de tratamiento</td>
                                                    </tr>
                                                    <tr class="text-center info">
                                                        <td>3</td>
                                                        <td>2015-05-27</td>
                                                        <td>2017-05-27</td>
                                                        <td>En Proceso</td>
                                                        <td>Inserte nombre de tratamiento</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane text-center" id="odontograma">
                                        <img src="/img/Odontograma.png" alt="">
                                    </div>                                    
                                    <div role="tabpanel" class="tab-pane" id="notas">
                                    
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="alertaClinica">
                                    
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection