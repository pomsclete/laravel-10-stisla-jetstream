<?php

namespace App\Http\Livewire\Information;


use App\Models\Tag;
use Livewire\Component;
use Livewire\WithPagination;

class TagTable extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $sortField = "id";
    public $sortAsc = 'desc';
    public $search = '';
    public $updateMode=false;
    public $libelle_francais,$libelle_anglais,$niveau_id;

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
            'title'       => 'Suppression du tag',
            'text'        => "",
            'confirmText' => 'Oui, Supprimer!',
            'method'      => 'deleteItem',
            'params'      => $id,
        ]);
    }

    public function destroy($id)
    {
        Tag::destroy($id);
    }


    public function cancel()
    {
        $this->updateMode = false;
        $this->libelle_anglais = "";
        $this->libelle_francais = "";
        $this->emit('closeModal','createModal');
    }

    public function store()
    {
        $this->validate(
            [
                'libelle_francais' => 'required|string',
                'libelle_anglais' => 'required|string'
            ],
        );
        Tag::create([
            'libelle' => $this->libelle_francais,
            'libelle_en' => $this->libelle_anglais
        ]);

        //$this->emit('closeModal','createModal');

        $this->emit('swal:alert', [
            'icon'  => 'success',
            'timeout' => 2500,
            'title'  => "Votre enregistrement a été bien éffectuée",
        ]);
        $this->cancel();

    }

    public function edit($id)
    {
        $doc = Tag::select('libelle','libelle_en', 'id')->findOrFail($id);
        $this->niveau_id = $id;
        $this->libelle_francais = $doc->libelle;
        $this->libelle_anglais = $doc->libelle_en;

        $this->updateMode = true;
        $this->emit('openModal','createModal');
    }

    public function update(){
        $this->validate(
            [
                'libelle_francais' => 'required|string',
                'libelle_anglais' => 'required|string'
            ]);
        $doc = Tag::find($this->niveau_id);
        $doc->update([
            'libelle' => $this->libelle_francais,
            'libelle_en' => $this->libelle_anglais
        ]);
        $this->cancel();
        $this->emit('swal:alert', [
            'icon'  => 'success',
            'timeout' => 2500,
            'title'  => "La modification a été bien éffectuée",
        ]);
    }

    public function render()
    {
        $word = '%'.$this->search.'%';
        return view('livewire.information.tag-table',[
            "tags" => Tag::select('libelle','libelle_en', 'id', 'updated_at')
                ->where('libelle','like',$word)
                ->orderBy($this->sortField,$this->sortAsc)
                ->paginate(10)
        ]);
    }
}
