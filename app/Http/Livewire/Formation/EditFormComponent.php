<?php

namespace App\Http\Livewire\Formation;

use App\Models\CategorieFormation;
use App\Models\Formation;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditFormComponent extends Component
{
    use WithFileUploads;
    public $titre_francais,$titre_anglais,$type_francais,$type_anglais,$duree_francais,$duree_anglais,$couverture,$brochure,
        $description,$descript,$debouche,$debouchen,$condition,$conditionen,$raisonen,$raison,$niveau,$formation,$image_first,$image_second;

    public function mount(){
        $data = Formation::findOrFail($this->formation);
        $this->titre_francais = $data->titre;
        $this->titre_anglais = $data->titreEn;
        $this->niveau = $data->categorie_formation_id;
        $this->image_first = $data->couverture;
        $this->description = $data->description;
        $this->descript = $data->descriptionEn;
        $this->raison = $data->raison;
        $this->raisonen = $data->raisonEn;
        $this->debouche = $data->debauche;
        $this->debouchen = $data->debaucheEn;
        $this->type_francais = $data->admission;
        $this->type_anglais = $data->admissionEn;
        $this->duree_francais = $data->duree;
        $this->duree_anglais = $data->dureeEn;
        $this->condition = $data->condition;
        $this->conditionen = $data->conditionEn;
        $this->image_second = $data->brochure;
    }

    public function update(){
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
            ],
        );

        $data = Formation::findOrFail($this->formation);

        if($this->couverture == null){
            $fichier = $data->couverture;
        }else {
            $fichier = $this->couverture->hashName();
            $this->couverture->store('formation','public');
        }
        if($this->brochure == null){
            $broche = $data->brochure;
        }else {
            $broche = $this->brochure->hashName();
            $this->brochure->store('brochure','public');
        }
        $is_saved = $data->update([
            'titre' => $this->titre_francais,
            'categorie_formation_id' => $this->niveau,
            'titreEn' => $this->titre_anglais,
            'slug' => Str::slug($this->titre_francais),
            'couverture' => $fichier,
            'brochure' => $broche,
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
            $url = '/formation/liste';
            $this->emit('redirectOn',$url);
        } else {
            $this->emit('swal:alert', [
                'icon'  => 'error',
                'timeout' => 2500,
                'title'  => "Votre enregistrement a échoué. Réessayez svp !!",
            ]);
        }
    }

    public function render()
    {
        return view('livewire.formation.edit-form-component',[
            'types' => CategorieFormation::get()
        ]);
    }
}
