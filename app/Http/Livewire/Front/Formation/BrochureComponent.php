<?php

namespace App\Http\Livewire\Front\Formation;

use App\Models\Formation;
use App\Models\PropectBrochure;
use Livewire\Component;

class BrochureComponent extends Component
{

    public $formation;
    public $form;
    public $forms = [];
    public $nom,$prenom,$email,$telephone;

    public function openModal(){

        $this->forms = Formation::orderBy('id','desc')->get();
        $this->emit('openModal','createModal');
    }

    public function store()
    {
        $this->validate(
            [
                'prenom' => 'required|string|min:3',
                'nom' => 'required|string|min:2',
                'email' => 'required|email',
                'formation' => 'required|integer',
                'telephone' => 'required|integer|min:9',
            ],
        );

        $this->form = Formation::where('id',$this->formation)->first();

        $res = PropectBrochure::create([
            'prenom' => $this->prenom,
            'nom' => $this->nom,
            'email' => $this->email,
            'telephone' => $this->telephone,
            'formationId' => $this->form->id
        ]);

        if ($res){
            $this->emit('swal:alert', [
                'icon'  => 'success',
                'timeout' => 2500,
                'title'  => "Votre enregistrement a été bien éffectuée",
            ]);
            $this->cancel();
            return response()->download(public_path("storage/brochure/".$this->form->brochure));
        } else {
            $this->emit('swal:alert', [
                'icon'  => 'danger',
                'timeout' => 2500,
                'title'  => "Des problèmes ont été noté !!",
            ]);
        }
        return 0;
    }

    public function cancel(){
        $this->prenom = "";
        $this->nom = "";
        $this->telephone = "";
        $this->email = "";
        $this->formation = "";
        $this->emit('closeModal','createModal');
    }

    public function render()
    {
        return view('livewire.front.formation.brochure-component');
    }
}
