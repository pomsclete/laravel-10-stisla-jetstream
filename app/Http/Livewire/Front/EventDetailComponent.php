<?php

namespace App\Http\Livewire\Front;

use App\Models\Agenda;
use Illuminate\Support\Facades\URL;
use Livewire\Component;

class EventDetailComponent extends Component
{
    public $slug;
    public $agenda;
    public $date_start,$date_end,$location,$description,$summary;

    public function downloadIcs(){
        return response()->streamDownload(function () {
            echo 'BEGIN:VCALENDAR
                    VERSION:2.0
                    PRODID:-//hacksw/handcal//NONSGML v1.0//EN
                    CALSCALE:GREGORIAN
                    BEGIN:VEVENT
                    LOCATION:'.$this->location.
                    'DESCRIPTION:'.$this->description.
                    'DTSTART:'.$this->date_start.
                    'DTEND:'.$this->date_end.
                    'SUMMARY:'.$this->summary.
                    'UID:6574e35f8d937
                    END:VEVENT
                    END:VCALENDAR';
        }, 'download-ics.ics');
    }
    public function mount(){
        if(!empty($this->slug)) {
            $this->agenda = Agenda::where('slug',$this->slug)->first();
            if (empty($this->agenda)){
                abort(404);
            }
        }else {
            header('Location: '.URL::route('agenda',app()->getLocale()));
            exit();
        }
    }

    public function render()
    {
        return view('livewire.front.event-detail-component');
    }
}
