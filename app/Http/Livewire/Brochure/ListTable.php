<?php

namespace App\Http\Livewire\Brochure;

use App\Models\PropectBrochure;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ListTable extends Component
{
    public $startDate,$search;

    protected $listeners = ['observation:delete' => 'destroy'];

    public function delete($id)
    {
        $this->emit("swal:confirm", [
            'icon'  => 'warning',
            'title'       => 'Vous êtes sure?',
            'text'        => "Vous ne pourrez pas revenir en arrière !",
            'confirmText' => 'Oui, Supprimer!',
            'method'      => 'observation:delete',
            'params'      => $id,
        ]);
    }

    public function destroy($id)
    {
        DB::table('propect_brochures')->delete($id);

    }

    public function mount(){
        $this->startDate = date('Y-m');
    }

    public function render()
    {
        $word = '%'.$this->search.'%';
        $dateD = $this->startDate.'-01';
        $dateF = $this->startDate.'-31';
        return view('livewire.brochure.list-table',[
            'brochures' => PropectBrochure::select('formations.id','formationId','titre','prenom','nom','telephone','email','sent_email','propect_brochures.created_at')
                        ->join('formations','formations.id','=','propect_brochures.formationId')
                        ->whereBetween('propect_brochures.created_at', [$dateD." 00:00:00", $dateF." 23:59:59"])
                        ->where('titre','like',$word)
                        ->orderBy('id','desc')
                        ->paginate(10)
        ]);
    }
}
