@section('title', (app()->getLocale() == 'fr') ? "Campus de Dakar" : "Dakar Campus" ."| EPF")
<x-home-layout>
    <div>
        <livewire:front.dakar-component  />
    </div>
</x-home-layout>
