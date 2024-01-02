<?php

namespace App\Http\Livewire\Front;

use App\Models\Actualite;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Livewire\Component;

class BlogDetailComponent extends Component
{
    public $slug;
    public $post;
    public $posts = [];
    public $tagActus = [];

    public function mount(){
        if(!empty($this->slug)){
            $this->post = Actualite::where('slug_fr',$this->slug)->first();
            $this->posts = Actualite::where('id','<>',$this->post->id)->orderBy('id','desc')->skip(0)->take(3)->get();
            $this->tagActus = DB::table('actualite_tag')
                ->select('libelle','libelle_en','tags.id as idTag')
                ->join('tags','tags.id','=','actualite_tag.tag_id')
                ->where('actualite_id', '=', $this->post->id)
                ->get();
            if (empty($this->post)){
                abort(404);
            }
        }else{
            //dd('test');
            header('Location: '.URL::route('blog',app()->getLocale()));
            exit();
        }

    }

    public function render()
    {
        return view('livewire.front.blog-detail-component',[
            'tags' =>  DB::table('actualite_tag')
                ->select('libelle','libelle_en','tags.id as idTag',DB::raw('count(*) as countD'))
                ->join('tags','tags.id','=','actualite_tag.tag_id')
                ->orderBy('countD','desc')
                ->groupBy('idTag','libelle','libelle_en')
                ->skip(0)->take(10)->get()
        ]);
    }
}
