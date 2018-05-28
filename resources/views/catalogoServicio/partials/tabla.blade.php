<!--Filtra los servicios-->
<div class="col-md-4 pull-right">
    <div class="input-group"> <span class="input-group-addon">Busqueda  <i class="glyphicon glyphicon-search"></i></span>
        <input id="entradafilter" type="text" class="form-control" placeholder="Nombre del servicio" >
    </div>
</div>
<br>
<br>
<!--Contenido de las tablas-->
@isset($catalogo)
    @for ($i = 0; $i < count($catalogo); $i++)
        <h2 style="text-align:center;color:#407A62;">{{$catalogo[$i]['categoria']}}</h2>
        <table class="table table-bordered table-striped" id="">
            <thead>
                <tr>
                    <th class="text-center bg-info">Servicio</th>
                    <th class="text-center bg-info">Costo</th>
                    <th class="text-center bg-info">Opciones</th>
                </tr>
        </thead>
        <tbody class="contenidobusqueda">
                @for($j = 0; $j < count($catalogo[$i]['serv']); $j++)
                    <tr>
                        <td class="text-center">{{$catalogo[$i]['serv'][$j]['nombre']}}</td>
                        <td class="text-center">$ {{$catalogo[$i]['serv'][$j]['costo']}}</td>
                        <td class="text-center">
                            <form class="delete{{$catalogo[$i]['serv'][$j]['id']}}" method="POST" action="{{ url('catalogoServicio/'.$catalogo[$i]['serv'][$j]['id'])}}">
                                <input name="_method" type="hidden" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <a href="{{ url('catalogoServicio/'.$catalogo[$i]['serv'][$j]['id']) }}"><i class="ico-cream ico-b-cream fa fa-eye" data-toggle="tooltip" title="Ver servicio"></i></a>

                                <a href="{{ url('catalogoServicio/'.$catalogo[$i]['serv'][$j]['id'].'/edit ') }}"><i class="ico-cream ico-b-cream fa fa-edit" data-toggle="tooltip" title="Editar servicio"></i></a>
                                <button type="submit" class="eliminar" id="{{$catalogo[$i]['serv'][$j]['id']}}">
                                    <a><i class="ico-cream ico-r-cream fa fa-trash" data-toggle="tooltip" title="Borrar paciente"></i></a>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
    @endfor
@endisset