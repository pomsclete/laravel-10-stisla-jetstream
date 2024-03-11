@section('title', (app()->getLocale() == 'fr') ? "Des campus inclusives et engagés" : "Inclusive and socially committed campuses" ."| EPF")
<x-home-layout>
    <div>
        <livewire:front.engage-component  />
    </div>
</x-home-layout>
