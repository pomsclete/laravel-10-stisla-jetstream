<x-app-layout>
    <x-slot name="header_content">
        <h1>Accréditations et labels</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">information</a></div>
            <div class="breadcrumb-item"><a href="#">Accréditations</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:information.accreditation-table  />
    </div>
</x-app-layout>
