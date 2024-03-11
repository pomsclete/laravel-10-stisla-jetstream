<?php

namespace App\Http\Livewire\Front;

use App\Models\Accreditation;
use Livewire\Component;

class AccreditationComponent extends Component
{
    public function render()
    {
        return view('livewire.front.accreditation-component',[
            'accreditations' => Accreditation::get()
        ]);
    }
}
