<?php

namespace App\Http\Livewire\Information;

use App\Models\Accreditation;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddAccreditationTable extends Component
{
    use WithFileUploads;
    public $libelle_francais,$libelle_anglais,$description,$descript,$logo;

    public function store(){
        $this->validate(
            [
                'libelle_francais' => 'required|string',
                'libelle_anglais' => 'required|string',
                'description' => 'required',
                'descript' => 'required',
                'logo' => 'required|image|max:2048',
            ],
        );
        $filename_avant = $this->logo->hashName();
        $this->logo->store('accreditation','public');
        $is_saved = Accreditation::create([
            'libelle' => $this->libelle_francais,
            'libelle_en' => $this->libelle_anglais,
            'logo' => $filename_avant,
            'description' => $this->description,
            'description_en' => $this->descript,
        ]);
        if ($is_saved){
            $this->emit('swal:alert', [
                'icon'  => 'success',
                'timeout' => 2500,
                'title'  => "Votre enregistrement a été bien éffectuée",
            ]);
            $this->resetInput();
            $url = '/information/accreditation';
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
        $this->libelle_francais = "";
        $this->libelle_anglais = "";
        $this->description = "";
        $this->descript = "";
        $this->logo = "";
    }

    public function render()
    {
        return view('livewire.information.add-accreditation-table');
    }
}
