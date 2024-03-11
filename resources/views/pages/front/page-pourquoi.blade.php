@section('title', (app()->getLocale() == 'fr') ? "Pourquoi choisir EPF" : "Why choose EPF" ."| EPF")
<x-home-layout>
    <div>
        <livewire:front.pourquoi-component  />
    </div>
</x-home-layout>
