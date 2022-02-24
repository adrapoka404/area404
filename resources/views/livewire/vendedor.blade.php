<div class="px-6 py-4">
    <x-jet-input wire:model="search" type="text" placeholder="{{ __('Escribe tu busqueda') }}" />
    @if ($productos->count() == 0)
        <x-empty />
    @else
        <x-caja>
            @foreach ($productos as $producto)
                <div class="bg-white w-128 h-60 rounded shadow-md flex card text-grey-darkest m-5">

                    <img class="w-1/2 h-full rounded-l-sm" src="https://bit.ly/2EApSiC" alt="{{ $producto->nombre }}">

                    <div class="w-full flex flex-col">
                        <div class="p-4 pb-0 flex-1 ">
                            <h3 class="font-light mb-1 text-grey-darkest">
                                {{ $producto->nombre }}
                            </h3>
                        </div>
                        <div class="text-2xl text-grey-darkest">
                            {{ $producto->precio }}
                            <small class="text-lg">/MXN </small>
                        </div>

                        <div
                            class="bg-grey-lighter p-3 flex items-center justify-between transition hover:bg-grey-light">
                            {!! Form::open(['route' => 'vendedores.store']) !!}
                            {!! Form::label('cant', __('Cant.'), ['class' => 'text-xs']) !!}
                            {!! Form::hidden('nombre', $producto->nombre, []) !!}
                            {!! Form::hidden('producto', $producto->id, []) !!}
                            {!! Form::number('cantidad', 1, ['class' => ' w-20']) !!}
                            <x-jet-button class="ml-4">
                                {{ __('Agregar') }}
                            </x-jet-button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            @endforeach
        </x-caja>
    @endif
</div>
