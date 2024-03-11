<?php

namespace App\Http\Livewire\Formation;

use App\Models\CategorieFormation;
use App\Models\Formation;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddFormComponent extends Component
{
    use WithFileUploads;
    public $titre_francais,$titre_anglais,$type_francais,$type_anglais,$duree_francais,$duree_anglais,$couverture,$brochure,
            $description,$descript,$debouche,$debouchen,$condition,$conditionen,$raisonen,$raison,$niveau;

    public function store(){
        $this->validate(
            [
                'titre_francais' => 'required|string',
                'titre_anglais' => 'required|string',
                'description' => 'required',
                'descript' => 'required',
                'niveau' => 'required',
                'type_anglais' => 'required',
                'type_francais' => 'required',
                'duree_francais' => 'required',
                'duree_anglais' => 'required',
                'raison' => 'required',
                'raisonen' => 'required',
                'debouche' => 'required',
                'debouchen' => 'required',
                'condition' => 'required',
                'conditionen' => 'required',
                'couverture' => 'required|image|max:2048',
                'brochure' => 'required',
            ],
        );
        $filename_avant = $this->couverture->hashName();
        $filename = $this->brochure->hashName();
        $this->couverture->store('formation','public');
        $this->brochure->store('brochure','public');

        $is_saved = Formation::create([
            'titre' => $this->titre_francais,
            'categorie_formation_id' => $this->niveau,
            'titreEn' => $this->titre_anglais,
            'slug' => Str::slug($this->titre_francais),
            'couverture' => $filename_avant,
            'brochure' => $filename,
            'description' => $this->description,
            'descriptionEn' => $this->descript,
            'raison' => $this->raison,
            'raisonEn' => $this->raisonen,
            'debauche' => $this->debouche,
            'debaucheEn' => $this->debouchen,
            'admission' => $this->type_francais,
            'admissionEn' => $this->type_anglais,
            'duree' => $this->duree_francais,
            'dureeEn' => $this->duree_anglais,
            'condition' => $this->condition,
            'conditionEn' => $this->conditionen
        ]);
        if ($is_saved){
            $this->emit('swal:alert', [
                'icon'  => 'success',
                'timeout' => 2500,
                'title'  => "Votre enregistrement a été bien éffectuée",
            ]);
            $this->resetInput();
            $url = '/formation/add';
            $this->emit('redirectOn²',$url);
        } else {
            $this->emit('swal:alert', [
                'icon'  => 'error',
                'timeout' => 2500,
                'title'  => "Votre enregistrement a échoué. Réessayez svp !!",
            ]);
        }
    }

    public function resetInput(){
        $this->titre_francais = "";
        $this->titre_anglais = "";
        $this->description = "";
        $this->descript = "";
        $this->couverture = "";
    }

    public function render()
    {
        return view('livewire.formation.add-form-component',[
            'types' => CategorieFormation::get()
        ]);
    }
}
