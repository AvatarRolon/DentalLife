<div class="box box-solid box-cream">
    <div class="box-header with-border">	
        <i class="glyphicon glyphicon-screenshot"></i>			          
        <h3 class="box-title">Direcci&oacute;n</h3>
    </div>			    
    <div class="box-body">	
        <div class="container-fluid spark-screen">                        
            <div class="form-group full-width">
                <div class="col-md-2">
                    <label for="colonia">Colonia:<span class="ico-r-cream">*<span></label> 
                </div>
                <input type="text" class="form-control" id="colonia" name="colonia" placeholder="Colonia" autocomplete="off" max="25" value="{{ $paciente -> colonia }}" required />
            </div>
            <br>
            <br>
            <div class="form-group full-width">                       
                <div class="col-md-2">
                    <label for="calle">Calle(s):<span class="ico-r-cream">*<span></label>                                
                </div>
                <input type="text" class="form-control" id="calle" name="calle" placeholder="Calle(s)" autocomplete="off" max="50" value="{{ $paciente -> calle }}" required />
            </div>   
            <br>
            <br>
            <div class="form-group full-width">                       
                <div class="col-md-2">
                    <label for="numCasa">N&uacute;mero de casa:<span class="ico-r-cream">*<span></label>                                
                </div>
                <input type="text" class="form-control" id="numCasa" name="numCasa" placeholder="N&uacute;mero de casa" autocomplete="off" max="4" value="{{ $paciente -> numCasa }}" required />
            </div>         
        </div>
    </div>
</div>