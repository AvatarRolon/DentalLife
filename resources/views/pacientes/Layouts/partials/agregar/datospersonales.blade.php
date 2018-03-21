<div class="box box-solid box-cream">
    <div class="box-header with-border">	
        <i class="glyphicon glyphicon-list"></i>			          
        <h3 class="box-title">Datos Personales</h3>
    </div>			    
    <div class="box-body">	
        <div class="container-fluid spark-screen">                        
            <div class="form-group full-width">
                <div class="col-md-2">
                    <label for="CURP">CURP:<span class="ico-r-cream">*<span></label> 
                </div>
                <input type="text" class="form-control" id="CURP" name="CURP" placeholder="CURP" autocomplete="off" max="18" required  />
            </div>
            <br><br>
            <div class="form-group full-width">                       
                <div class="col-md-2">
                    <label for="nombre">Nombre:<span class="ico-r-cream">*<span></label>                                
                </div>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre(s)" autocomplete="off" max="30" required/>
                &nbsp;
                <input type="text" class="form-control" id="appat" name="appat" placeholder="Apellido Paterno" autocomplete="off" max="20" required/>
                &nbsp;
                <input type="text" class="form-control" id="apmat" name="apmat" placeholder="Apellido Materno" autocomplete="off" max="20" />
            </div>
            <br><br>
            <div class="form-group full-width">
                <div class="col-md-2">
                    <label for="RFC">RFC:</label>
                </div>
                <input type="text" class="form-control" name="RFC" id="RFC" placeholder="RFC" autocomplete="off" max="13" />
            </div>
            <br><br>
            <div class="form-group full-width">
                <div class="col-md-2">
                    <label for="ocupacion">Ocupaci&oacute;n:<span class="ico-r-cream">*<span></label>
                </div>
                <input type="text" class="form-control" name="ocupacion" id="ocupacion" placeholder="Ocupaci&oacute;n" autocomplete="off" max="25" required/>
            </div>
            <br><br>
            <div class="form-group full-width">
                <div class="col-md-2">
                    <label for="fechaNac">Fecha de nacimiento:<span class="ico-r-cream">*<span></label>
                </div>
                <input type="date" class="form-control" name="fechaNac" id="fechaNac" placeholder="DD/MM/AAAA" required />
            </div>
            <br><br>
            <div class="form-group full-width">
                <div class="col-md-2">
                    <label for="">Sexo:<span class="ico-r-cream">*<span><br></label>
                </div>
                <div class="col-md-2 labels text-center">                    
                    <input type="radio" id="M" name="sexo" value="M" required checked/>
                    <label for="M">Masculino</label>
                </div>
                <div class="col-md-2 labels text-center">                    
                    <input type="radio" id="F" name="sexo" value="F" required />
                    <label for="F">Femenino</label>
                </div>
            </div>
        </div>
    </div>
</div>