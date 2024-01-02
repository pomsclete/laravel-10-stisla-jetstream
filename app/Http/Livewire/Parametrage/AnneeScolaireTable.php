<?php

namespace App\Http\Livewire\Parametrage;

use App\Models\AnneeScolaire;
use Livewire\Component;
use Livewire\WithPagination;

class AnneeScolaireTable extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $sortField = "id";
    public $sortAsc = 'desc';
    public $search = '';
    public $updateMode=false;
    public $annee_scolaire,$niveau_id;

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
        AnneeScolaire::destroy($id);
    }


    public function cancel()
    {
        $this->updateMode = false;
        $this->annee_scolaire = "";
        $this->emit('closeModal','createModal');
    }

    public function store()
    {
        $this->validate(
            [
                'annee_scolaire' => 'required|string|min:3|unique:annee_scolaires,year|regex:/\d\d\d\d-\d\d\d\d/',
            ],
        );
        AnneeScolaire::create([
            'year' => strtoupper($this->annee_scolaire)
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
        $doc = AnneeScolaire::select('year', 'id')->findOrFail($id);
        $this->niveau_id = $id;
        $this->annee_scolaire = $doc->year;

        $this->updateMode = true;
        $this->emit('openModal','createModal');
    }

    public function update(){
        $this->validate(
            [
                'annee_scolaire' => 'required|string|min:3|regex:/\d\d\d\d-\d\d\d\d/',
            ]);
        $doc = AnneeScolaire::find($this->niveau_id);
        $doc->update([
            'year' => strtoupper($this->annee_scolaire),
        ]);
        $this->updateMode = false;
        $this->annee_scolaire = "";
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
        return view('livewire.parametrage.annee-scolaire-table',[
            "annees" => AnneeScolaire::select('year', 'id', 'updated_at')
                ->where('year','like',$word)
                ->orderBy($this->sortField,$this->sortAsc)
                ->paginate(10)
        ]);
    }
}
