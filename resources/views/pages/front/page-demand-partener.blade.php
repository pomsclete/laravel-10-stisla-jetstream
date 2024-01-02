@section('title', (app()->getLocale() == 'fr') ? "Nouer un partenariat" : "be a partnership" ."| EPF")
<x-home-layout>
    <div>
        <livewire:front.add-partener-component  />
    </div>
</x-home-layout>
