@if ($gcategorias->count() == 0)
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
            @foreach ($gcategorias as $gcategoria)
            <tr>
                <td>check</td>
                <td>{{$gcategoria->nombre}}</td>
                <td>
                    @if ($gcategoria->estatus == 0)
                        <span>{{__('Desactivado')}}</span>
                    @else
                        <span>{{__('Activo')}}</span>
                    @endif
                </td>
                <td>
                    <x-jet-button>
                        <a href="{{route('categorias.gastos.edit', $gcategoria)}}">{{ __('Editar') }}</a>
                    </x-jet-button>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">
                    {{$gcategorias->links()}}
                </td>
            </tr>
        </tfoot>
    </table>
@endif