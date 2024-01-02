<x-app-layout>
    <x-slot name="header_content">
        <h1>Modification journée</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">rencontre</a></div>
            <div class="breadcrumb-item"><a href="#">Modifier journée</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:rencontre.journe-edit  :journe="request()->journe"/>
    </div>
</x-app-layout>
