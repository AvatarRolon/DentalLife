
<div class="box box-solid box-cream">
    <div class="box-header with-border">	
        <i class="glyphicon glyphicon-list"></i>			          
        <h3 class="box-title">Datos Personales</h3>
    </div>			    
    <div class="box-body">	
        <div class="container-fluid spark-screen">                        
            <div class="col-md-3">
                <img src="/storage{{ $paciente['foto'] }}" class="img-thumbnail" width="250" height="250" alt="Foto del paciente">
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-8 list-group">
                <div class="row list-group-item">
                    <div class="col-md-4">
                        <b>CURP del paciente:</b>
                    </div>                    
                    <div class="col-md-8">
                        <span>{{ $paciente['CURP'] }}</span>
                    </div>
                </div>
                <div class="row list-group-item">
                    <div class="col-md-4">
                        <b>Nombre del paciente:</b>
                    </div>
                    <div class="col-md-8">                    
                        <span>{{ $paciente['nombre']." ".$paciente['apPat']." ".$paciente['apMat'] }}</span>
                    </div>
                </div>
                <div class="row list-group-item">
                    <div class="col-md-4">
                        <b>RFC del paciente:</b>
                    </div>
                    <div class="col-md-8">
                        <span>{{ $paciente['RFC'] }}</span>
                    </div>
                </div>
                <div class="row list-group-item">
                    <div class="col-md-4">
                        <b>Ocupación del paciente:</b>
                    </div>
                    <div class="col-md-8">
                        <span>{{ $paciente['ocupacion'] }}</span>
                    </div>
                </div>
                <div class="row list-group-item">
                    <div class="col-md-4">
                        <b>Fecha de nacimiento:</b>
                    </div>
                    <div class="col-md-8">
                        <span>{{ $paciente['fechaNac'] }}</span>
                    </div>
                </div>
                <div class="row list-group-item">
                    <div class="col-md-4">
                        <b>Sexo:</b>
                    </div>                    
                    @if($paciente['sexo'] == 'M')
                        <div class="col-md-8">
                            <span>Masculino</span>
                        </div>
                    @else
                        <div class="col-md-8">
                            <span>Femenino</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>