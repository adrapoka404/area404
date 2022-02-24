<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('VendedorAdx') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-info/>
                <div class="px-6 py-4">
                    <input wire:model="search"  type="text" placeholder="impresion">
                     El Search:  {{$search}} y paginate {{$paginate}}
                     
                </div>
                
                @include('vendedores.partials.cajas')
            </div>
        </div>
    </div>
</x-app-layout>
