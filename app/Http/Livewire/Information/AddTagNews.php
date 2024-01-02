<?php

namespace App\Http\Livewire\Information;

use App\Models\Actualite;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AddTagNews extends Component
{
    public $actuId;
    public $tagId;
    public $watched = false;

    public function joindre()
    {
        $monModele = Actualite::findOrFail($this->actuId);
        $monModele->tags()->toggle($this->tagId);
        $this->having();
    }



    public function mount(){
        $this->having();

    }

    public function having(){
        $have = DB::table('actualite_tag')
            ->select(DB::raw('count(*) as countD'))
            ->where('actualite_id', '=', $this->actuId)
            ->where('tag_id', '=', $this->tagId)
            ->first();
        if($have->countD){
            $this->watched = true;
        } else {
            $this->watched = false;
        }
    }

    public function render()
    {
        return view('livewire.information.add-tag-news');
    }
}
