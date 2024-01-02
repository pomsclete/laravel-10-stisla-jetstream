<div>
    <div class="bg-gray-100 text-gray-900 tracking-wider leading-normal">
        <div class="p-8 pt-4 mt-2 bg-white" x-data="window.__controller.dataTableMainController()" x-init="setCallback();">
            <div class="flex pb-4 -ml-3">
                <button data-toggle="modal" data-target="#createModal"  class="-ml- btn btn-primary shadow">
                    <span class="fas fa-plus"></span> Ajouter une année académique
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
                            <th><a class="font-bold" wire:click.prevent="sortBy('year')" role="button" href="#">
                                    Année scolaire
                                    @include('components.sort-icon', ['field' => 'year'])
                                </a></th>
                            <th><a class="font-bold" wire:click.prevent="sortBy('created_at')" role="button" href="#">
                                    Date de modification
                                    @include('components.sort-icon', ['field' => 'created_at'])
                                </a></th>
                            <th class="font-bold">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($annees as $annee)
                            <tr x-data="window.__controller.dataTableController({{ $annee->id }})">
                                <td>{{ $annee->year }}</td>
                                <td>{{ $annee->updated_at->format('d M Y H:i') }}</td>
                                <td class="whitespace-no-wrap row-action--icon w-40">
                                    <a role="button" wire:click="edit({{ $annee->id }})"class="mr-3"><i class="fa fa-16px fa-pen"></i></a>
                                    <a role="button" wire:click="delete({{ $annee->id }})" href="#"><i class="fa fa-16px fa-trash text-red-500"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="table_pagination" class="py-3">
                {{ $annees->onEachSide(1)->links() }}
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade fixed-right" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalcreateModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-aside" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-white" id="exampleModalcreateModal">
                        @if($updateMode==false)
                            Ajouter une année académique
                        @else
                            Modifier une année académique
                        @endif
                    </h5>
                    <button type="button" class="close" wire:click="cancel()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row align-items-center">
                        <label for="level" class="form-control-label col-sm-12 col-md-12 text-md-left">{{ __('Année académique') }}</label>
                        <div class="col-sm-12 col-md-12">
                            <input type="text" wire:model="annee_scolaire" class="form-control" id="annee_scolaire" placeholder="2022-2023">
                            @error('annee_scolaire')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
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
