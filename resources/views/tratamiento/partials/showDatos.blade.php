<div class="row">
	<div class="col-md-12">
		<div class="panel panel-info">
			<div class="panel-heading">
		    	<h3 class="panel-title">Datos personales del paciente</h3>
		  	</div>
		  	<div class="panel-body">
		  		<div class="col">
		  			<div class="col-md-6">
		  				<div class="col-md-3">
							<label for="paciente_id">Paciente: <span class="ico-r-cream"><span></label>
						</div>
						<div class="col-md-6">
							<input type="text" DISABLED class="form-control" value="{{$paciente[0]->nombre.' '.$paciente[0]->apPat.' '.$paciente[0]->apMat}}"/>
						</div>
		  			</div>
		  			<div class="col-md-6">
		  				<div class="col-md-4">
							<label for="paciente_id">Historia Clinica: <span class="ico-r-cream"><span></label>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="1" DISABLED/>
						</div>
		  			</div>
		  		</div>
		  	</div>
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-info">
			<div class="panel-heading">
		    	<h3 class="panel-title">Datos del tratamiento</h3>
		  	</div>
		  	<div class="panel-body">
		  		<div class="col">
		  			<div class="col-md-12">
						<table class="table table-bordered" id="id_tabla">
						  <thead>
						    <tr>
						      	<th class="text-center bgTh " >Descripción</th>
			                    <th class="text-center bgTh " >Fecha de inicio</th>
			                    <th class="text-center bgTh " >Fecha final</th>
			                    <th class="text-center bgTh " >Estado</th>
						    </tr>
						  </thead>
						  <tbody id="tbody">
						  	@foreach($servicios as $servicios)
						  		<tr>
							  		<td>{{$servicios['descripcion']}}</td>
							  		<td>{{$servicios['fechaI']}}</td>
							  		<td>{{$servicios['fechaF']}}</td>
							  		<td>{{$servicios['estado']}}</td>
						  		</tr>
						  	@endforeach
						  </tbody>
						</table>
					</div>
					<div class="col-md-12 text-right">
						<div class="col-md-10">
					    	<label><b>Total: </b></label>
						</div>
						<div class="input-group col-md-2">
							<span class="input-group-addon">$</span>
						    <input type="text" DISABLED class="form-control" value="{{$total[0]->total}}"/>
						</div>
					</div>
		  		</div>
		  	</div>
		</div>
	</div>
</div>


