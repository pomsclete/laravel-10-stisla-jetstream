<?php

namespace App\Http\Livewire\Front;

use App\Models\RendezVous;
use Livewire\Component;

class RendezVousComponent extends Component
{
    public $civilite,$nom,$prenom,$email,$telephone,$niveau,$formation,$campus,$autorisation;

    public function store(){
        $this->validate(
            [
                'civilite' => 'required',
                'nom' => 'required',
                'prenom' => 'required',
                'email' => 'required',
                'telephone' => 'required',
                'niveau' => 'required',
                'formation' => 'required',
                'campus' => 'required',
                'autorisation' => 'required'
            ],
        );
       $rv = RendezVous::create([
            'civilite' => $this->civilite,
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'email' => $this->email,
            'telephone' => $this->telephone,
            'niveau' => $this->niveau,
            'formation' => $this->formation,
            'campus' => $this->campus,
            'autorisation' => $this->autorisation
        ]);
       if ($rv){
           $this->resetValidation();
             session()->flash('message',"Merci d'avoir soumis votre demande, un téléconseiller vous contactera dans les plus brefs délais");
       } else {
            session()->flash('message', "Une erreur a été noté lors de l'enregistrement. Veuillez réessayez svp");
       }
    }

    public function resetInput(){
        $this->resetValidation();
        $this->civilite = "";
        $this->nom = "";
        $this->prenom = "";
        $this->email = "";
        $this->telephone = "";
        $this->formation = "";
        $this->campus = "";
        $this->niveau = "";
        $this->autorisation = "";
    }

    public function render()
    {
        return view('livewire.front.rendez-vous-component');
    }
}
