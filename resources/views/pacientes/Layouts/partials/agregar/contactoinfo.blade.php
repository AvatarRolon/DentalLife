<div class="box box-solid box-cream">
    <div class="box-header with-border">	
        <i class="glyphicon glyphicon-envelope"></i>			          
        <h3 class="box-title">Información de contacto</h3>
    </div>			    
    <div class="box-body">	
        <div class="container-fluid spark-screen">                        
            <div class="form-group full-width">
                <div class="col-md-2">
                    <label for="telefono">Tel&eacute;fono:</label> 
                </div>
                <input type="number" class="form-control" id="telefono" name="telefono" placeholder="N&uacute;mero de tel&eacute;fono" autocomplete="off" value="{{ old('telefono') }}" />
            </div>
            <br>
            <br>
            <div class="form-group full-width">                       
                <div class="col-md-2">
                    <label for="email">E-mail:</label>                                
                </div>
                <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@mail.com" autocomplete="off" max="50" value="{{ old('email') }}" />
            </div>           
        </div>
    </div>
</div>