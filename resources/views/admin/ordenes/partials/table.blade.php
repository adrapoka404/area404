<div class="text-orange-500 mx-5 my-5">
    <div
        class="hidden md:grid md:grid-cols-7 text-xl font-semibold gradient-to-t bg-gradient-to-t from-orange-500 to-yellow-500 bg-opacity-25 text-white text-center ">
        <div class=" mx-1">Folio</div>
        <div class=" mx-1">Fecha</div>
        <div class=" mx-1">Vendedor</div>
        <div class=" mx-1">Tienda</div>
        <div class=" mx-1">Total</div>
        <div class=" mx-1">Estado</div>
        <div class=" mx-1">Acciones</div>
    </div>

    @foreach ($ordenes as $orden)
        <div class="grid grid-rows-6 md:hidden shadow-md shadow-yellow-500 my-5 rounded-md">
            <div class=" grid grid-cols-2 border-b border-white pt-3">
                <div class="bg-gradient-to-r from-orange-500 to-yellow-500 bg-opacity-25 text-white px-5 text-xl mx-3 text-right rounded-md" >
                    Folio: </div>
                <div class="bg-white text-sm text-left border-b border-orange-500 px-5 mx-3">
                    {{ $orden->folio }}
                </div>
            </div>
            <div class=" grid grid-cols-2 border-b border-white pt-3">
                <div class="bg-gradient-to-r from-orange-500 to-yellow-500 bg-opacity-25 text-white px-5 text-xl mx-3 text-right rounded-md">
                    Fecha: </div>
                    <div class="bg-white text-sm text-left border-b border-orange-500 px-5 mx-3">
                    {{ $orden->created_at }}
                </div>
            </div>
            <div class=" grid grid-cols-2 border-b border-white pt-3">
                <div class="bg-gradient-to-r from-orange-500 to-yellow-500 bg-opacity-25 text-white px-5 text-xl mx-3 text-right  rounded-md">
                    Vendedor: </div>
                    <div class="bg-white text-sm text-left border-b border-orange-500 px-5 mx-3">
                    {{ $orden->user_id }}
                </div>
            </div>
            <div class=" grid grid-cols-2 border-b border-white pt-3">
                <div class="bg-gradient-to-r from-orange-500 to-yellow-500 bg-opacity-25 text-white px-5 text-xl mx-3 text-right rounded-md">
                    Tienda: </div>
                    <div class="bg-white text-sm text-left border-b border-orange-500 px-5 mx-3">
                    {{ $orden->tienda_id }}
                </div>
            </div>
            <div class=" grid grid-cols-2 border-b border-white pt-3">
                <div class="bg-gradient-to-r from-orange-500 to-yellow-500 bg-opacity-25 text-white px-5 text-xl mx-3 text-right rounded-md">
                    Total: </div>
                    <div class="bg-white text-sm text-left border-b border-orange-500 px-5 mx-3">
                    {{ $orden->total }}
                </div>
            </div>
            <div class=" grid grid-cols-2 border-b border-white pt-3">
                <div class="bg-gradient-to-r from-orange-500 to-yellow-500 bg-opacity-25 text-white px-5 text-xl mx-3 text-right rounded-md">
                    Estado: </div>
                    <div class="bg-white text-sm text-left border-b border-orange-500 px-5 mx-3">
                    {{ $orden->estatus }}
                </div>
            </div>
                <div class="w-full md:hidden py-2 mx-auto text-center">
                    <x-jet-secondary-button>
                        Detalle orden {{ $orden->folio }}
                    </x-jet-secondary-button>
                </div>
            </div>
            <div class="hidden md:grid md:grid-cols-7 my-auto border-b mt-2 border-yellow-500 text-right">
                <div>{{ $orden->folio }}</div>
                <div>{{ $orden->created_at }}</div>
                <div>{{ $orden->user_id }}</div>
                <div>{{ $orden->tienda_id }}</div>
                <div>{{ $orden->total }}</div>
                <div>{{ $orden->estatus }}</div>
                <div>
                    <x-jet-secondary-button>Detalle</x-jet-secondary-button>
                </div>
            </div>
    @endforeach

</div>
<div class="table-footer">
    {{ $ordenes->links() }}
</div>
