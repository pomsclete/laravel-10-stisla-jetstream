<?php

namespace App\Http\Livewire\Rencontre;

use App\Models\PorteOuverte;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class JourneTable extends Component
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
            'title'       => 'Suppression de la journée',
            'text'        => "",
            'confirmText' => 'Oui, Supprimer!',
            'method'      => 'deleteItem',
            'params'      => $id,
        ]);
    }

    public function destroy($id)
    {
        PorteOuverte::destroy($id);
    }

    public function render()
    {
        $word = '%'.$this->search.'%';
        return view('livewire.rencontre.journe-table',[
            "journees" => PorteOuverte::select('titre', 'id', 'updated_at','image')
                ->where('titre','like',$word)
                ->orderBy($this->sortField,$this->sortAsc)
                ->paginate($this->perPage)
        ]);
    }
}
