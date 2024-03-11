<?php

namespace App\Http\Livewire\Front\Formation;

use App\Models\Formation;
use App\Models\PropectBrochure;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Livewire\Component;

class FormationDetailComponent extends Component
{
    public $formation;
    public $form;
    public $forms = [];
    public $tagActus = [];
    public $nom,$prenom,$email,$telephone;

    public function mount(){
        if(!empty($this->formation)){
            $this->form = Formation::where('slug',$this->formation)->first();
            $this->forms = Formation::where('id','<>',$this->form->id)->orderBy('id','desc')->skip(0)->take(6)->get();
            if (empty($this->form)){
                abort(404);
            }
        }else{
            //dd('test');
            header('Location: '.URL::route('formation',app()->getLocale()));
            exit();
        }

    }

    public function openModal(){
        $this->emit('openModal','createModal');
    }

    public function store()
    {
        $this->validate(
                    [
                        'prenom' => 'required|string|min:3',
                        'nom' => 'required|string|min:2',
                        'email' => 'required|email',
                        'telephone' => 'required|integer|min:9',
                    ],
                );

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
        $this->emit('closeModal','createModal');
    }

    public function render()
    {
        return view('livewire.front.formation.formation-detail-component');
    }
}
