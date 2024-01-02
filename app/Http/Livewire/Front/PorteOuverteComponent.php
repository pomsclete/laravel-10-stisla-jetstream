<?php

namespace App\Http\Livewire\Front;

use App\Models\PorteOuverte;
use Livewire\Component;

class PorteOuverteComponent extends Component
{
    public $titre,$titre_en,$image,$description,$description_en,$lien,$inscription;

    public function openModal($id){
        $details = PorteOuverte::where('id',$id)->first();
        $this->titre = $details->titre;
        $this->titre_en = $details->titre_en;
        $this->image = $details->image;
        $this->description = $details->description;
        $this->description_en = $details->description_en;
        $this->lien = $details->lien;
        $this->inscription = $details->inscription;
        $this->emit('openModal','dayModal');
    }

    public function render()
    {

        return view('livewire.front.porte-ouverte-component',[
            "portes" => PorteOuverte::where('statut',0)->get()
        ]);
    }
}
