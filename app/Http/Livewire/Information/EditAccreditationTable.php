<?php

namespace App\Http\Livewire\Information;

use App\Models\Accreditation;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditAccreditationTable extends Component
{
    public $image_first,$accreditation;
    use WithFileUploads;
    public $libelle_francais,$libelle_anglais,$description,$descript,$logo;

    public function mount(){
        $data = Accreditation::findOrFail($this->accreditation);
        $this->libelle_francais = $data->libelle;
        $this->libelle_anglais = $data->libelle_en;
        $this->description = $data->description;
        $this->descript = $data->description_en;
        $this->image_first = $data->logo;
    }

    public function edit(){
        $this->validate(
            [
                'libelle_francais' => 'required|string',
                'libelle_anglais' => 'required|string',
                'description' => 'required',
                'descript' => 'required'
            ]
        );
        $data = Accreditation::findOrFail($this->accreditation);
        if($this->logo == null){
            $fichier = $data->logo;
        }else {
            $fichier = $this->logo->hashName();
            $this->logo->store('actualite','public');
        }
        $is_saved = $data->update([
            'libelle' => $this->libelle_francais,
            'libelle_en' => $this->libelle_anglais,
            'logo' => $fichier,
            'description' => $this->description,
            'description_en' => $this->descript,
        ]);
        if ($is_saved){
            $this->emit('swal:alert', [
                'icon'  => 'success',
                'timeout' => 2500,
                'title'  => "Votre modification a été bien éffectuée",
            ]);
            $url = '/information/accreditation';
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
        return view('livewire.information.edit-accreditation-table');
    }
}
