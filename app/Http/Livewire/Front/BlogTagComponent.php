<?php

namespace App\Http\Livewire\Front;

use App\Models\Actualite;
use App\Models\Tag;
use Illuminate\Support\Facades\URL;
use Livewire\Component;

class BlogTagComponent extends Component
{
    public $perPage = 2;
    public $show = true;
    public $tags =[];
    public $search="";
    public $vues = 2;
    public $slug,$tag;

    public function loadMore(){
        sleep(2);

        $this->perPage = $this->perPage + 2;
        if($this->vues <= $this->perPage){
            $this->show = false;
        }
    }

    public function mount(){
        if(!empty($this->slug)) {
            $this->tag = Tag::where('id', base64url_decode($this->slug))->first();
            if (empty($this->tag)) {
                abort(404);
            }
        }else {
            header('Location: '.URL::route('home',app()->getLocale()));
            exit();
        }
    }



    public function render()
    {
        /*$postss =  Actualite::where('etat',1)
                            ->orderBy('id','desc')->paginate($this->perPage);*/
        $pots = Actualite::whereHas('tags', function($q){
            $q->where('tags.id', '=', base64url_decode($this->slug));
        }) ->orderBy('actualites.id','desc')->paginate($this->perPage);
        return view('livewire.front.blog-tag-component',[
            'posts' => $pots,
        ]);
    }
}
