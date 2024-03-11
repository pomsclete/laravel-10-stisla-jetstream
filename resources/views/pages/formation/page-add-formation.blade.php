<x-app-layout>
    <x-slot name="header_content">
        <h1>Ajouter une formation</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">information</a></div>
            <div class="breadcrumb-item"><a href="#">ajouter</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:formation.add-form-component  />
    </div>
</x-app-layout>
