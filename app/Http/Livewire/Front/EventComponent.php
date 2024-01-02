<?php

namespace App\Http\Livewire\Front;

use App\Models\Actualite;
use App\Models\Agenda;
use Livewire\Component;

class EventComponent extends Component
{
    public $perPage = 2;
    public $show = true;
    public $tags =[];
    public $search="";
    public $vues = 2;

    public function loadMore(){
        sleep(2);
        $word = "%".$this->search."%";
        $this->vues = Agenda::where('titre', 'like',$word)
            ->orWhere('titre_en','like',$word)
            ->orderBy('date','desc')->orderBy('id','desc')->count();

        $this->perPage = $this->perPage + 2;
        if($this->vues <= $this->perPage){
            $this->show = false;
        }
    }

    public function updatedSearch(){
        $word = "%".$this->search."%";
        $vues = Agenda::where('titre', 'like',$word)
            ->orWhere('titre_en','like',$word)
            ->orderBy('date','desc')->orderBy('id','desc')->count();
        if($vues <= $this->perPage){
            $this->show = false;
        }
        if ($this->search  == "" and $vues > $this->perPage){
            $this->show= true;
        }

    }

    public function render()
    {
        $word = "%".$this->search."%";
        $agendass =  Agenda::where('titre', 'like',$word)
                            ->orWhere('titre_en','like',$word)
                            ->orderBy('id','desc')->paginate($this->perPage);

        return view('livewire.front.event-component',[
            'agendas' => $agendass,
        ]);
    }
}
