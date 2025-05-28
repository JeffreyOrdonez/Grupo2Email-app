<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 dark:bg-gray-900 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <!-- Card 1: Total de ciudades -->
                <div class="w-80 h-40 bg-gradient-to-r from-blue-500 to-blue-700 dark:from-blue-700 dark:to-blue-900 shadow-lg rounded-xl p-6 flex items-center">
                    <div class="flex-shrink-0 bg-blue-600 rounded-full p-3 mr-4 flex items-center justify-center text-4xl">
                        🏢
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-white mb-1">Total de ciudades</h3>
                        <p class="text-3xl font-extrabold text-white">{{ $totalciudades }}</p>
                    </div>
                </div>
                <!-- Card 2: Total de ciudadanos -->
                <div class="w-80 h-40 bg-gradient-to-r from-green-500 to-green-700 dark:from-green-700 dark:to-green-900 shadow-lg rounded-xl p-6 flex items-center">
                    <div class="flex-shrink-0 bg-green-600 rounded-full p-3 mr-4 flex items-center justify-center text-4xl">
                        👥
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-white mb-1">Total de ciudadanos</h3>
                        <p class="text-3xl font-extrabold text-white">{{ $totalciudadanos }}</p>
                    </div>
                </div>
                <!-- Card 3: Ciudadanos por ciudad -->
                <div class="bg-gradient-to-r from-purple-500 to-purple-700 dark:from-purple-700 dark:to-purple-900 shadow-lg rounded-xl p-6 flex flex-col md:col-span-2">
                    <h3 class="text-lg font-bold text-white mb-3 flex items-center">
                        <svg class="w-6 h-6 mr-2 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M12 22s8-4 8-10V5a2 2 0 00-2-2H6a2 2 0 00-2 2v7c0 6 8 10 8 10z"></path>
                        </svg>
                        Ciudadanos por ciudad
                    </h3>
                    <ul class="divide-y divide-purple-300">
                        @foreach($ciudadanosporciudad as $ciudad)
                        <li class="py-2 flex justify-between items-center text-white">
                            <span>{{ $ciudad->name }}</span>
                            <span class="font-semibold">{{ $ciudad->citizens_count }} ciudadanos</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>