<input type="hidden" name="_token" value="{{ csrf_token() }}">

<br>
<div class="row">
	<div class="form-group full-width">
		<div class="col-md-7">
			<div class="form-group {{ $errors->has('categoriaServ_id') ? 'has-error' : '' }}">
			   <div class="col-md-5">
	                <label for="categoriaServ_id">Categoria del servicio: <span class="ico-r-cream"><span></label>
	            </div>
	            <div class="col-md-5">
	            	<select class="form-control" id="categoriaServ_id" name="categoriaServ_id">
			    		<option value="">Seleccionar...</option>
			    		@foreach($categorias as $categoria)
				    		<option value="{{ $categoria->id }}" @if(old('categoriaServ_id', isset($servicios) ? $servicios->categoriaServ_id : '') == $categoria->id) {{ 'selected' }} @endif>{{ $categoria->nombre }}</option>
				    	@endforeach
		    		</select>
	            </div>
	            <div class="col-md-2">
	            	<!-- Button trigger modal -->
					<button type="button" class="btn btn-info" style="background-color: #59BBB6;" id="categoria" data-toggle="modal" data-target="#myModal">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
               			Agregar categoria
					</button>
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
	            	<input type="text" class="form-control" placeholder="Nombre del servicio" id="nombre" name="nombre" value="{{ old('nombre', isset($servicios) ? $servicios->nombre : '') }}"/>
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
					    <input type="text" class="form-control" placeholder="Costo del servicio" id="costo" name="costo" value="{{ old('costo', isset($servicios) ? $servicios->costo : '') }}"/>
					</div>
	            </div>
			</div>
		</div>
		<h1 class="label label-danger text-center">{{ $errors->first('costo') }}</h1>
	</div>
	<br>
	<br>
</div>	