<?php

namespace App\Http\Livewire\Information;

use App\Models\Slide;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditSlideTable extends Component
{
    public $slide,$image_first,$image_second;
    use WithFileUploads;
    public $titre_francais,$titre_anglais,$description,$descript,$image_avant,$image_down,$lien;

    public function mount(){
        $data = Slide::findOrFail($this->slide);
        $this->titre_francais = $data->titre;
        $this->titre_anglais = $data->titre_en;
        $this->description = $data->description;
        $this->descript = $data->description_en;
        $this->image_first = $data->image_avant;
        $this->image_second = $data->image_down;
        $this->lien = $data->lien;
    }

    public function edit(){
        $this->validate(
            [
                'titre_francais' => 'required|string',
                'titre_anglais' => 'required|string',
                'description' => 'required',
                'descript' => 'required',
                'lien' => 'required'
            ]
        );
        $data = Slide::findOrFail($this->slide);
        if($this->image_avant == null){
            $fichier = $data->image_avant;
        }else {
            $fichier = $this->image_avant->hashName();
            $this->image_avant->store('slide','public');
        }
        if($this->image_down == null){
            $fichier2 = $data->image_down;
        }else {
            $fichier2 = $this->image_down->hashName();
            $this->image_down->store('slide','public');
        }
        $is_saved = $data->update([
            'titre' => $this->titre_francais,
            'titre_en' => $this->titre_anglais,
            'image_avant' => $fichier,
            'image_down' => $fichier2,
            'description' => $this->description,
            'description_en' => $this->descript,
            'lien' => $this->lien,
        ]);
        if ($is_saved){
            $this->emit('swal:alert', [
                'icon'  => 'success',
                'timeout' => 2500,
                'title'  => "Votre modification a été bien éffectuée",
            ]);
            $url = '/information/slides';
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
        return view('livewire.information.edit-slide-table');
    }
}
