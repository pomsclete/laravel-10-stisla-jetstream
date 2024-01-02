<div x-data="{ open: false }">
    <div class="section-body">
        <h2 class="section-title">{{ __('Modifier une accréditation') }}</h2>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route("information.agenda") }}"  class="-ml- btn btn-warning shadow">
                            <span class="fas fa-list"></span> Liste des agendas
                        </a>
                    </div>
                    <div class="card-body">
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
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lieu</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" wire:model="lieu" class="form-control">
                                @error('lieu')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Date</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="datetime-local" wire:model="date" class="form-control">
                                @error('date')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lien</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" wire:model="lien" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                            <div class="col-sm-12 col-md-5">
                                <input type="file" wire:model="image" class="form-control">
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-sm-12 col-lg-2 col-md-2">
                                @if ($image)
                                    <img src="{{ $image->temporaryUrl() }}" width="70">
                                @else
                                    <img src="{{ asset('storage/agenda/'.$image_first) }}" width="70">
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

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button id="submit" wire:click.prevent="edit()" class="btn btn-warning">Mettre à jour</button>
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
            .create(document.querySelector('#description'))
            .then(editor => {
                //editor.setData( '' );
                document.querySelector('#submit').addEventListener('click', () => {
                    const textareaValue = $('#description').data('description');
                    eval(textareaValue).set('description', editor.getData());
                })

            })
            .catch(error => {
                console.error(error);
            });

    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#descript'))
            .then(editor => {
                //editor.setData( '' );
                document.querySelector('#submit').addEventListener('click', () => {
                    const textareaValue = $('#descript').data('descript');
                    eval(textareaValue).set('descript', editor.getData());
                })

            })
            .catch(error => {
                console.error(error);
            });
    </script>


</div>








