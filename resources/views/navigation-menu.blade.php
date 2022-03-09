<nav x-data="{ open: false }" class="bg-white">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex sm:flex-wrap justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="mx-auto shrink-0 flex items-center w-80 bg-gradient-to-r bg-clip-text text-transparent from-orange-500 to-yellow-500">                    
                    <a href="{{ route('dashboard') }}" class="tracking-wide mx-auto font-extrabold bg-clip-text bg-transparent text-5xl">
                        Área 404
                    </a>
                </div>
            </div>

            <div class="hidden sm:mx-auto md:mx-0 mt-5 sm:flex sm:items-center sm:ml-6">
                <!-- Menu para el SUDO -->
                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="60">
                        <x-slot name="trigger">
                            <span class="inline-flex rounded-md">
                                <x-btnmenu :active="request()->routeIs('vendedores.*')">
                                    {{__('Vendedor')}}
                                </x-btnmenu>
                            </span>
                        </x-slot>

                        <x-slot name="content">
                            <div class="w-60">
                                <!-- Productos -->
                                <div class="block px-4 py-2 text-xs text-yellow-500">
                                    {{ __('Opciones del vendedor') }}
                                </div>

                                <!-- Team Settings -->
                                <x-jet-dropdown-link href="{{ route('vendedores.index') }}">
                                    {{ __('Ventas') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('dashboard') }}">
                                    {{ __('Almacen') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('vendedores.vgastos') }}">
                                    {{ __('Gastos') }}
                                </x-jet-dropdown-link>
                            </div>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="60">
                        <x-slot name="trigger">
                            <span class="inline-flex rounded-md">
                                <x-btnmenu :active="request()->routeIs('admin.*')">
                                    {{__('Admin')}}
                                </x-btnmenu>
                            </span>
                        </x-slot>

                        <x-slot name="content">
                            <div class="w-60">
                                <!-- Productos -->
                                <div class="block px-4 py-2 text-xs text-yellow-500">
                                    {{ __('Opciones del administrador') }}
                                </div>

                                <!-- Team Settings -->
                                <x-jet-dropdown-link href="{{ route('admin.ordenes') }}">
                                    {{ __('Ordenes') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('dashboard') }}">
                                    {{ __('Almacen') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('vendedores.vgastos') }}">
                                    {{ __('Gastos') }}
                                </x-jet-dropdown-link>
                            </div>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="60">
                        <x-slot name="trigger">
                            <span class="inline-flex rounded-md">
                                <x-btnmenu :active="request()->routeIs('categorias.*')">
                                    {{__('Categorías')}}
                                </x-btnmenu>
                                
                            </span>
                        </x-slot>

                        <x-slot name="content">
                            <div class="w-60">
                                <!-- Productos -->
                                <div class="block px-4 py-2 text-xs text-yellow-500">
                                    {{ __('Catálogos existentes') }}
                                </div>

                                <!-- Team Settings -->
                                <x-jet-dropdown-link href="{{ route('categorias.tiendas.index') }}">
                                    {{ __('Categoria de tiendas') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('categorias.productos.index') }}">
                                    {{ __('Categorias de productos') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('categorias.gastos.index') }}">
                                    {{ __('Categorias de gastos') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('tiendas.index') }}">
                                    {{ __('Tiendas') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('productos.index') }}">
                                    {{ __('Productos') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('gastos.index') }}">
                                    {{ __('Gastos') }}
                                </x-jet-dropdown-link>
                            </div>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
                <!-- / Menu para el SUDo-->
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ml-3 relative">
                        <x-jet-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <x-btnmenu :active="request()->routeIs('teams.*')">
                                        {{ Auth::user()->currentTeam->name }}
                                    </x-btnmenu>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-yellow-500">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-jet-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-jet-dropdown-link>
                                    @endcan

                                    <div class="border-t border-gray-100"></div>

                                    <!-- Team Switcher -->
                                    <div class="sm:text-right md:text-left block px-4 py-2 text-xs text-yellow-500">
                                        {{ __('Switch Teams') }}
                                    </div>

                                    @foreach (Auth::user()->allTeams() as $team)
                                        <x-jet-switchable-team :team="$team" />
                                    @endforeach
                                </div>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                @endif
                <!--para el carrito -->
                @if (session('orden'))
                <div class="ml-3 fixed md:top-32 lg:top-20 right-10">
                    <x-jet-dropdown align="right" width="60">
                        <x-slot name="trigger">
                            <span class="inline-flex rounded-full">
                                <x-btncart :active="request()->routeIs('ordenes.*')">
                                    {{__('Carrito')}}
                                </x-btncart>
                            </span>
                        </x-slot>

                        <x-slot name="content">
                            <div class=" w-96">
                                <!-- Productos -->
                                <div class="block px-4 py-2 text-xs text-yellow-500">
                                    {{ __('Productos en tu carrito') }}
                                </div>

                                <!-- Team Settings -->
                                
                                @foreach (session('orden.detalle') as $item)
                                
                                    <div class="block px-4 py-2 text-xs text-orange-500 border-t border-gray-100">
                                    <strong class="text-orange-500">{{$item['nombre']}}</strong>
                                    <small class=" font-semibold text-yellow-500">({{$item['precio']}} x 
                                        {{$item['cantidad']}}   )</small>
                                    <span class=" text-right">{{$item['st']}} </span>
                                    
                                </div>
                                    @endforeach
                                
                                <div class="cart-footer text-right font-semibold text-white bg-gradient-to-r from-white to-green-500">
                                    {{session('orden.ftotal')}}
                                </div>
                                <x-jet-dropdown-link href="{{ route('ordenes.confirma') }}" class="text-center ">
                                    {{__('Pagar')}}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('ordenes.index') }}" class="text-center ">
                                    {{__('Carrito')}}
                                </x-jet-dropdown-link>
                                
                            </div>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
                @endif
                <!--para el carrito -->
                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-16 w-16" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-jet-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-jet-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-jet-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-jet-responsive-nav-link>
                </form>
                <!--para el carrito -->
                @if (session('orden'))
                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="60">
                        <x-slot name="trigger">
                            <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                    {{__('Carrito')}}

                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </span>
                        </x-slot>

                        <x-slot name="content">
                            <div class="w-60">
                                <!-- Productos -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Productos en tu carrito') }}
                                </div>

                                <!-- Team Settings -->
                                
                                @foreach (session('orden.detalle') as $item)
                                <div > 
                                <strong>{{$item['nombre']}}</strong>
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{$item['precio']}} x 
                                    {{$item['cantidad']}} 
                                    
                                </div>
                                </div>
                                    @endforeach
                                
                                <div class="cart-footer text-green-500">
                                    {{session('orden.ftotal')}}
                                </div>
                                <x-jet-dropdown-link href="{{ route('categorias.tiendas.index') }}">
                                    {{__('Pagar')}}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('ordenes.index') }}">
                                    {{__('Carrito')}}
                                </x-jet-dropdown-link>
                                
                            </div>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
                @endif
                
                <!--para el carrito -->
                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                        {{ __('Team Settings') }}
                    </x-jet-responsive-nav-link>

                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <x-jet-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                            {{ __('Create New Team') }}
                        </x-jet-responsive-nav-link>
                    @endcan

                    <div class="border-t border-gray-200"></div>

                    <!-- Team Switcher -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Switch Teams') }}
                    </div>

                    @foreach (Auth::user()->allTeams() as $team)
                        <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</nav>
