<div>

    <button
        class="btn btn-sm {{ ($watched == true) ? 'btn-success' : 'btn-danger' }}"
        wire:click="joindre()">
        <i class="fas {{ ($watched == true) ? 'fa-minus' : 'fa-plus' }} "></i> {{ ($watched == true) ? 'Dissocié' : 'Associé' }}</button>

</div>

