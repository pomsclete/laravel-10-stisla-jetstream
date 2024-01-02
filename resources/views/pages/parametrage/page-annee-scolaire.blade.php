<x-app-layout>
    <x-slot name="header_content">
        <h1>Années Académiques</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Paramétrage</a></div>
            <div class="breadcrumb-item"><a href="#">Années scolaires</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:parametrage.annee-scolaire-table  />
    </div>
</x-app-layout>
