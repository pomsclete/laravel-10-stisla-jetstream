<x-app-layout>
    <x-slot name="header_content">
        <h1>Téléchargement de brochures</h1>

        <div class="section-header-breadcrumb">
            <livewire:brochure.btn-export  />
        </div>
    </x-slot>

    <div>
        <livewire:brochure.list-table  />
    </div>
</x-app-layout>
