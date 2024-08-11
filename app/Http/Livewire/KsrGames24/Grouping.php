<?php

namespace App\Http\Livewire\KsrGames24;

use Livewire\Component;
use App\Models\Grouping as Kumpulan;
use App\Models\Sport;
use App\Models\Contigent;

class Grouping extends Component
{

    public $sports, $contigents, $sport_id, $contigent_id, $name, $order, $results, $data_id;

    public function mount()
    {
        $this->sports = Sport::orderby('name')->get();
        $this->contigents = Contigent::orderby('name')->get();

        // dd($this->sports);
    }
    public function render()
    {
        $this->results = Kumpulan::orderby('sport_id')->orderby('name')->orderby('order')->get();
        return view('livewire.ksr-games24.grouping');
    }

    public function store()
    {
        $store = Kumpulan::updateOrCreate(['id' => $this->data_id], 
        [
            'name' => $this->name,
            'order' => $this->order,
            'contigent_id' => $this->contigent_id,
            'sport_id' => $this->sport_id
        ]);

        $this->resetExcept('results','sports','contigents','sport_id');
    }
}
