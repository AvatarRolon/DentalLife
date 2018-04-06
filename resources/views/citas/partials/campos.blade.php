<input type="hidden" name="_token" value="{{ csrf_token() }}">

<br>
<div class="row">
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
<br>
<div class="row">
	<div class="form-group full-width">
		<div class="col-md-6">
			<div class="form-group {{ $errors->has('fecha') ? 'has-error' : '' }}">
			   <div class="col-md-3">
	                <label for="fechaNac">Fecha: <span class="ico-r-cream"><span></label>
	            </div>
	            <div class="col-md-5">
	            	<div class="input-group date">
						<span class="input-group-addon">
				            <span class="glyphicon glyphicon-calendar"></span>
				        </span>
					    <input type="date" class="form-control" id="fecha" name="fecha" value="{{ old('fecha', isset($citas) ? $cita->fecha : '') }}"/>
					</div>
	            </div>
			</div>
		</div>
		<h1 class="label label-danger text-center">{{ $errors->first('fecha') }}</h1>
	</div>
</div>
<br>
<div class="row">
	<div class="form-group full-width">
		<div class="col-md-6">
			<div class="form-group {{ $errors->has('horaI') ? 'has-error' : '' }}">
			   <div class="col-md-3">
	                <label for="fechaNac">De: <span class="ico-r-cream"><span></label>
	            </div>
	            <div class="col-md-4">
	            	<div class="input-group">
						<span class="input-group-addon">
				            <span class="glyphicon glyphicon-time"></span>
				        </span>
					    <input type="time" class="form-control" id="horaI" name="horaI" value="{{ old('horaI', isset($citas) ? $cita->horaI : '') }}"/>
					</div>
	            </div>
			</div>
		</div>
		<h1 class="label label-danger text-center">{{ $errors->first('horaI') }}</h1>
	</div>
</div>
<br>
<div class="row">
	<div class="form-group full-width">
		<div class="col-md-6">
			<div class="form-group {{ $errors->has('horaF') ? 'has-error' : '' }}">
			   <div class="col-md-3">
	                <label for="fechaNac">a: <span class="ico-r-cream"><span></label>
	            </div>
	            <div class="col-md-4">
	            	<div class="input-group">
						<span class="input-group-addon">
				            <span class="glyphicon glyphicon-time"></span>
				        </span>
					    <input type="time" class="form-control" id="horaF" name="horaF" value="{{ old('horaF', isset($citas) ? $cita->horaF : '') }}"/>
					</div>
	            </div>
			</div>
			<h1 class="label label-danger text-center">{{ $errors->first('horaF') }}</h1>
		</div>	
	</div>
</div>
<br>
<br>