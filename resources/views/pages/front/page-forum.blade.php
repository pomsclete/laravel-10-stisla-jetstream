@section('title', (app()->getLocale() == 'fr') ? "Salons et forums" : "Trade shows and forums" ."| EPF")
<x-home-layout>
    <div>
        <livewire:front.sallon-component  />
    </div>
</x-home-layout>
