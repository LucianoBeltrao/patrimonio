<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                

<div class="grid grid-cols-2 md:grid-cols-3 gap-4">
    <a href="{{ route('assets') }}">
        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('images/cellphone.jpg') }}" alt="Descrição da imagem">
        </div>
    </a>

    <a href="{{ route('projects') }}">
    <div>
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('images/silverchair.jpg') }}" alt="Descrição da imagem">
    </div>
    </a>
    <a href="{{ route('users') }}">
    <div>
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('images/schedule.jpg') }}" alt="Descrição da imagem">
    </div>
    </a>
    <a href="{{ route('assetform') }}">
    <div>
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('images/goldbar.jpg') }}" alt="Descrição da imagem">
    </div>
    </a>
    <a href="{{ route('assets') }}">
    <div>
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('images/car.jpg') }}" alt="Descrição da imagem">
    </div>
    </a>
    <a href="{{ route('assetform') }}">
    <div>
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('images/computer.jpg') }}" alt="Descrição da imagem">
    </div>
    </a>

</div>

            </div>
        </div>
    </div>
</x-app-layout>
