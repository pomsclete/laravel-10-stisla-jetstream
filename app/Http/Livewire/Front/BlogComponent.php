<?php

namespace App\Http\Livewire\Front;

use App\Models\Actualite;
use App\Models\Tag;
use Illuminate\Pagination\Paginator;
use Livewire\Component;
use Livewire\WithPagination;

class BlogComponent extends Component
{
    use WithPagination;
    public $perPage = 2;
    public $show = true;
    public $tags =[];
    public $search="";
    public $vues = 2;
    public $phares = [];

    public function loadMore(){
        sleep(2);
        $word = "%".$this->search."%";
        $this->vues = Actualite::where('etat',1)
            ->where('titre', 'like',$word)
            ->orWhere('titre_en','like',$word)
            ->orderBy('une','desc')->orderBy('id','desc')->count();

        $this->perPage = $this->perPage + 2;
        if($this->vues <= $this->perPage){
            $this->show = false;
        }
    }

    public function mount(){
        $this->phares = Actualite::where('une',1)->orderBy('id','desc')->skip(0)->take(3)->get();
    }

    public function updatedSearch(){
        $word = "%".$this->search."%";
        $vues = Actualite::where('etat',1)
            ->where('titre', 'like',$word)
            ->orWhere('titre_en','like',$word)
            ->orderBy('une','desc')->orderBy('id','desc')->count();
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
       $postss =  Actualite::where('etat',1)
                            ->where('titre', 'like',$word)
                            ->orWhere('titre_en','like',$word)
                            ->orderBy('id','desc')->paginate($this->perPage);

        return view('livewire.front.blog-component',[
            'posts' => $postss,
        ]);
    }
}
