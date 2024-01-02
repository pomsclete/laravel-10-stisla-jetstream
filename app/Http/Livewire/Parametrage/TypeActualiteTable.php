<?php

namespace App\Http\Livewire\Parametrage;

use App\Models\TypeActualite;
use Livewire\Component;
use Livewire\WithPagination;

class TypeActualiteTable extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $sortField = "id";
    public $sortAsc = 'desc';
    public $search = '';
    public $updateMode=false;
    public $libelle,$type_id;

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


    public function cancel()
    {
        $this->updateMode = false;
        $this->libelle = "";
        $this->emit('closeModal','createModal');
    }

    public function store()
    {
        $this->validate(
            [
                'libelle' => 'required|string|min:3|unique:type_actualites,libelle-type',
            ],
        );
        TypeActualite::create([
            'libelle-type' => strtoupper($this->libelle)
        ]);

        //$this->emit('closeModal','createModal');

        $this->emit('swal:alert', [
            'icon'  => 'success',
            'timeout' => 2500,
            'title'  => "Votre enregistrement a été bien éffectuée",
        ]);
        $this->libelle="";

    }

    public function edit($id)
    {
        $doc = TypeActualite::select('libelle-type as typeActualite', 'id')->findOrFail($id);
        $this->type_id = $id;
        $this->libelle = $doc->typeActualite;

        $this->updateMode = true;
        $this->emit('openModal','createModal');
    }

    public function update(){
        $this->validate(
            [
                'libelle' => 'required|string|min:3',
            ]);
        $doc = TypeActualite::find($this->type_id);
        $doc->update([
            'libelle-type' => strtoupper($this->libelle),
        ]);
        $this->updateMode = false;
        $this->libelle = "";
        $this->emit('closeModal','createModal');
        $this->emit('swal:alert', [
            'icon'  => 'success',
            'timeout' => 2500,
            'title'  => "La modification a été bien éffectuée",
        ]);
    }

    public function destroy($id)
    {
       TypeActualite::destroy($id);
    }

    public function render()
    {
        $word = '%'.$this->search.'%';
        return view('livewire.parametrage.type-actualite-table',[
            "types" => TypeActualite::select('libelle-type as typeActualite', 'id', 'updated_at')
                                        ->where('libelle-type','like',$word)
                                        ->orderBy($this->sortField,$this->sortAsc)
                                        ->paginate(10)
        ]);
    }
}
