<?php

namespace App\Http\Livewire\Parametrage;

use App\Models\Campus;
use Livewire\Component;
use Livewire\WithPagination;

class CampusTable extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $sortField = "id";
    public $sortAsc = 'desc';
    public $search = '';
    public $updateMode=false;
    public $campus,$niveau_id;

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
        Campus::destroy($id);
    }


    public function cancel()
    {
        $this->updateMode = false;
        $this->campus = "";
        $this->emit('closeModal','createModal');
    }

    public function store()
    {
        $this->validate(
            [
                'campus' => 'required|string|min:3|unique:campuses,libelle_campus',
            ],
        );
        Campus::create([
            'libelle_campus' => $this->campus
        ]);

        //$this->emit('closeModal','createModal');

        $this->emit('swal:alert', [
            'icon'  => 'success',
            'timeout' => 2500,
            'title'  => "Votre enregistrement a été bien éffectuée",
        ]);
        $this->campus="";

    }

    public function edit($id)
    {
        $doc = Campus::select('libelle_campus', 'id')->findOrFail($id);
        $this->niveau_id = $id;
        $this->campus = $doc->libelle_campus;

        $this->updateMode = true;
        $this->emit('openModal','createModal');
    }

    public function update(){
        $this->validate(
            [
                'libelle_campus' => 'required|string|min:3',
            ]);
        $doc = Campus::find($this->niveau_id);
        $doc->update([
            'libelle_campus' => $this->campus,
        ]);
        $this->updateMode = false;
        $this->campus = "";
        $this->emit('closeModal','createModal');
        $this->emit('swal:alert', [
            'icon'  => 'success',
            'timeout' => 2500,
            'title'  => "La modification a été bien éffectuée",
        ]);
    }

    public function render()
    {
        $word = '%'.$this->search.'%';
        return view('livewire.parametrage.campus-table',[
            "campuses" => Campus::select('libelle_campus', 'id', 'updated_at')
                ->where('libelle_campus','like',$word)
                ->orderBy($this->sortField,$this->sortAsc)
                ->paginate(10)
        ]);
    }
}
