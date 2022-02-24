@if ($gastos->count() == 0)
    <strong>{{ __('No existen registros.') }} </strong> {{ __('Crea algunos y ve como sucede la magia!!') }}</strong>
@else
    <table>
        <thead>
            <tr>
                <th>Gasto</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gastos as $gasto)
                <tr>
                    <td>{{ $gasto->nombre }}</td>
                    <td>{{ $gasto->precio }}</td>
                    <td>
                        <x-jet-button>
                            <a href="{{ route('gastos.edit', $gasto) }}">{{ __('Editar') }}</a>
                        </x-jet-button>

                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">{{$gastos->links()}}</td>
            </tr>
        </tfoot>
    </table>
@endif
