<?php

namespace App\Http\Livewire\Parametrage;

use App\Models\Niveau;
use Livewire\Component;
use Livewire\WithPagination;

class NiveauTable extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $sortField = "id";
    public $sortAsc = 'desc';
    public $search = '';
    public $updateMode=false;
    public $level,$niveau_id;

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
        Niveau::destroy($id);
    }


    public function cancel()
    {
        $this->updateMode = false;
        $this->level = "";
        $this->emit('closeModal','createModal');
    }

    public function store()
    {
        $this->validate(
            [
                'level' => 'required|string|min:3|unique:niveaux,level',
            ],
        );
        Niveau::create([
            'level' => strtoupper($this->level)
        ]);

        //$this->emit('closeModal','createModal');

        $this->emit('swal:alert', [
            'icon'  => 'success',
            'timeout' => 2500,
            'title'  => "Votre enregistrement a été bien éffectuée",
        ]);
        $this->level="";

    }

    public function edit($id)
    {
        $doc = Niveau::select('level', 'id')->findOrFail($id);
        $this->niveau_id = $id;
        $this->level = $doc->level;

        $this->updateMode = true;
        $this->emit('openModal','createModal');
    }

    public function update(){
        $this->validate(
            [
                'level' => 'required|string|min:3',
            ]);
        $doc = Niveau::find($this->niveau_id);
        $doc->update([
            'level' => strtoupper($this->level),
        ]);
        $this->updateMode = false;
        $this->level = "";
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
        return view('livewire.parametrage.niveau-table',[
            "niveaux" => Niveau::select('level', 'id', 'updated_at')
                ->where('level','like',$word)
                ->orderBy($this->sortField,$this->sortAsc)
                ->paginate(10)
        ]);
    }
}
