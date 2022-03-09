<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card">
                    <x-jet-validation-errors class="mb-4" />
                    <div class="card-body">
                        {!! Form::open(['route'=> 'categorias.gastos.store']) !!}
                            @include('a404.gcategorias.partials.form')
                            <div class="flex items-center justify-end mt-4">
                                <x-jet-danger-button>
                                    <a href="{{route('categorias.gastos.index')}}">{{__('Cancelar')}}</a>
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
