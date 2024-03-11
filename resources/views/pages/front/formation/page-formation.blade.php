@section('title', (app()->getLocale() == 'fr') ? "Nos formations" : "Our courses" ."| EPF")
<x-home-layout>
    <div>
        <livewire:front.formation.formation-component/>
    </div>
</x-home-layout>
