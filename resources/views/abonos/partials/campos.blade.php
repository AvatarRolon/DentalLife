<input type="hidden" name="_token" value="{{ csrf_token() }}">

<br>
<div class="row">
	<div class="form-group full-width">
		<div class="col-md-6">
			<div class="form-group {{ $errors->has('fecha') ? 'has-error' : '' }}">
			   <div class="col-md-4">
	                <label for="fechaAbono">Fecha: <span class="ico-r-cream"><span></label>
	            </div>
	            <div class="col-md-5">
	            	<div class="input-group date">
						<span class="input-group-addon">
				            <span class="glyphicon glyphicon-calendar"></span>
				        </span>
					    <input type="date" class="form-control" id="fecha" name="fecha" value="{{ $fechaActual->format('Y-m-d'), old('fecha', isset($abonos) ? $abonos->fecha : '') }}"/>
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
			<div class="form-group {{ $errors->has('serv') ? 'has-error' : '' }}">
			   <div class="col-md-4">
	                <label for="serv">Servicio: <span class="ico-r-cream"><span></label>
	            </div>
	            <div class="col-md-5">
					<input type="text" class="form-control" id="serv" name="serv" value="{{  old('serv', isset($abonos) ? $abonos->servicio_id : '') }}" />
	            </div>
			</div>
		</div>
		<h1 class="label label-danger text-center">{{ $errors->first('serv') }}</h1>
	</div>
</div>
<br>
<div class="row">
	<div class="form-group full-width">
		<div class="col-md-6">
			<div class="form-group {{ $errors->has('abono') ? 'has-error' : '' }}">
			   <div class="col-md-4">
	                <label for="abono">Abono: <span class="ico-r-cream"><span></label>
	            </div>
	            <div class="col-md-5">
	            	<div class="input-group ">
						<span class="input-group-addon">
				            <span class="glyphicon glyphicon-usd"></span>
				        </span>
					    <input type="text" class="form-control" id="abono" name="abono" value="{{  old('abono', isset($abonos) ? $abonos->cantidad : '') }}" placeholder="Cantidad del abono"/>
					</div>
	            </div>
			</div>
		</div>
		<h1 class="label label-danger text-center">{{ $errors->first('abono') }}</h1>
	</div>
</div>
<br>
<div class="row">
	<div class="form-group full-width">
		<div class="col-md-6">
			<div class="form-group {{ $errors->has('cuenta') ? 'has-error' : '' }}">
			   <div class="col-md-4">
	                <label for="cuenta">Estado de cuenta: <span class="ico-r-cream"><span></label>
	            </div>
	            <div class="col-md-5">
	            	<div class="input-group ">
						<span class="input-group-addon">
				            <span class="glyphicon glyphicon-usd"></span>
				        </span>
					    <input type="text" class="form-control" id="cuenta" name="cuenta" value="{{  old('cuenta', isset($abonos) ? $abonos->estadoCuenta_id : '') }}" placeholder="1000" readonly/>
					</div>
	            </div>
			</div>
		</div>
		<h1 class="label label-danger text-center">{{ $errors->first('cuenta') }}</h1>
	</div>
</div>
<br>