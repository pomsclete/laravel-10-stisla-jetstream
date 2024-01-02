<div>
    <div class="bg-gray-100 text-gray-900 tracking-wider leading-normal">
        <div class="p-8 pt-4 mt-2 bg-white" x-data="window.__controller.dataTableMainController()" x-init="setCallback();">
            <div class="flex pb-4 -ml-3">
                <button data-toggle="modal" data-target="#createModal"  class="-ml- btn btn-primary shadow">
                    <span class="fas fa-plus"></span> Ajouter un partenaire
                </button>
            </div>

            <div class="row mb-4">
                <div class="hidden md:block col form-inline">

                </div>

                <div class="col ">
                    <input wire:model="search" class="form-control rounded border-pink-600 shadow" type="text" placeholder="Rechercher...">
                </div>
            </div>

            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped text-sm text-gray-600">
                        <thead class="shadow-md">
                        <tr>
                            <th><a class="font-bold" wire:click.prevent="sortBy('nom')" role="button" href="#">
                                    Nom du partenaire
                                    @include('components.sort-icon', ['field' => 'nom'])
                                </a></th>
                            <th>Logo</th>
                            <th><a class="font-bold" wire:click.prevent="sortBy('dateSignature')" role="button" href="#">
                                    Date de convention
                                    @include('components.sort-icon', ['field' => 'dateSignature'])
                                </a></th>
                            <th><a class="font-bold" wire:click.prevent="sortBy('updated_at')" role="button" href="#">
                                    Date de modification
                                    @include('components.sort-icon', ['field' => 'updated_at'])
                                </a></th>
                            <th class="font-bold">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($partenaires as $tag)
                            <tr x-data="window.__controller.dataTableController({{ $tag->id }})">
                                <td>{{ $tag->nom }}</td>
                                <td><img src="{{ asset('storage/partenaires/'.$tag->logo) }}" width="50px" alt="image du logo" /></td>
                                <td>{{ \Carbon\Carbon::parse($tag->dateSignature)->format('d M Y')  }}</td>
                                <td>{{ $tag->updated_at->format('d M Y H:i') }}</td>
                                <td class="whitespace-no-wrap row-action--icon w-40">
                                    <a role="button" wire:click="edit({{ $tag->id }})"class="mr-3"><i class="fa fa-16px fa-pen"></i></a>
                                    <a role="button" wire:click="delete({{ $tag->id }})" href="#"><i class="fa fa-16px fa-trash text-red-500"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="table_pagination" class="py-3">
                {{ $partenaires->onEachSide(1)->links() }}
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade fixed-right" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalcreateModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-aside" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-white" id="exampleModalcreateModal">
                        @if($updateMode==false)
                            Ajouter un partenaire
                        @else
                            Modifier le partenaire
                        @endif
                    </h5>
                    <button type="button" class="close" wire:click="cancel()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row align-items-center">
                        <label for="nom" class="form-control-label col-sm-12 col-md-12 text-md-left">{{ __('Nom du partenaire') }}</label>
                        <div class="col-sm-12 col-md-12">
                            <input type="text" wire:model="nom" class="form-control" id="nom">
                            @error('nom')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label for="date_convention" class="form-control-label col-sm-12 col-md-12 text-md-left">{{ __('Date signature convention') }}</label>
                        <div class="col-sm-12 col-md-12">
                            <input type="date" wire:model="date_convention" class="form-control" id="date_convention">
                            @error('date_convention')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label  col-12 col-md-12 col-lg-12">Logo de l'entreprise</label>
                        <div class="col-sm-12 col-md-12">
                            <input type="file" wire:model="logo" id="{{ rand() }}" class="form-control">
                            @error('logo')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-sm-12 col-lg-12 col-md-12">
                            @if ($logo)
                                <img src="{{ $logo->temporaryUrl() }}" width="80">
                            @else
                                <img src="{{ asset('storage/partenaires/'.$imageLogo) }}" width="80">
                            @endif
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" wire:click="cancel()" class="bg-neutral-700 hover:bg-red-500  text-white px-3 py-2 rounded" data-dismiss="modal">{{ __('Fermer la fenêtre') }}</button>
                    @if($updateMode==false)
                        <button  type="button" wire:click.prevent="store()" class="bg-green-700 hover:bg-green-800  text-white px-3 py-2 rounded">{{ __('Enregistrer') }}</button>
                    @else
                        <button  type="button" wire:click.prevent="update()" class="bg-yellow-700 hover:bg-yellow-800  text-white px-3 py-2 rounded">{{ __('Mettre à jour') }}</button>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
