<div>
    <div class="bg-gray-100 text-gray-900 tracking-wider leading-normal">
        <div class="p-8 pt-4 mt-2 bg-white">
            <div class="flex pb-4 -ml-3">
                <a href="{{ route("rencontre.addjourne") }}"  class="ml-2- btn btn-primary shadow">
                    <span class="fas fa-plus"></span> Ajouter une journée
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
                                    Titre de l'évènement
                                    @include('components.sort-icon', ['field' => 'titre'])
                                </a></th>

                            <th class="font-bold">
                                Image
                            </th>
                            <th><a class="font-bold" wire:click.prevent="sortBy('updated_at')" role="button" href="#">
                                    Dernière modification
                                    @include('components.sort-icon', ['field' => 'updated_at'])
                                </a></th>
                            <th class="font-bold">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($journees as $agenda)
                            <tr x-data="window.__controller.dataTableController({{ $agenda->id }})">
                                <td>{{ $agenda->titre }}</td>
                                <td><img src="{{ asset('storage/journee/'.$agenda->image) }}" width="50px" alt="image du slide" /></td>
                                <td>{{  \Carbon\Carbon::parse($agenda->updated_at)->format('d M Y') }} à {{ \Carbon\Carbon::parse($agenda->date)->format('H:m') }}</td>
                                <td class="whitespace-no-wrap row-action--icon w-40">
                                    <a role="button" href="{{ route('rencontre.editjourne',['journe' => $agenda->id]) }}" class="mr-3"><i class="fa fa-16px fa-pen"></i></a>
                                    <a role="button" wire:click="delete({{ $agenda->id }})" href="#"><i class="fa fa-16px fa-trash text-red-500"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="table_pagination" class="py-3">
                {{ $journees->onEachSide(1)->links() }}
            </div>
        </div>
    </div>
</div>
