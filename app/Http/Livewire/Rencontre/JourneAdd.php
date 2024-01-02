<?php

namespace App\Http\Livewire\Rencontre;

use App\Models\PorteOuverte;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class JourneAdd extends Component
{
    public $titre_francais,$titre_anglais,$description,$descript,$image,$lien;
    public $etat = 0;
    use WithFileUploads;

    public function store(){
        $this->validate(
            [
                'titre_francais' => 'required|string',
                'titre_anglais' => 'required|string',
                'description' => 'required',
                'descript' => 'required',
                'image' => 'required|image|max:2048',
            ],
        );
        $filename_avant = $this->image->hashName();
        $this->image->store('journee','public');
        $is_saved = PorteOuverte::create([
            'titre' => $this->titre_francais,
            'titre_en' => $this->titre_anglais,
            'slug' => Str::slug($this->titre_francais),
            'image' => $filename_avant,
            'lien' => $this->lien,
            'description' => $this->description,
            'description_en' => $this->descript,
            'inscription' => $this->etat,
        ]);
        if ($is_saved){
            $this->emit('swal:alert', [
                'icon'  => 'success',
                'timeout' => 2500,
                'title'  => "Votre enregistrement a été bien éffectuée",
            ]);
            $this->resetInput();
            $url = '/rencontre/journe';
            $this->emit('redirectOn',$url);
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
        $this->image = "";
        $this->lien = "";
    }

    public function render()
    {
        return view('livewire.rencontre.journe-add');
    }
}
