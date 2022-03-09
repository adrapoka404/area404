<div class="pointer-events-auto">
    <div class="flex h-full flex-col  bg-white shadow-xl">
        <div class="flex-1 overflow-y-auto py-6 px-4 sm:px-6">
            <div class="mt-8">
                <div class="flow-root">
                    <ul role="list" class="-my-6 divide-y divide-gray-200">
                        @foreach ($orden['detalle'] as $id => $producto)
                            <li class="flex py-6 shadow-md shadow-orange-300 rounded-md my-2">
                                <div
                                    class=" h-10 w-10 sm:w-32 sm:h-32 flex-shrink-0 overflow-hidden border-r-2 border-orange-300 rounded-md ml-3">
                                    <img src="{{asset('imgs/generic/'. $producto['imagen'])}}" alt="{{ $producto['nombre'] }}" class="h-full w-full object-cover object-center">

                                </div>

                                <div class="ml-4 flex flex-1 flex-col">
                                    <div>
                                        <div class="flex justify-between text-2xl md:text-base font-semibold text-orange-500">
                                            <h3>
                                                <a href="#"> {{ $producto['nombre'] }} </a>
                                            </h3>
                                            <p class="ml-4 mr-5">{{ $producto['st'] }}</p>
                                        </div>
                                        <p class="mt-1 text-sm text-yellow-500">
                                            {{ __('$: ') }}{{ $producto['precio'] }}
                                        </p>
                                    </div>
                                    <div class="flex items-end justify-between text-sm">
                                        <p class="mt-1 text-sm text-yellow-500">{{ __('Cant: ') }}
                                            {{ $producto['cantidad'] }}</p>

                                        <div class="flex">
                                            <a href="{{ route('ordenes.edit', $id) }}"
                                                class="font-medium text-blue-400 hover:text-indigo-500 mr-5">{{ __('Quitar') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                        <!-- More products... -->
                    </ul>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-200 py-6 px-4 sm:px-6">
            <div class="flex justify-between text-base font-semibold text-orange-500">
                <p>{{ __('Subtotal:') }}</p>
                <p class="mr-5 font-extrabold text-2xl">{{ $orden['ftotal'] }}</p>
            </div>
            <p class="mt-0.5 text-sm text-yellow-500">{{ __('En caso de requerir envío, ya es su pedo') }}</p>
            <div class="mt-6">
                <a href="{{ route('ordenes.confirma') }}" class="flex items-center justify-center rounded-md border border-transparent bg-blue-300 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-blue-500">{{ __('Pagar') }}</a>
            </div>
            <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                <p>
                    {{ __('o') }} 
                    <a href="{{ route('vendedores.index') }}" class="font-medium text-indigo-600 hover:text-indigo-500">{{ __('Continuar venta') }}
                        <span aria-hidden="true"> &rarr;</span>
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
