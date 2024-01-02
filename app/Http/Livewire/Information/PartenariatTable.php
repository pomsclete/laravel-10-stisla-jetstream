<?php

namespace App\Http\Livewire\Information;

use App\Models\Partenariat;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class PartenariatTable extends Component
{
    use WithPagination,WithFileUploads;

    public $perPage = 10;
    public $sortField = "id";
    public $sortAsc = 'desc';
    public $search = '';
    public $updateMode=false;
    public $nom,$logo,$partenaire_id,$date_convention,$imageLogo;

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
            'title'       => 'Suppression du partenaire',
            'text'        => "",
            'confirmText' => 'Oui, Supprimer!',
            'method'      => 'deleteItem',
            'params'      => $id,
        ]);
    }

    public function destroy($id)
    {
        Partenariat::destroy($id);
    }


    public function cancel()
    {
        $this->updateMode = false;
        $this->nom = "";
        $this->date_convention = "";
        $this->logo = "";
        $this->emit('closeModal','createModal');
    }

    public function store()
    {
        $this->validate(
            [
                'nom' => 'required|string',
                'logo' => 'required|image',
                'date_convention' => 'required|date'
            ],
        );
        $filename_avant = $this->logo->hashName();
        $this->logo->store('partenaires','public');
        Partenariat::create([
            'nom' => strtoupper($this->nom),
            'logo' => $filename_avant,
            'dateSignature' => $this->date_convention
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
        $doc = Partenariat::findOrFail($id);
        $this->partenaire_id = $id;
        $this->nom = $doc->nom;
        $this->imageLogo = $doc->logo;
        $this->date_convention = $doc->dateSignature;

        $this->updateMode = true;
        $this->emit('openModal','createModal');
    }

    public function update(){
        $this->validate(
            [
                'nom' => 'required|string',
                'date_convention' => 'required|date'
            ]);
        $doc = Partenariat::find($this->partenaire_id);
        if($this->logo == null){
            $fichier = $doc->logo;
        }else {
            $fichier = $this->logo->hashName();
            $this->logo->store('partenaire','public');
        }
        $doc->update([
            'nom' => strtoupper($this->nom),
            'logo' => $fichier,
            'dateSignature' => $this->date_convention
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
        return view('livewire.information.partenariat-table',[
            "partenaires" => Partenariat::select('nom','logo', 'id', 'updated_at','dateSignature')
                ->where('nom','like',$word)
                ->orderBy($this->sortField,$this->sortAsc)
                ->paginate(10)
        ]);
    }
}
