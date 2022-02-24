@if ($productos->count() == 0)
    <strong>{{ __('No existen registros.') }} </strong> {{ __('Crea algunos y ve como sucede la magia!!') }}</strong>
@else
    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Tienda</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>{{ $producto->tienda_id }}</td>
                    <td>{{ $producto->estatus }}</td>
                    <td>
                        <x-jet-button>
                            <a href="{{ route('productos.edit', $producto) }}">{{ __('Editar') }}</a>
                        </x-jet-button>

                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">{{$productos->links()}}</td>
            </tr>
        </tfoot>
    </table>
@endif
