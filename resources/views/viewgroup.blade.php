<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Ciudadanos agrupados por ciudad
        </h2>
    </x-slot>
<!-- filepath: resources/views/viewgroup.blade.php -->
<form method="GET" action="{{ route('viewgroup') }}" class="mb-6 flex flex-col md:flex-row gap-2 items-center">
    <input
        type="text"
        name="search"
        value="{{ request('search') }}"
        placeholder="Buscar..."
        class="px-4 py-2 border rounded w-full md:w-auto"
    >
    <select name="tipo" class="px-2 py-2 border rounded">
        <option value="ciudad" {{ request('tipo') == 'ciudad' ? 'selected' : '' }}>Buscar por ciudad</option>
        <option value="ciudadano" {{ request('tipo') == 'ciudadano' ? 'selected' : '' }}>Buscar por ciudadano</option>
    </select>
    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
        Buscar
    </button>
</form>
    

    <div class="py-8 max-w-3xl mx-auto">
        <div class="space-y-4">
            @foreach($ciudades as $ciudad)
                <div x-data="{ open: false }" class="border rounded-lg bg-white dark:bg-gray-800">
                    <button @click="open = !open" class="w-full px-4 py-2 text-left font-bold text-lg text-gray-800 dark:text-gray-100 focus:outline-none">
                        {{ $ciudad->name }} ({{ $ciudad->citizens->count() }} ciudadanos)
                    </button>
                    <div x-show="open" class="px-6 pb-4" x-transition>
                        @if($ciudad->citizens->isEmpty())
                            <p class="text-gray-500">No hay ciudadanos registrados.</p>
                        @else
                            <ul class="list-disc ml-6">
                                @foreach($ciudad->citizens as $citizen)
                                    <li class="text-gray-700 dark:text-gray-200">
                                        {{ $citizen->first_name }} {{ $citizen->last_name }}
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>