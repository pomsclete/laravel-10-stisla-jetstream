@section('title', (app()->getLocale() == 'fr') ? "Nos partenaires" : "Our partners" ."| EPF")
<x-home-layout>
    <div>
        <livewire:front.partenaire-component  />
    </div>
</x-home-layout>
