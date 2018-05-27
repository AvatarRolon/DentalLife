<input type="hidden" name="_token" value="{{ csrf_token() }}">
<br>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-info">
		  	<div class="panel-heading">
		    	<h3 class="panel-title">Datos personales del paciente</h3>
		  	</div>
		  	<div class="panel-body">
		  		<!--......................................................................-->
		  		<div class="col">
			    	<div class="form-group full-width">
						<div class="col-md-6">
							<div class="form-group {{ $errors->has('paciente') ? 'has-error' : '' }}">
								<div class="col-md-3">
								    <label for="paciente_id">Paciente: <span class="ico-r-cream"><span></label>
								</div>
								<div class="col-md-6">
					            	<select class="form-control" id="paciente" name="paciente">
							    		<option value="">Buscar paciente</option>
							    		@foreach($pacientes as $pacientes)
								    		<option value="{{ $pacientes->id }}" @if(old('paciente', isset($cita) ? $cita->paciente_id : '') == $pacientes->id) {{ 'selected' }} @endif>{{ $pacientes->nombre."  ".$pacientes->apPat }}</option>
								    	@endforeach
						    		</select>
								</div>
							</div>
						</div>
						<h1 class="label label-danger text-center">{{ $errors->first('paciente') }}</h1>
					</div>
				</div>
				<!--......................................................................-->
				<div class="col">
			    	<div class="form-group full-width">
			    		<div class="col-md-6">
							<div class="form-group {{ $errors->has('paciente') ? 'has-error' : '' }}">
								<div class="col-md-4">
								    <label for="paciente_id">Historia Clinica: <span class="ico-r-cream"><span></label>
								</div>
								<div class="col-md-5">
					            	<input type="text" class="form-control" placeholder="HKL123" DISABLED/>
								</div>
							</div>
						</div>
			    	</div>
		    	</div>
				<!--......................................................................-->
		  	</div>
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-info">
		  	<div class="panel-heading">
		    	<h3 class="panel-title">Seleccionar Tratamientos</h3>
		  	</div>
		  	<div class="panel-body">
		  		<!--.................................................................................-->
		  		<div class="col">
			    	<div class="form-group full-width">
						<div class="col-md-6">
							<div class="form-group {{ $errors->has('paciente') ? 'has-error' : '' }}">
							   <div class="col-md-3">
					                <label for="paciente_id">Categoria<span class="ico-r-cream"><span></label>
					            </div>
					           <div class="col-md-6">
					            	<select class="form-control" id="categoriaServ_id" name="categoriaServ_id">
							    		<option value="">Seleccionar...</option>
							    		@foreach($categorias as $categoria)
								    		<option value="{{ $categoria->id }}" @if(old('categoriaServ_id', isset($servicios) ? $servicios->categoriaServ_id : '') == $categoria->id) {{ 'selected' }} @endif>{{ $categoria->nombre }}</option>
								    	@endforeach
						    		</select>
					            </div>
							</div>
						</div>
						<h1 class="label label-danger text-center">{{ $errors->first('paciente') }}</h1>
					</div>
				</div>
				<!--........................................................................-->
				<div class="col-md-6">
					<div class=" row titulo bgTh">
				    	<h3>Tratamientos</h3>
				  	</div>
				  	<div class=" row cuerpo">
				    	<fieldset id="fieldset" class="checkboxT">
						</fieldset>
				  	</div>
				</div>
				<!--.........................................................................-->
		  	</div>
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-info">
		  	<div class="panel-heading">
		    	<h3 class="panel-title">Tratamiento del paciente</h3>
		  	</div>
		  	<div class="panel-body">
		  		<br>
		   	 	<div class="form-group full-width">
					<div class="col-md-12">
						<table class="table table-bordered" id="id_tabla">
						  <thead>
						    <tr>
						      	<th class="text-center bgTh " >Descripción</th>
			                    <th class="text-center bgTh " >Fecha de inicio</th>
			                    <th class="text-center bgTh " >Fecha final</th>
			                    <th class="text-center bgTh " >Costo</th>
			                    <th class="text-center bgTh " >Opción</th>
						    </tr>
						  </thead>
						  <tbody id="tbody">
						  	<!--Se agrega desde javaScript-->
						  </tbody>
						</table>
					</div>
				</div>
				<br>
				<!--......................................................................................-->
				<div class="col-md-12 text-right">
					<div class="form-group {{ $errors->has('total') ? 'has-error' : '' }}">
						<div class="col-md-10">
					    	<label><b>Total: </b></label>
						</div>
					   <div class="input-group col-md-2">
							<span class="input-group-addon">$</span>
						    <input type="text" DISABLED class="form-control" id="total" name="total" value="0.00"/>
						</div>
					    <span class="text-danger">{{ $errors->first('total') }}</span>
					</div>
				</div>
				<!--..........................................................................................-->
		  	</div>
		</div>
	</div>
</div>
<br>