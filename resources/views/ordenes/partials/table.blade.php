<div class="pointer-events-auto w-screen max-w-md">
    <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
        <div class="flex-1 overflow-y-auto py-6 px-4 sm:px-6">
            <div class="mt-8">
                <div class="flow-root">
                    <ul role="list" class="-my-6 divide-y divide-gray-200">
                        @foreach ($orden['detalle'] as $id => $producto)
                            <li class="flex py-6">
                                <div
                                    class=" h-10 w-10 sm:w-32 sm:h-32 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                    <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg"
                                        alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt."
                                        class="h-full w-full object-cover object-center">
                                </div>

                                <div class="ml-4 flex flex-1 flex-col">
                                    <div>
                                        <div class="flex justify-between text-base font-medium text-gray-900">
                                            <h3>
                                                <a href="#"> {{ $producto['nombre'] }} </a>
                                            </h3>
                                            <p class="ml-4">{{ $producto['st'] }}</p>
                                        </div>
                                        <p class="mt-1 text-sm text-gray-500">
                                            {{ __('Precio: ') }}{{ $producto['precio'] }}
                                        </p>
                                    </div>
                                    <div class="flex flex-1 items-end justify-between text-sm">
                                        <p class="text-gray-500">{{ __('Cant: ') }}
                                            {{ $producto['cantidad'] }}</p>

                                        <div class="flex">
                                            <a href="{{ route('ordenes.edit', $id) }}"
                                                class="font-medium text-indigo-600 hover:text-indigo-500">{{ __('Quitar') }}</a>
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
            <div class="flex justify-between text-base font-medium text-gray-900">
                <p>{{ __('Subtotal:') }}</p>
                <p>{{ $orden['ftotal'] }}</p>
            </div>
            <p class="mt-0.5 text-sm text-gray-500">{{ __('En caso de reuqerir envio ya es su pedo') }}</p>
            <div class="mt-6">
                <a href="#" class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">{{ __('Pagar') }}</a>
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
