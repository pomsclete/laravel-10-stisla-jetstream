<x-app-layout>
    <x-slot name="header_content">
        <h1>Modification formation</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Formation</a></div>
            <div class="breadcrumb-item"><a href="#">Modifier</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:formation.edit-form-component  :formation="request()->formation"/>
    </div>
</x-app-layout>
