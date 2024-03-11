@section('title', (app()->getLocale() == 'fr') ? "Mot du directeur" : "Message from the Director" ."| EPF")
<x-home-layout>
    <div>
        <livewire:front.mot-dg-component  />
    </div>
</x-home-layout>
