<?php

namespace App\Http\Livewire\Front;

use App\Models\Actualite;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class HomeComponent extends Component
{
    public $slides = [];
    public $accreditations = [];
    public $agendas = [];

    public function mount(){
        $this->slides = DB::table('slides')->orderBy('id','desc')->skip(0)->take(4)->get();
        $this->accreditations = DB::table('accreditations')->orderBy('id','desc')->skip(0)->take(6)->get();
        $this->agendas = DB::table('agendas')->orderBy('id','desc')->skip(0)->take(3)->get();
    }

    public function render()
    {
        return view('livewire.front.home-component', [
            'posts' =>  Actualite::where('une',1)->orderBy('id','desc')->skip(0)->take(3)->get(),
        ]);
    }
}
