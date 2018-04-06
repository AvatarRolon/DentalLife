<!-- Modal -->
<form action="/categoriaServicio/" method="POST" role="form" id="nuevaCategoria">
	<input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"></input>
	<div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog">
	     	<div class="modal-content">
		        <div class="modal-header" style="background-color: #20B2AA !important; color: white;">
                <button type="button" class="close" data-dismiss="modal" style="color: white !important;">&times;</button>
                <h4 class="modal-tite"><i class="glyphicon glyphicon-pencil"></i>  Registrar una nueva categoria de los servicios</h4>
            	</div>
		        <div lass="modal-body" name="labels" id="labels">
		        	<br>
		        	<div class="row">
						<div class="form-group full-width">
							<div class="col-md-12">
								<div class="form-group {{ $errors->has('nombreCategoria') ? 'has-error' : '' }}">
								   <div class="col-md-4">
						                <label for="fechaNac">Nombre de la categoria: <span class="ico-r-cream"><span></label>
						            </div>
						            <div class="col-md-5">
						            	<input type="text" class="form-control" id="nombreCategoria" name="nombreCategoria" value="{{ old('nombreCategoria') }}"/>
						            </div>
								</div>
							</div>
							<div class="col-md-2">
								<h1 class="label label-danger text-center">{{ $errors->first('nombreCategoria') }}</h1>
							</div>
						</div>								
					</div>
					<br>
		        </div> <!--modal-body-->
		        <div class="modal-footer">
					<div class="col-md-12 text-right">
						<button type="submit" class="btn btn-primary " id="id_create"><i class="glyphicon glyphicon-save"></i> Guardar </button>
						<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Cerrar</button> 								
					</div>							  
		        </div> <!--modal-footer-->
	     	</div><!-- Modal content-->
   		</div> <!--modal-dialog-->
	</div><!--/Modal-->
</form> <!--id_fundamentos-->