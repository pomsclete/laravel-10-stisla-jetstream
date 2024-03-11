@section('title', (app()->getLocale() == 'fr') ? "Accréditations et labels" : "Accreditations and labels" ."| EPF")
<x-home-layout>
    <div>
        <livewire:front.accreditation-component  />
    </div>
</x-home-layout>
