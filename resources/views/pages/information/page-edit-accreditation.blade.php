<x-app-layout>
    <x-slot name="header_content">
        <h1>Modification accréditation</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">information</a></div>
            <div class="breadcrumb-item"><a href="#">Modifier accréditation</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:information.edit-accreditation-table  :accreditation="request()->accreditation"/>
    </div>
</x-app-layout>
