@section('title', (app()->getLocale() == 'fr') ? "Portes ouvertes" : "Open doors" ."| EPF")
<x-home-layout>
    <div>
        <livewire:front.porte-ouverte-component  />
    </div>
</x-home-layout>
