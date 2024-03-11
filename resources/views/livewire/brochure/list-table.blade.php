<div>
    <h2 class="section-title">Gestion</h2>
    <p class="section-lead">
        Suivi des évènements éffectués sur le téléchargement des brochures.
    </p>
    <div class="row mt-4">
        <div class="col-12">
            <div class="card flex">
                <div class="card-body justify-content-between">
                    <div class="row flex justify-content-between">
                        <div class="col-md-4">
                            <input type="month" wire:model="startDate" class="form-control date" autocomplete="off">
                        </div>
                        <div class="input-group col-md-4" wire:ignore.self="">
                            <input wire:model="search" type="text" class="form-control" placeholder="Rechercher par formation">
                            <div class="input-group-append">
                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>


                    <div class="clearfix mb-3"></div>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <th>Nom Complet</th>
                                <th style="text-align: center">Téléphone</th>
                                <th style="text-align: center">Formation</th>
                                <th style="text-align: center">Date</th>
                                <th style="width: 10px;">Action</th>
                            </tr>
                            @forelse($brochures as $broch)
                                <tr>
                                    <td>{{ $broch->prenom.' '.$broch->nom }}</td>
                                    <td>{{ $broch->telephone }}</td>
                                    <td>{{ $broch->titre }}</td>
                                    <td>{{ $broch->created_at->format('d M Y H:i') }}</td>
                                    <td><a role="button" wire:click="delete({{ $broch->id }})" ><i class="fa fa-16px fa-trash text-red-500"></i></a></td>
                                </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center">Aucun résultat trouvé</td>
                            </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="float-right">
                        <nav>
                            <ul class="pagination">

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
