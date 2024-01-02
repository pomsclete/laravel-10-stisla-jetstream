<?php

namespace App\Http\Livewire\Information;

use App\Models\Agenda;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddAgendaTable extends Component
{
    use WithFileUploads;
    public $titre_francais,$titre_anglais,$description,$descript,$image,$lieu,$date,$lien;

    public function store(){
        $this->validate(
            [
                'titre_francais' => 'required|string',
                'titre_anglais' => 'required|string',
                'description' => 'required',
                'descript' => 'required',
                'lieu' => 'required',
                'date' => 'required',
                'image' => 'required|image|max:2048',
            ],
        );
        $filename_avant = $this->image->hashName();
        $this->image->store('agenda','public');
        $is_saved = Agenda::create([
            'titre' => $this->titre_francais,
            'titre_en' => $this->titre_anglais,
            'slug' => Str::slug($this->titre_francais),
            'lieu' => $this->lieu,
            'date' => $this->date,
            'lien' => $this->lien,
            'image' => $filename_avant,
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
            $url = '/information/agenda';
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
        $this->image = "";
        $this->lieu = "";
        $this->date = "";
        $this->lien = "";
    }

    public function render()
    {

        return view('livewire.information.add-agenda-table');
    }
}
