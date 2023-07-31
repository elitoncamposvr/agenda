<x-app-layout>
    <x-slot name="header" >
    </x-slot>

    <div class="py-7">
        <div class="max-w-7xl mx-auto px-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div><span class="font-semibold">Olá,  </span> {{ Auth::user()->name }}.</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
