@section('title', (app()->getLocale() == 'fr') ? "Actualités" : "News" ."| EPF")
<x-home-layout>
    <div>
        <livewire:front.blog-component  />
    </div>
</x-home-layout>
