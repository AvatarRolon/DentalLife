<div class="box box-solid box-cream">
    <div class="box-header with-border">	
        <i class="glyphicon glyphicon-picture"></i>			          
        <h3 class="box-title">Fotograf&iacute;a</h3>
    </div>			    
    <div class="box-body">	
        <div class="container-fluid spark-screen">                        
            <div class="form-group full-width">
                <div id="thumb-foto-paciente" class="thumb-md-foto">
                   <label for="foto" data-toggle="tooltip" title="Agregar fotograf&iacute;a">+<br><sub>Agregar Fotograf&iacute;a</sub></label>                   
                   <input type="file" id="foto" name="foto" value="" />   
                </div>
                <div id="foto-paciente" class="show-md-foto">
                    <img src="{{ asset('/img/ico-man.png') }}" id="picPaciente"alt="Foto del paciente">
                    <div class="foto-paciente-buttons">
                        <label for="foto" class="btn btn-default" data-toggle="tooltip" title="Cambiar fotograf&iacute;a"><i class="glyphicon glyphicon-refresh"></i></label>                   
                        <label id="foto-remove" class="btn btn-danger" data-toggle="tooltip" title="Quitar fotograf&iacute;a"><i class="glyphicon glyphicon-remove"></i></label>
                    </div>
                </div>
            </div>        
        </div>
    </div>
</div>