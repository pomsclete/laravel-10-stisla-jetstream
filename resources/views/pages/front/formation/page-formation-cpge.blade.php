@section('title', (app()->getLocale() == 'fr') ? "Cours préparatoires des grandes écoles" : "Preparatory courses for major schools" ."| EPF")
<x-home-layout>
        <livewire:front.formation.cpge-component />
</x-home-layout>
