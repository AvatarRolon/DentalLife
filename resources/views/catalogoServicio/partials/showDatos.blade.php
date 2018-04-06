<div class="container-fluid spark-screen">
    <br>                     
    <div class="col-md-2"></div>
    <div class="col-md-8 list-group">
        <div class="row list-group-item">
            <div class="col-md-4">
                <b>Categoria:</b>
            </div>                    
            <div class="col-md-4">
                @foreach($categorias as $categoria)
                    @if ($servicio->categoriaServ_id == $categoria->id)
                    <span>{{$categoria->nombre}}</span>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="row list-group-item">
            <div class="col-md-4">
                <b>Nombre:</b>
            </div>
            <div class="col-md-4">                    
                <span>{{ $servicio->nombre }}</span>
            </div>
        </div>
        <div class="row list-group-item">
            <div class="col-md-4">
                <b>costo:</b>
            </div>
            <div class="col-md-4">
                <span>$</span> <span>{{$servicio->costo }}</span>
            </div>
        </div>
    </div>
</div>