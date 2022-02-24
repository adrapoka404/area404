@if ($pcategorias->count() == 0)
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
            @foreach ($pcategorias as $pcategoria)
            <tr>
                <td>check</td>
                <td>{{$pcategoria->nombre}}</td>
                <td>
                    @if ($pcategoria->estatus == 0)
                        <span>{{__('Desactivado')}}</span>
                    @else
                        <span>{{__('Activo')}}</span>
                    @endif
                </td>
                <td>
                    <x-jet-button>
                        <a href="{{route('categorias.productos.edit', $pcategoria)}}">{{ __('Editar') }}</a>
                    </x-jet-button>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">
                    {{$pcategorias->links()}}
                </td>
            </tr>
        </tfoot>
    </table>
@endif