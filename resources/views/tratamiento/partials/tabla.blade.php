@isset($tratamientos)
    @foreach($tratamientos as $tratamientos)
        <table class="table table-bordered table-striped" id="">
            <thead>
                <tr>
                    <th class="text-center bg-info">Paciente</th>
                    <th class="text-center bg-info">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">
                        <i class="glyphicon glyphicon-user"></i>  {{$tratamientos['paciente']}}
                    </td>
                    <td class="text-center">
                        <form class="delete{{$tratamientos['id']}}" method="POST" action="{{ url('tratamientos/'.$tratamientos['id'])}}">
                            <input name="_method" type="hidden" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <a href="{{ url('tratamientos/'.$tratamientos['id']) }}"><i class="ico-cream ico-b-cream fa fa-eye" data-toggle="tooltip" title="Ver tratamiento"></i></a>

                            <a href="{{ url('tratamientos/'.$tratamientos['id'].'/edit ') }}"><i class="ico-cream ico-b-cream fa fa-edit" data-toggle="tooltip" title="Editar tratamiento"></i></a>

                            <button type="submit" class="eliminarT" id="{{$tratamientos['id']}}">
                                <a><i class="ico-cream ico-r-cream fa fa-trash" data-toggle="tooltip" title="Borrar tratamiento"></i></a>
                            </button>
                        </form>   
                    </td>              
                </tr>
            </tbody>
        </table>
    @endforeach
@endisset