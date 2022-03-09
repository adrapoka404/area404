<div class="px-6 py-4">
    <x-jet-input wire:model="search" type="text" placeholder="{{ __('Escribe tu busqueda') }}" />
    @if ($productos->count() == 0)
        <x-empty />
    @else
        <x-caja>
            @foreach ($productos as $producto)
                <div class="bg-white w-128 h-60 rounded shadow-lg flex card text-grey-darkest m-5 shadow-yellow-500">

                    <div class="w-1/2 h-full rounded-l-sm bg-center bg-no-repeat bg-contain" style="background-image:url('{{asset('imgs/generic/'.$producto->imagen)}}')" ></div>
                    

                    <div class="w-full flex flex-col text-orange-500 font-semibold">
                        <div class="w-28 mx-auto h-32">
                            <h3 class="font-light mb-1 text-grey-darkest">
                                {{ $producto->nombre }}
                            </h3>
                            <div class="text-2xl text-grey-darkest text-center py-2">
                                {{ $producto->precio }}
                                <small class="text-lg">/MXN </small>
                            </div>
                        </div>
                        <div class="bg-grey-lighter h-28 p-2 flex items-center justify-between transition hover:bg-grey-light">
                            {!! Form::open(['route' => 'vendedores.store']) !!}
                            {!! Form::label('cant', __('Cant.'), ['class' => 'text-xs']) !!}
                            {!! Form::hidden('nombre', $producto->nombre, []) !!}
                            {!! Form::hidden('producto', $producto->id, []) !!}
                            {!! Form::number('cantidad', 1, ['class' => 'w-20 border-orange-500 focus:border-yellow-500 focus:ring focus:ring-orange-300 focus:ring-opacity-50 rounded-md shadow-sm']) !!}
                            <button class="  bg-white hover:bg-green-500 w-full my-2 py-2 rounded-md border-b-2  border-green-500 text-green-500 hover:text-white">
                                {{ __('Agregar') }}
                            </button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            @endforeach
        </x-caja>
    @endif
</div>
