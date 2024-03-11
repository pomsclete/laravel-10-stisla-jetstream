<?php

namespace App\Http\Livewire\Brochure;

use App\Exports\ExportProspect;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;

class BtnExport extends Component
{
    public $date_debut,$date_fin,$format;

    public function showmodal(){
        $this->emit('openModal','modalColonne');
    }

    public function clausemodal(){
        $this->emit('closeModal','modalColonne');
    }

    public function export(){
        $this->validate([
            'date_debut' =>'required|date',
            'date_fin' =>'required|date',
            'format' => 'required'
        ]);

        $this->clausemodal();
        return Excel::download(new ExportProspect($this->date_debut,$this->date_fin),
            'export-prospect-'.date_fr($this->date_debut).' au '.date_fr($this->date_fin).'.'.$this->format);
    }

    public function render()
    {
        return view('livewire.brochure.btn-export');
    }
}
