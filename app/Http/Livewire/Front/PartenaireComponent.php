<?php

namespace App\Http\Livewire\Front;

use App\Models\Partenariat;
use Livewire\Component;

class PartenaireComponent extends Component
{
    public $perPage = 8;
    public $show = true;

    public function loadMore(){
        sleep(2);
        $vues = Partenariat::orderBy('id','desc')->count();
        $this->perPage = $this->perPage + 2;
        if($vues <= $this->perPage){
            $this->show = false;
        }
    }

    public function mount(){
        $vues = Partenariat::orderBy('id','desc')->count();
        if($vues <= $this->perPage){
            $this->show = false;
        }
    }

    public function render()
    {
        return view('livewire.front.partenaire-component',[
            "partenaires" => Partenariat::select('nom','logo', 'id', 'updated_at','dateSignature')
                ->orderBy('id','DESC')
                ->paginate($this->perPage)
        ]);
    }
}
