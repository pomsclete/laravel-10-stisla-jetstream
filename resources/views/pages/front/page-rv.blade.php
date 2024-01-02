@section('title', (app()->getLocale() == 'fr') ? "Demander un rendez-vous" : "Request an appointment" ."| EPF")
<x-home-layout>
    <div>
        <livewire:front.rendez-vous-component  />
    </div>
</x-home-layout>
