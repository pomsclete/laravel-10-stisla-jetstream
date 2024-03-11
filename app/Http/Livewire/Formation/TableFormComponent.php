<?php

namespace App\Http\Livewire\Formation;

use App\Models\Formation;
use Livewire\Component;
use Livewire\WithPagination;

class TableFormComponent extends Component
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
            'title'       => "Suppression de la formation",
            'text'        => "",
            'confirmText' => 'Oui, Supprimer!',
            'method'      => 'deleteItem',
            'params'      => $id,
        ]);
    }

    public function destroy($id)
    {
        Formation::destroy($id);
    }

    public function render()
    {
        $word = '%'.$this->search.'%';
        return view('livewire.formation.table-form-component',[
            "formations" => Formation::select('titre', 'id', 'updated_at','couverture','duree','brochure','categorie_formation_id')
                ->where('titre','like',$word)
                ->orderBy($this->sortField,$this->sortAsc)
                ->paginate($this->perPage)
        ]);
    }
}
