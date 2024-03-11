@section('title', (app()->getLocale() == 'fr') ? "Nos formations en bachelor" : "Our bachelor’s courses" ."| EPF")
<x-home-layout>
    <div>
        <livewire:front.formation.formation-bachelor-component/>
    </div>
</x-home-layout>
