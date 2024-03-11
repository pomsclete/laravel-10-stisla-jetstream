<div>
    <div class="section-body">
        <h2 class="section-title">Modifier la formation : {{ $titre_francais }} </h2>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route("information.actu") }}"  class="-ml- btn btn-warning shadow">
                            <span class="fas fa-list"></span> Liste des formations
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Niveaux</label>
                            <div class="col-sm-12 col-md-7">
                                <select wire:model="niveau" class="form-control">
                                    <option value="">-- Sélectionnez --</option>
                                    @foreach($types as $type)
                                        <option value="{{ $type->id }}">{{ $type->libelle }}</option>
                                    @endforeach
                                </select>
                                @error('niveau')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Titre en francais</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" wire:model="titre_francais" class="form-control">
                                @error('titre_francais')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Titre en anglais</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" wire:model="titre_anglais" class="form-control">
                                @error('titre_anglais')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">type d'admission en francais</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" wire:model="type_francais" class="form-control">
                                @error('type_francais')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">type d'admission en anglais</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" wire:model="type_anglais" class="form-control">
                                @error('type_anglais')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Durée en francais</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" wire:model="duree_francais" class="form-control">
                                @error('duree_francais')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Durée en anglais</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" wire:model="duree_anglais" class="form-control">
                                @error('duree_anglais')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image couverture</label>
                            <div class="col-sm-12 col-md-5">
                                <input type="file" wire:model="couverture" class="form-control">
                                @error('couverture')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-sm-12 col-lg-2 col-md-2">
                                @if ($couverture)
                                    <img src="{{ $couverture->temporaryUrl() }}" width="70">
                                @else
                                    <img src="{{ asset('storage/formation/'.$image_first) }}" width="70">
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Brochure</label>
                            <div class="col-sm-12 col-md-5">
                                <input type="file" wire:model="brochure" class="form-control">
                                @error('brochure')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-sm-12 col-lg-2 col-md-2">
                                @if ($brochure)
                                    <span></span>
                                @else
                                    <span class="badge badge-info">Brochure de la formation</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-4" wire:ignore>
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description en français</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="form-control" data-description="@this" id="description" wire:model="description" cols="30" rows="10">
                                    {{ $description }}
                                </textarea>
                                @error('description')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-4" wire:ignore>
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description en anglais</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="form-control" data-descript="@this" id="descript"  wire:model="descript" cols="30" rows="10">
                                    {{ $descript }}
                                </textarea>
                                @error('descript')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4" wire:ignore>
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">5 raisons en français</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="form-control" data-raison="@this" id="raison" wire:model="raison" cols="30" rows="10">
                                    {{ $raison }}
                                </textarea>
                                @error('raison')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-4" wire:ignore>
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">5 raisons en anglais</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="form-control" data-raisonen="@this" id="raisonen"  wire:model="raisonen" cols="30" rows="10">
                                    {{ $raisonen }}
                                </textarea>
                                @error('raisonen')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4" wire:ignore>
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Débouchés en français</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="form-control" data-debouche="@this" id="debouche" wire:model="debouche" cols="30" rows="10">
                                    {{ $debouche }}
                                </textarea>
                                @error('debouche')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-4" wire:ignore>
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Débouchés en anglais</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="form-control" data-debouchen="@this" id="debouchen"  wire:model="debouchen" cols="30" rows="10">
                                    {{ $debouchen }}
                                </textarea>
                                @error('debouchen')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4" wire:ignore>
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Condition d'accès en français</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="form-control" data-condition="@this" id="condition" wire:model="condition" cols="30" rows="10">
                                    {{ $condition }}
                                </textarea>
                                @error('condition')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-4" wire:ignore>
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Condition d'accès en anglais</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="form-control" data-conditionen="@this" id="conditionen"  wire:model="conditionen" cols="30" rows="10">
                                    {{ $conditionen }}
                                </textarea>
                                @error('conditionen')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button id="submit" wire:click.prevent="update()" class="btn btn-warning">Mettre à jour</button>
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
        /**
         * DEBOUCHE
         */
        ClassicEditor
            .create( document.querySelector( '#debouche' ) )
            .then( editor => {
                document.querySelector('#submit').addEventListener('click', () => {
                    let debouche = $('#debouche').data('debouche');
                    eval(debouche).set('debouche', editor.getData());
                })
            })
            .catch( error => {
                console.error( error );
            } );
        ClassicEditor
            .create( document.querySelector( '#debouchen' ) )
            .then( editor => {
                document.querySelector('#submit').addEventListener('click', () => {
                    let debouchen = $('#debouchen').data('debouchen');
                    eval(debouchen).set('debouchen', editor.getData());
                })
            })
            .catch( error => {
                console.error( error );
            } );
        /**
         * CONDITION
         */
        ClassicEditor
            .create( document.querySelector( '#condition' ) )
            .then( editor => {
                document.querySelector('#submit').addEventListener('click', () => {
                    let condition = $('#condition').data('condition');
                    eval(condition).set('condition', editor.getData());
                })
            })
            .catch( error => {
                console.error( error );
            } );
        ClassicEditor
            .create( document.querySelector( '#conditionen' ) )
            .then( editor => {
                document.querySelector('#submit').addEventListener('click', () => {
                    let conditionen = $('#conditionen').data('conditionen');
                    eval(conditionen).set('conditionen', editor.getData());
                })
            })
            .catch( error => {
                console.error( error );
            } );
        /**
         * RAISON
         */
        ClassicEditor
            .create( document.querySelector( '#raison' ) )
            .then( editor => {
                document.querySelector('#submit').addEventListener('click', () => {
                    let raison = $('#raison').data('raison');
                    eval(raison).set('raison', editor.getData());
                })
            })
            .catch( error => {
                console.error( error );
            } );
        ClassicEditor
            .create( document.querySelector( '#raisonen' ) )
            .then( editor => {
                document.querySelector('#submit').addEventListener('click', () => {
                    let raisonen = $('#raisonen').data('raisonen');
                    eval(raisonen).set('raisonen', editor.getData());
                })
            })
            .catch( error => {
                console.error( error );
            } );
    </script>


</div>








