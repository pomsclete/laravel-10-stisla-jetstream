<?php

namespace App\Http\Livewire\Front\Formation;

use App\Models\Formation;
use Livewire\Component;

class FormationBachelorComponent extends Component
{
    public function render()
    {
        return view('livewire.front.formation.formation-bachelor-component',[
            'bachelors' => Formation::where('categorie_formation_id',2)->orderBy('titre','ASC')->get()
        ]);
    }
}
