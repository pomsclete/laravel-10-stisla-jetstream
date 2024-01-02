<x-app-layout>
    <x-slot name="header_content">
        <h1>Nos campus</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Paramétrage</a></div>
            <div class="breadcrumb-item"><a href="# ">Campus</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:parametrage.campus-table  />
    </div>
</x-app-layout>
