<?php

namespace App\Http\Livewire\Information;

use App\Models\Actualite;
use App\Models\AnneeScolaire;
use App\Models\Tag;
use Livewire\Component;
use Livewire\WithPagination;

class NewsTable extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $sortField = "id";
    public $sortAsc = 'desc';
    public $search = '';
    public $text = "";
    public $titre,$actu_id,$actualite_id,$statut;
    public $tags = [];

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

    public function publish($id)
    {
        //
        $act = Actualite::findOrFail($id);
        ($act->etat == 0) ? $this->text="Vous êtes sur le point de mettre cette article en ligne" : $this->text="Vous êtes sur le point de mettre cette article hors ligne";
        $this->actualite_id = $act->id;
        $this->statut = ($act->etat == 0) ? 1 : 0;
        $this->emit('openModal', "deleteModal");
    }

    public function published($id,$etat){
        $doc = Actualite::find($id);
        $doc->update([
            'etat' => $etat,
        ]);
        ($etat == 1) ? $text1="L'article a été mis en ligne avec succés" : $text1="L'article a été mis hors ligne avec succés";
        $this->emit('closeModal','createModal');
        $this->emit('swal:alert', [
            'icon'  => 'success',
            'timeout' => 2500,
            'title'  => $text1,
        ]);
        $this->emit('closeModal','deleteModal');
    }

    public function delete($id)
    {
        $this->emit("swal:confirm", [
            'icon'  => 'warning',
            'title'       => "Suppression de l'actualité",
            'text'        => "",
            'confirmText' => 'Oui, Supprimer!',
            'method'      => 'deleteItem',
            'params'      => $id,
        ]);
    }

    public function destroy($id)
    {
        Actualite::destroy($id);
    }

    public function addTag($id){
        //dd($id);
        $doc = Actualite::findOrFail($id);
        $this->titre = $doc->titre;
        $this->actu_id = $doc->id;
        $this->tags = Tag::orderBy('libelle', 'asc')->get();
        $this->emit('openModal','tagModal');

    }

    public function cancelTag()
    {
        $this->actu_id = null;
        $this->tags = [];
        $this->emit('closeModal','tagModal');
    }


    public function render()
    {
        $word = '%'.$this->search.'%';
        return view('livewire.information.news-table',[
            "actualites" => Actualite::select('titre', 'id', 'updated_at','couverture','une','etat')
                ->where('titre','like',$word)
                ->orderBy($this->sortField,$this->sortAsc)
                ->paginate($this->perPage)
        ]);
    }
}
