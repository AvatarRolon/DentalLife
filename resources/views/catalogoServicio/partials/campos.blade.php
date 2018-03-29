<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="row">
	<div class="form-group full-width">
		<div class="col-md-6">
			<div class="form-group {{ $errors->has('categoriaServ_id') ? 'has-error' : '' }}">
			   <div class="col-md-6">
	                <label for="categoriaServ_id">Categorias del servicio: <span class="ico-r-cream"><span></label>
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
		<h1 class="label label-danger text-center">{{ $errors->first('categoriaServ_id') }}</h1>
	</div>
</div>
<br>
<div class="row">
	<div class="form-group full-width">
		<div class="col-md-6">
			<div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
			   <div class="col-md-6">
	                <label for="fechaNac">Nombre del servicio: <span class="ico-r-cream"><span></label>
	            </div>
	            <div class="col-md-6">
	            	<input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', isset($servicios) ? $servicios->nombre : '') }}"/>
	            </div>
			</div>
		</div>
		<h1 class="label label-danger text-center">{{ $errors->first('nombre') }}</h1>
	</div>
</div>
<br>
<div class="row">
	<div class="form-group full-width">
		<div class="col-md-6">
			<div class="form-group {{ $errors->has('costo') ? 'has-error' : '' }}">
			   <div class="col-md-6">
	                <label for="fechaNac">Costo del servicio: <span class="ico-r-cream"><span></label>
	            </div>
	            <div class="col-md-6">
	            	<div class="input-group">
						<span class="input-group-addon">$</span>
					    <input type="text" class="form-control" id="costo" name="costo" value="{{ old('costo', isset($servicios) ? $servicios->costo : '') }}"/>
					</div>
	            </div>
			</div>
		</div>
		<h1 class="label label-danger text-center">{{ $errors->first('costo') }}</h1>
	</div>
</div>	