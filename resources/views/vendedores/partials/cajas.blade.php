@if ($productos->count() == 0)
<div class="px-6 py-4">
    {{__('No hay productos')}}
    <a href="{{route('productos.create')}}">Crea tu primer productos</a>
</div>
@else

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 justify-center items-center bg-blue-lightest">
@foreach ($productos as $producto)

    <div id="app" class="bg-white w-128 h-60 rounded shadow-md flex card text-grey-darkest m-5">
        <img class="w-1/2 h-full rounded-l-sm" src="https://bit.ly/2EApSiC" alt="Room Image">
        <div class="w-full flex flex-col">
            @if ($producto->patern_id > 0)
            <div class="p-4 pb-0 flex-1">
                <h3 class="font-light mb-1 text-grey-darkest">{{$producto->nombre}}</h3>
                <div class="text-xs flex items-center mb-4">
                    <i class="fas fa-map-marker-alt mr-1 text-grey-dark"></i>
                    Categoria {{$producto->categoria_id}}
                </div>
                <span class="text-2xl text-grey-darkest">$ {{ $producto->precio}}<small class="text-lg">/MXN </small></span>
                <div class="flex items-center mt-4">
                    <div class="pr-2 text-xs">
                        @if ($producto->estatus == 1)
                        <i class="fas fa-wifi text-green"></i> 
                            {{__('Disponible')}}
                        @endif
                    </div>
                </div>
            </div>
            <div class="bg-grey-lighter p-3 flex items-center justify-between transition hover:bg-grey-light">
                {!! Form::open(['route'=> 'vendedores.store']) !!}
                {!! Form::label('cant', __('Cant.'), ["class" => "text-xs"]) !!}
                {!! Form::hidden('nombre', $producto->nombre, []) !!}
                {!! Form::hidden('producto', $producto->id, []) !!}
                {!! Form::number('cantidad', 1, ["class" => " w-20"]) !!}
                <x-jet-button class="ml-4">
                    {{ __('Agregar') }}
                </x-jet-button>
                {!! Form::close() !!}
            </div>
            @else
            <div class="p-4 pb-0 flex-1">
                <h3 class="font-light mb-1 text-grey-darkest">{{$producto->nombre}}</h3>
                <div class="text-xs flex items-center mb-4">
                    <i class="fas fa-map-marker-alt mr-1 text-grey-dark"></i>
                    {{$producto->descripcion}}
                </div>
            </div>
            @endif
        </div>
    </div>
@endforeach
</div>
<div>$productos->links()
</div>
@endif