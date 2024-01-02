<?php

namespace App\Http\Livewire\Information;

use App\Models\Actualite;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditNewsTable extends Component
{

    public $actu,$image_first;
    use WithFileUploads;
    public $titre_francais,$titre_anglais,$description,$descript,$couverture,$etat;

    public function mount(){
        $data = Actualite::findOrFail($this->actu);
        $this->titre_francais = $data->titre;
        $this->titre_anglais = $data->titre_en;
        $this->description = $data->description;
        $this->descript = $data->description_en;
        $this->image_first = $data->couverture;
        $this->etat = $data->une;
    }

    public function edit(){
        $this->validate(
            [
                'titre_francais' => 'required|string',
                'titre_anglais' => 'required|string',
                'description' => 'required',
                'descript' => 'required'
            ]
        );
        $data = Actualite::findOrFail($this->actu);
        if($this->couverture == null){
            $fichier = $data->couverture;
        }else {
            $fichier = $this->couverture->hashName();
            $this->couverture->store('actualite','public');
        }
        $is_saved = $data->update([
            'titre' => $this->titre_francais,
            'titre_en' => $this->titre_anglais,
            'slug_fr' => Str::slug($this->titre_francais),
            'slug_en' => Str::slug($this->titre_anglais),
            'couverture' => $fichier,
            'description' => $this->description,
            'description_en' => $this->descript,
            'une' => $this->etat,
        ]);
        if ($is_saved){
            $this->emit('swal:alert', [
                'icon'  => 'success',
                'timeout' => 2500,
                'title'  => "Votre modification a été bien éffectuée",
            ]);
            $url = '/information/news';
            $this->emit('redirectOn',$url);
        } else {
            $this->emit('swal:alert', [
                'icon'  => 'error',
                'timeout' => 2500,
                'title'  => "Votre modification a échoué. Réessayez svp !!",
            ]);
        }

    }

    public function render()
    {
        return view('livewire.information.edit-news-table');
    }
}
