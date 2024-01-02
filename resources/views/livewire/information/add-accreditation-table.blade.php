<div x-data="{ open: false }">
    <div class="section-body">
        <h2 class="section-title">{{ __('Ajouter une accréditation') }}</h2>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route("information.accre") }}"  class="ml-2- btn btn-warning shadow">
                            <span class="fas fa-list"></span> Liste des accréditation
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Libellé en francais</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" wire:model="libelle_francais" class="form-control">
                                @error('libelle_francais')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Libellé en anglais</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" wire:model="libelle_anglais" class="form-control">
                                @error('libelle_anglais')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Logo</label>
                            <div class="col-sm-12 col-md-5">
                                <input type="file" wire:model="logo" class="form-control">
                                @error('logo')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-sm-12 col-lg-2 col-md-2">
                                @if ($logo)
                                    <img src="{{ $logo->temporaryUrl() }}" width="70">
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-4" wire:ignore>
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description en français</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="form-control" data-description="@this" id="description" wire:model="description" cols="30" rows="10"></textarea>
                                @error('description')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-4" wire:ignore>
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description en anglais</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="form-control" data-descript="@this" id="descript"  wire:model="descript" cols="30" rows="10"></textarea>
                                @error('descript')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button id="submit" wire:click.prevent="store()" class="btn btn-primary">Enregistrer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#description' ) )
            .then( editor => {
                document.querySelector('#submit').addEventListener('click', () => {
                    let description = $('#description').data('description');
                    eval(description).set('description', editor.getData());
                })
            })
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#descript' ) )
            .then( editor => {
                document.querySelector('#submit').addEventListener('click', () => {
                    let descript = $('#descript').data('descript');
                    eval(descript).set('descript', editor.getData());
                })
            })
            .catch( error => {
                console.error( error );
            } );
    </script>


</div>