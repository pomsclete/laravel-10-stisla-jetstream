<?php

namespace App\Http\Livewire\Information;

use App\Models\Slide;
use Livewire\Component;
use Livewire\WithPagination;

class SlideTable extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $sortField = "id";
    public $sortAsc = 'desc';
    public $search = '';

    protected $listeners = ['deleteItem' => 'destroy'];

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = 'desc';
        } else {
            $this->sortAsc = 'asc';
        }

        $this->sortField = $field;
    }

    public function delete($id)
    {
        $this->emit("swal:confirm", [
            'icon'  => 'warning',
            'title'       => 'Suppression du type',
            'text'        => "",
            'confirmText' => 'Oui, Supprimer!',
            'method'      => 'deleteItem',
            'params'      => $id,
        ]);
    }

    public function destroy($id)
    {
        Slide::destroy($id);
    }

    public function render()
    {
        $word = '%'.$this->search.'%';
        return view('livewire.information.slide-table',[
            "slides" => Slide::select('titre', 'id', 'updated_at','image_avant')
                ->where('titre','like',$word)
                ->orderBy($this->sortField,$this->sortAsc)
                ->paginate($this->perPage)
        ]);
    }
}
