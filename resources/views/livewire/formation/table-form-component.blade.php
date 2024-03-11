<div>
    <div class="bg-gray-100 text-gray-900 tracking-wider leading-normal">
        <div class="p-8 pt-4 mt-2 bg-white" x-data="window.__controller.dataTableMainController()" x-init="setCallback();">
            <div class="flex pb-4 -ml-3">
                <a href="{{ route("formation.add") }}"  class="ml-2- btn btn-primary shadow">
                    <span class="fas fa-plus"></span> Ajouter une formation
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
                            <th>Niveau d'étude</th>
                            <th><a class="font-bold" wire:click.prevent="sortBy('titre')" role="button" href="#">
                                    Titre de la formation
                                    @include('components.sort-icon', ['field' => 'titre'])
                                </a></th>
                            <th class="font-bold">
                                Couverture
                            </th>
                            <th class="font-bold">
                                Brochure
                            </th>
                            <th><a class="font-bold" wire:click.prevent="sortBy('updated_at')" role="button" href="#">
                                    Date de modification
                                    @include('components.sort-icon', ['field' => 'updated_at'])
                                </a></th>
                            <th class="font-bold">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($formations as $actu)
                            <tr>
                                <td>
                                    @if($actu->categorie_formation_id == 2)
                                        BACHELOR
                                    @elseif($actu->categorie_formation_id == 1)
                                        CPGE
                                    @elseif($actu->categorie_formation_id == 3)
                                        LICENCE
                                    @else
                                        MASTER
                                    @endif

                                </td>
                                <td>{{ $actu->titre }}</td>
                                <td><img src="{{ asset('storage/formation/'.$actu->couverture) }}" width="50px" alt="image du slide" /></td>
                                <td><a href="{{ asset('storage/brochure/'.$actu->brochure) }}" target="_blank" class="btn btn-sm btn-info">Télécharger</a></td>
                                <td>{{ $actu->updated_at->format('d M Y H:i') }}</td>
                                <td class="whitespace-no-wrap row-action--icon w-40">
                                   <a role="button" href="{{ route('formation.edit',['formation' => $actu->id]) }}" class="mr-3"><i class="fa fa-16px fa-pen"></i></a>
                                    <a role="button" wire:click="delete({{ $actu->id }})" href="#"><i class="fa fa-16px fa-trash text-red-500"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="table_pagination" class="py-3">
                {{ $formations->onEachSide(1)->links() }}
            </div>
        </div>
    </div>
    {{-- MISE EN LIGNR MODAL --}}

</div>
