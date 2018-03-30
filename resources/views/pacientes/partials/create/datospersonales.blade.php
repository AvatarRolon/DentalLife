<div class="box box-solid box-cream">
    <div class="box-header with-border">	
        <i class="glyphicon glyphicon-list"></i>			          
        <h3 class="box-title">Datos Personales</h3>
    </div>			    
    <div class="box-body">	
        <div class="container-fluid spark-screen">                        
            <div class="form-group full-width">
                @if (count($errors) > 0)
                    <div class="row">
                    <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <span class="label label-danger text-center" >{{$errors->first('CURP')}}</span>
                        </div> 
                    </div>    
                    <br>
                @endif
                <div class="col-md-2">
                    <label for="CURP">CURP:<span class="ico-r-cream">*<span></label> 
                </div>
                <input type="text" class="form-control" id="CURP" name="CURP" placeholder="CURP" autocomplete="off" max="18" value="{{ old('CURP', isset($paciente) ? $paciente->CURP : '') }}" required  />
            </div>
            <br><br>
            <div class="form-group full-width">  
                @if (count($errors) > 0)
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <span class="label label-danger" >{{$errors->first('nombre')}}</span>
                        </div>                         
                        <div class="col-md-3 text-center">     
                            <span class="label label-danger" >{{$errors->first('appat')}}</span>
                        </div> 
                    </div>    
                    <br>
                @endif                     
                <div class="col-md-2">
                    <label for="nombre">Nombre:<span class="ico-r-cream">*<span></label>                                
                </div>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre(s)" autocomplete="off" max="30" value="{{ old('nombre', isset($paciente) ? $paciente->nombre : '') }}" required/>
                &nbsp;
                <input type="text" class="form-control" id="appat" name="appat" placeholder="Apellido Paterno" autocomplete="off" max="20" value="{{ old('appat', isset($paciente) ? $paciente->apPat : '') }}" required/>
                &nbsp;
                <input type="text" class="form-control" id="apmat" name="apmat" placeholder="Apellido Materno" autocomplete="off" max="20" value="{{ old('apmat', isset($paciente) ? $paciente->apMat : '') }}" />
            </div>
            <br><br>
            <div class="form-group full-width">
                <div class="col-md-2">
                    <label for="RFC">RFC:</label>
                </div>
                <input type="text" class="form-control" name="RFC" id="RFC" placeholder="RFC" autocomplete="off" max="13" value="{{ old('RFC', isset($paciente) ? $paciente->RFC : '') }}" />
            </div>
            <br><br>
            <div class="form-group full-width">
                @if (count($errors) > 0)
                    <div class="row">
                    <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <span class="label label-danger text-center" >{{$errors->first('ocupacion')}}</span>
                        </div> 
                    </div>    
                    <br>
                @endif
                <div class="col-md-2">
                    <label for="ocupacion">Ocupaci&oacute;n:<span class="ico-r-cream">*<span></label>
                </div>
                <input type="text" class="form-control" name="ocupacion" id="ocupacion" placeholder="Ocupaci&oacute;n" autocomplete="off" max="25" value="{{ old('ocupacion', isset($paciente) ? $paciente->ocupacion : '') }}"required/>
            </div>
            <br><br>
            <div class="form-group full-width">
                @if (count($errors) > 0)
                    <div class="row">
                    <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <span class="label label-danger text-center" >{{$errors->first('fechaNac')}}</span>
                        </div> 
                    </div>    
                    <br>
                @endif
                <div class="col-md-2">
                    <label for="fechaNac">Fecha de nacimiento:<span class="ico-r-cream">*<span></label>
                </div>
                <input type="date" class="form-control" name="fechaNac" id="fechaNac" placeholder="DD/MM/AAAA" required value="{{ old('fechaNac', isset($paciente) ? $paciente->fechaNac : '') }}"/>
            </div>
            <br><br>
            <div class="form-group full-width">
                @if (count($errors) > 0)
                    <div class="row">
                    <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <span class="label label-danger text-center" >{{$errors->first('sexo')}}</span>
                        </div> 
                    </div>    
                    <br>
                @endif
                <div class="col-md-2">
                    <label for="">Sexo:<span class="ico-r-cream">*<span><br></label>
                </div>
                @if(isset($paciente))
                    <div class="col-md-2 labels text-center">                    
                        <input type="radio" id="M" name="sexo" value="M" required @if($paciente -> sexo == 'M' ) checked @endif />
                        <label for="M">Masculino</label>
                    </div>
                    <div class="col-md-2 labels text-center">                    
                        <input type="radio" id="F" name="sexo" value="F" required @if($paciente -> sexo == 'F' ) checked @endif />
                        <label for="F">Femenino</label>
                    </div>
                @else
                <div class="col-md-2 labels text-center">                    
                        <input type="radio" id="M" name="sexo" value="M" required checked/>
                        <label for="M">Masculino</label>
                    </div>
                    <div class="col-md-2 labels text-center">                    
                        <input type="radio" id="F" name="sexo" value="F" required />
                        <label for="F">Femenino</label>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>