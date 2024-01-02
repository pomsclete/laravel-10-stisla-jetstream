<?php

namespace App\Http\Livewire\Information;

use App\Models\Actualite;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddNewsTable extends Component
{
    use WithFileUploads;
    public $titre_francais,$titre_anglais,$description,$descript,$couverture;
    public $etat = 0;

    public function store(){
        $this->validate(
            [
                'titre_francais' => 'required|string',
                'titre_anglais' => 'required|string',
                'description' => 'required',
                'descript' => 'required',
                'couverture' => 'required|image|max:2048',
            ],
        );
        $filename_avant = $this->couverture->hashName();
        $this->couverture->store('actualite','public');
        $is_saved = Actualite::create([
            'titre' => $this->titre_francais,
            'titre_en' => $this->titre_anglais,
            'slug_fr' => Str::slug($this->titre_francais),
            'slug_en' => Str::slug($this->titre_anglais),
            'couverture' => $filename_avant,
            'description' => $this->description,
            'description_en' => $this->descript,
            'une' => $this->etat,
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
        $this->couverture = "";
    }

    public function render()
    {
        return view('livewire.information.add-news-table');
    }
}
