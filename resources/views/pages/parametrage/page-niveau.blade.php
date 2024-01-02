<x-app-layout>
    <x-slot name="header_content">
        <h1>Niveaux | Classes</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Paramétrage</a></div>
            <div class="breadcrumb-item"><a href="# ">Niveaux d'études</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:parametrage.niveau-table  />
    </div>
</x-app-layout>
