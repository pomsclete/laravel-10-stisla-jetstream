<x-app-layout>
    <x-slot name="header_content">
        <h1>Types d'actualités</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Paramétrage</a></div>
            <div class="breadcrumb-item"><a href="# ">Type d'actualité</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:parametrage.type-actualite-table  />
    </div>
</x-app-layout>
