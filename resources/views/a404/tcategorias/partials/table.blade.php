@if ($tcategorias->count() == 0)
    <strong>{{__('No existen registros.')}} </strong> {{__('Crea algunos y ve como sucede la magia!!')}}</strong>
@else
    <table>
        <thead>
            <tr>
                <th>{{__('Check')}}</th>
                <th>{{__('Nombre')}}</th>
                <th>{{__('Estado')}}</th>
                <th>{{__('Acciones')}}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tcategorias as $tcategoria)
            <tr>
                <td>check</td>
                <td>{{$tcategoria->nombre}}</td>
                <td>
                    @if ($tcategoria->estatus == 0)
                        <span>{{__('Desactivado')}}</span>
                    @else
                        <span>{{__('Activo')}}</span>
                    @endif
                </td>
                <td>
                    <x-jet-button>
                        <a href="{{route('categorias.tiendas.edit', $tcategoria)}}">{{ __('Editar') }}</a>
                    </x-jet-button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endif