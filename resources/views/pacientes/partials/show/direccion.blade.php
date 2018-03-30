<div class="box box-solid box-cream">
    <div class="box-header with-border">	
    <i class="glyphicon glyphicon-screenshot"></i>			          
        <h3 class="box-title">Direcci&oacute;n</h3>
    </div>			    
    <div class="box-body">	
        <div class="container-fluid spark-screen">    
            <div class="row text-center list-group-item">
                <b>Calle:</b>
                <span>{{ $paciente['calle'] }}</span>
            </div>                    
            <div class="row text-center">
                <div class="col-xs-6 list-group-item">
                    <b>Colonia:</b>
                    <span>{{ $paciente['colonia'] }}</span>
                </div>
                <div class="col-xs-6 list-group-item">
                    <b>N&uacute;mero de casa:</b>
                    <span>{{ $paciente['numCasa'] }}</span>
                </div>
            </div>            
        </div>
    </div>
</div>