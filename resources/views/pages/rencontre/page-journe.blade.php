<x-app-layout>
    <x-slot name="header_content">
        <h1>Journées portes ouvertes</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">rencontre</a></div>
            <div class="breadcrumb-item"><a href="# ">Journées</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:rencontre.journe-table  />
    </div>
</x-app-layout>
