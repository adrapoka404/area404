<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div>
        <x-jet-application-logo class="block h-12 w-auto" />
    </div>

    <div class="mt-8 text-2xl">
        {{__('Bienvenido a tu espacio en Área 404')}}
    </div>

    <div class="mt-6 text-gray-500">
        Como usuario de $site dentro de Área 404, tendrás el honor de alimentar la plataforma con tu valioso servicio.
        Realiza un ingreso o un gasto para que inicie la magia.
        Si tienes alguna duda, dejanos <a href="#" class=" text-indigo-500">guiarte</a>
    </div>
    <x-info />
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-3 text-center">
    
    <div class="p-6">
        <div class="ml-12 bg-red-100">
            <a href="{{route('vendedores.index')}}">Ventas</a>
        </div>
    </div>
    <div class="p-6">
        <div class="ml-12">
            Abrir almacen
        </div>
    </div>
    <div class="p-6">
        <div class="ml-12 bg-red-100">
            <a href="{{route('vendedores.vgastos')}}">Gastos</a>
        </div>
    </div>
</div>
