<?php

namespace App\Http\Livewire\Front\Formation;

use App\Models\Formation;
use Livewire\Component;

class FormationComponent extends Component
{
    public $types=[];

    public function mount(){
        $this->types = Formation::join('categorie_formations','categorie_formations.id','=','formations.categorie_formation_id')
            ->distinct()->get(['libelle','slug_type']);
    }

    public function render()
    {
        return view('livewire.front.formation.formation-component',[
            'formations' => Formation::join('categorie_formations','categorie_formations.id','=','formations.categorie_formation_id')
                                        ->orderBy('titre','ASC')->get(),
        ]);
    }
}
