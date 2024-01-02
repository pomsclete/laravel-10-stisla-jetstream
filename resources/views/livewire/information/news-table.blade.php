<div>
    <div class="bg-gray-100 text-gray-900 tracking-wider leading-normal">
        <div class="p-8 pt-4 mt-2 bg-white" x-data="window.__controller.dataTableMainController()" x-init="setCallback();">
            <div class="flex pb-4 -ml-3">
                <a href="{{ route("information.addActu") }}"  class="ml-2- btn btn-primary shadow">
                    <span class="fas fa-plus"></span> Ajouter une actualité
                </a>
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
                            <th><a class="font-bold" wire:click.prevent="sortBy('titre')" role="button" href="#">
                                    Titre
                                    @include('components.sort-icon', ['field' => 'titre'])
                                </a></th>
                            <th></th>
                            <th class="font-bold">
                                Couverture
                            </th>
                            <th><a class="font-bold" wire:click.prevent="sortBy('updated_at')" role="button" href="#">
                                    Date de modification
                                    @include('components.sort-icon', ['field' => 'updated_at'])
                                </a></th>
                            <th class="font-bold">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($actualites as $actu)
                            <tr>
                                <td>{{ $actu->titre }} {!! ($actu->une == 1) ? '<a  class="badge ml-2 badge-dark">A la une</a>' : '' !!}</td>
                                <td><button wire:click="addTag({{ $actu->id }})" class="btn btn-sm btn-warning">Ajouter un tag</button></td>
                                <td><img src="{{ asset('storage/actualite/'.$actu->couverture) }}" width="50px" alt="image du slide" /></td>
                                <td>{{ $actu->updated_at->format('d M Y H:i') }}</td>
                                <td class="whitespace-no-wrap row-action--icon w-40">
                                    <a role="button" wire:click="publish({{ $actu->id }})" class="mr-3"><i class='{{ $actu->etat == 0 ? "fa  fa-16px fa-eye" : "fa fa-16px fa-eye-slash" }}'></i></a>
                                    <a role="button" href="{{ route('information.editActu',['actu' => $actu->id]) }}" class="mr-3"><i class="fa fa-16px fa-pen"></i></a>
                                    <a role="button" wire:click="delete({{ $actu->id }})" href="#"><i class="fa fa-16px fa-trash text-red-500"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="table_pagination" class="py-3">
                {{ $actualites->onEachSide(1)->links() }}
            </div>
        </div>
    </div>
    {{-- MISE EN LIGNR MODAL --}}
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModaldeleteModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModaldeleteModal">Realy?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>{{ $text }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn text-black btn-secondary" data-dismiss="modal">{{ __('message.setting.salBtnClose') }}</button>
                    <button wire:click="published({{ $actualite_id}},{{ $statut }})" type="button" class="btn text-black btn-danger">Confirmer</button>
                </div>
            </div>
        </div>
    </div>
    {{-- ADD TAGS MODAL --}}
    <div wire:ignore.self class="modal fade fixed-right" id="tagModal" tabindex="-1" role="dialog" aria-labelledby="rubriqueModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-aside" role="document">
            <div class="modal-content bg-indigo-400">
                <div class="modal-header">
                    <h5 class="modal-title text-white" id="rubriqueModal">
                        Ajouter des tags à "# {{$titre}}"
                    </h5>
                    <button type="button" class="close" wire:click="cancelTag()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-md">
                            <tbody>
                            @foreach($tags as $tag)
                                <tr>
                                    <td class="text-white">{{ strtoupper($tag->libelle) }}</td>
                                    <td>
                                        <livewire:information.add-tag-news :actu-id="$actu_id" :tag-id="$tag->id" :key="$tag->id" />
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
