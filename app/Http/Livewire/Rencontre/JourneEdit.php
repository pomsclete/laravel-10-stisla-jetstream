<?php

namespace App\Http\Livewire\Rencontre;

use App\Models\PorteOuverte;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class JourneEdit extends Component
{
    public $journe;
    public $titre_francais,$titre_anglais,$description,$descript,$image,$lien,$etat,$image_first;
    use WithFileUploads;

    public function mount(){
        $data = PorteOuverte::findOrFail($this->journe);
        $this->titre_francais = $data->titre;
        $this->titre_anglais = $data->titre_en;
        $this->description = $data->description;
        $this->descript = $data->description_en;
        $this->image_first = $data->image;
        $this->etat = $data->inscription;
    }

    public function edit(){
        $this->validate(
            [
                'titre_francais' => 'required|string',
                'titre_anglais' => 'required|string',
                'description' => 'required',
                'descript' => 'required'
            ],
        );

        $data = PorteOuverte::findOrFail($this->journe);
        if($this->image == null){
            $fichier = $data->image;
        }else {
            $fichier = $this->image->hashName();
            $this->image->store('journee','public');
        }

        $is_saved = $data->update([
            'titre' => $this->titre_francais,
            'titre_en' => $this->titre_anglais,
            'slug' => Str::slug($this->titre_francais),
            'image' => $fichier,
            'lien' => $this->lien,
            'description' => $this->description,
            'description_en' => $this->descript,
            'inscription' => $this->etat,
        ]);

        if ($is_saved){
            $this->emit('swal:alert', [
                'icon'  => 'success',
                'timeout' => 2500,
                'title'  => "Modificaion éffectuée avec succés",
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
        return view('livewire.rencontre.journe-edit');
    }
}
