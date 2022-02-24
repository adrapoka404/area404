@if ($tiendas->count() == 0)
    <strong>{{ __('No existen registros.') }} </strong> {{ __('Crea algunos y ve como sucede la magia!!') }}</strong>
@else
    <table>
        <thead>
            <tr>
                <th>{{ __('check') }}</th>
                <th>{{ __('Nombre') }}</th>
                <th>{{ __('Representante') }}</th>
                <th>{{ __('Estado') }}</th>
                <th>{{ __('Acciones') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tiendas as $tienda)
                <tr>
                    <td>check</td>
                    <td>{{ $tienda->nombre }}</td>
                    <td>{{ $tienda->user_id }}</td>
                    <td>
                        @if ($tienda->estatus == 0)
                            <span>{{__('Desactivado')}}</span>
                        @else
                            <span>{{__('Activo')}}</span>
                        @endif
                    </td>
                    <td>
                        <x-jet-button>
                            <a href="{{ route('tiendas.edit', $tienda) }}">{{ __('Editar') }}</a>
                        </x-jet-button>

                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">{{ $tiendas->links() }}</td>
            </tr>
        </tfoot>
    </table>
@endif
