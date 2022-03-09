<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card">
                    <x-info />
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        @include('ordenes.partials.table')
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
