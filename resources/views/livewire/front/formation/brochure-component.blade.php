<div>
    <a role="button" wire:click="openModal()" class="th-btn ml-20">
        Brochure <i class="fas fa-arrow-right ms-1"></i>
    </a>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="createModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">TÉLÉCHARGEZ LA BROCHURE  </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 mb-3">
                            <select wire:model="formation" class="form-select" aria-label="Default select example">
                                <option value="" selected>Veuillez choisir une formation</option>
                                @foreach($forms as $forma)
                                    <option value="{{ $forma->id }}">{{ (app()->getLocale() == 'fr') ? $forma->titre : $forma->titreEn }}</option>
                                @endforeach
                            </select>
                            @error('formation')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 col-sm-12 mb-3">
                            <input type="text" required wire:model="nom" class="form-control" placeholder="{{ (app()->getLocale() == 'fr') ? 'Nom' : 'LastName'}}">
                            @error('nom')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 col-sm-12 mb-3">
                            <input type="text" required wire:model="prenom" class="form-control"  placeholder="{{ (app()->getLocale() == 'fr') ? 'Prénom' : 'FisrtName'}}">
                            @error('prenom')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 col-sm-12 mb-3">
                            <input type="email" required wire:model="email" class="form-control"  placeholder="Email">
                            @error('email')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 col-sm-12 mb-3">
                            <input type="text" required wire:model="telephone"  class="form-control"  placeholder="{{ (app()->getLocale() == 'fr') ? 'Numéro de telephone' : 'Phone number'}}">
                            @error('telephone')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" wire:click.prevent="store()"  class="th-btn ml-20">Télécharger </button>
                    <div wire:loading wire:target="store" class="text-info">
                        {{ (app()->getLocale() == 'fr') ? 'Téléchargement en cours...' : 'Downloading...'}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
