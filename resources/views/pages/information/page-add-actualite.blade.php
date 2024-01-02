<x-app-layout>
    <x-slot name="header_content">
        <h1>Nouvelle actualité</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">information</a></div>
            <div class="breadcrumb-item"><a href="#">News</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:information.add-news-table  />
    </div>
</x-app-layout>
