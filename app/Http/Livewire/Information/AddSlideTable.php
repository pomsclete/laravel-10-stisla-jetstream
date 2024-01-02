<?php

namespace App\Http\Livewire\Information;

use App\Models\Slide;
use Livewire\Component;
use Livewire\WithFileUploads;


class AddSlideTable extends Component
{
    use WithFileUploads;
    public $titre_francais,$titre_anglais,$description,$descript,$image_avant,$image_down,$lien;

    public function store(){
        $this->validate(
            [
                'titre_francais' => 'required|string',
                'titre_anglais' => 'required|string',
                'description' => 'required',
                'descript' => 'required',
                'image_avant' => 'required|image|max:2048',
                'image_down' => 'required|image|max:2048',
                'lien' => 'required'
            ],
        );
        $filename_avant = $this->image_avant->hashName();
        $this->image_avant->store('slide','public');

        $filename_down = $this->image_down->hashName();
        $this->image_down->store('slide','public');

        $is_saved = Slide::create([
            'titre' => $this->titre_francais,
            'titre_en' => $this->titre_anglais,
            'image_avant' => $filename_avant,
            'image_down' => $filename_down,
            'description' => $this->description,
            'description_en' => $this->descript,
            'lien' => $this->lien,
        ]);
        if ($is_saved){
            $this->emit('swal:alert', [
                'icon'  => 'success',
                'timeout' => 2500,
                'title'  => "Votre enregistrement a été bien éffectuée",
            ]);
            $this->resetInput();
            $url = '/information/slides';
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
        $this->image_avant = "";
        $this->image_down = "";
        $this->lien = "";
    }

    public function render()
    {
        return view('livewire.information.add-slide-table');
    }
}
