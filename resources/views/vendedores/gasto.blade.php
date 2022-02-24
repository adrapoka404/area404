<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ingresar un gasto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card">
                    <x-jet-validation-errors class="mb-4" />
                    <div class="card-body">
                        {!! Form::open(['route'=> 'vendedores.vgstore']) !!}
                            @include('vendedores.partials.gastosform')
                            <div class="flex items-center justify-end mt-4">
                                <x-jet-danger-button>
                                    <a href="{{route('dashboard')}}">{{__('Cancelar')}}</a>
                                </x-jet-danger-button>
                                <x-jet-button class="ml-4">
                                    {{ __('Crear') }}
                                </x-jet-button>
                            </div>
                        {!! Form::close() !!}
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
