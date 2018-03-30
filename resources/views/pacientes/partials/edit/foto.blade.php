<div class="box box-solid box-cream">
    <div class="box-header with-border">	
        <i class="glyphicon glyphicon-picture"></i>			          
        <h3 class="box-title">Fotograf&iacute;a</h3>
    </div>			    
    <div class="box-body">	
        <div class="container-fluid spark-screen">                        
            <div class="form-group full-width">
                <div id="foto-paciente" class="show-md-foto" style="display: block;">
                    <img src="{{ '/storage'.$paciente -> foto }}" id="picPaciente"alt="Foto del paciente">
                    <input type="file" id="foto" name="foto" value="{{ '/storage'.$paciente -> foto }}" style="display: none;" />
                    <div class="foto-paciente-buttons">
                        <label for="foto" class="btn btn-default" data-toggle="tooltip" title="Cambiar fotograf&iacute;a"><i class="glyphicon glyphicon-refresh"></i></label>                   
                        <label id="foto-remove" class="btn btn-danger" data-toggle="tooltip" title="Quitar fotograf&iacute;a"><i class="glyphicon glyphicon-remove"></i></label>
                    </div>
                </div>
            </div>        
        </div>
    </div>
</div>