@section('title', (app()->getLocale() == 'fr') ? "Histoire" : "History" ."| EPF")
<x-home-layout>
    <div>
        <livewire:front.histoire-component  />
    </div>
</x-home-layout>
