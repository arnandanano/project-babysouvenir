<?php

namespace App\Livewire\Admin\Kategori;

use App\Models\Kategori;
use Livewire\Component;
use Livewire\WithPagination;


class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $kategori_id;
    
    public function hapusKategori($kategori_id)
    {
        $this->kategori_id = $kategori_id;
    }

    public function destroyKategori()
    {
        $kategori = Kategori::find($this->kategori_id);
        $kategori->delete();
        session()->flash('message', 'Kategori Dihapus');
        $this->dispatch('close-modal');
        //$this->dispatchBrowserEvent('close-modal', $kategori);
    }
    
    public function render()
    {
        //$macam_kategori = Kategori::orderBy('id','ASC')->paginate(2);
        $macam_kategori = Kategori::orderBy('id','ASC')->paginate(10);
        return view('livewire.admin.kategori.index',[
            'macam_kategoris' => $macam_kategori
        ]);
    }
}
