<div class="p-6 sm:px-20 bg-white border-b border-gray-200 md:flex">
    <div class="mx-auto md:w-1/3">
        <x-jet-application-logo class="block w-auto" />
    </div>

    <div class="md:w-2/3 text-2xl mx-3 text-orange-500 text-center md:text-left">
        {{__('Bienvenido a tu espacio en Área 404')}}
        <div class=" text-yellow-500 text-justify md:text-sm     lg:text-lg mt-3">
            Como usuario de $site dentro de Área 404, tendrás el honor de alimentar la plataforma con tu valioso servicio.
            Realiza un ingreso o un gasto para que inicie la magia.
            Si tienes alguna duda, dejanos <a href="#" class=" text-indigo-500">guiarte</a>
        </div>
    </div>

    
    <x-info />
</div>

<div class="bg-gradient-to-t from-orange-500 to-yellow-500 bg-opacity-25 grid grid-cols-1 md:grid-cols-3 text-center">
    
    <div class="p-6">
        <div class="text-2xl text-white">
            <a href="{{route('vendedores.index')}}" class="shadow-lg shadow-yellow-500 rounded-md bg-transparent px-10">Ventas</a>
        </div>
    </div>
    <div class="p-6">
        <div class="text-2xl text-white">
           <a href="#" class="shadow-lg shadow-yellow-500 rounded-md bg-transparent px-10">Abrir almacen</a> 
        </div>
    </div>
    <div class="p-6">
        <div class="text-2xl text-white">
            <a href="{{route('vendedores.vgastos')}}" class="shadow-lg shadow-yellow-500 rounded-md bg-transparent px-10">Gastos</a>
        </div>
    </div>
</div>
