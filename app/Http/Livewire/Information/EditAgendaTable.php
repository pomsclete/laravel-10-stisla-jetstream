<?php

namespace App\Http\Livewire\Information;

use App\Models\Accreditation;
use App\Models\Agenda;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditAgendaTable extends Component
{
    public $image_first,$agenda;
    use WithFileUploads;
    public $titre_francais,$titre_anglais,$description,$descript,$image,$lieu,$date,$lien;

    public function mount(){
        $data = Agenda::findOrFail($this->agenda);
        $this->titre_francais = $data->titre;
        $this->titre_anglais = $data->titre_en;
        $this->description = $data->description;
        $this->descript = $data->description_en;
        $this->lieu = $data->lieu;
        $this->date = $data->date;
        $this->lien = $data->lien;
        $this->image_first = $data->image;
    }

    public function edit(){
        $this->validate(
            [
                'titre_francais' => 'required|string',
                'titre_anglais' => 'required|string',
                'description' => 'required',
                'descript' => 'required',
                'lieu' => 'required',
                'date' => 'required',
            ]
        );
        $data = Agenda::findOrFail($this->agenda);
        if($this->image == null){
            $fichier = $data->image;
        }else {
            $fichier = $this->image->hashName();
            $this->image->store('agenda','public');
        }
        $is_saved = $data->update([
            'titre' => $this->titre_francais,
            'titre_en' => $this->titre_anglais,
            'slug' => Str::slug($this->titre_francais),
            'lieu' => $this->lieu,
            'date' => $this->date,
            'lien' => $this->lien,
            'image' => $fichier,
            'description' => $this->description,
            'description_en' => $this->descript,
        ]);
        if ($is_saved){
            $this->emit('swal:alert', [
                'icon'  => 'success',
                'timeout' => 2500,
                'title'  => "Votre modification a été bien éffectuée",
            ]);
            $url = '/information/agenda';
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
        return view('livewire.information.edit-agenda-table');
    }
}
