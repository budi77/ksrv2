<?php

namespace App\Http\Livewire\KsrGames24;

use Livewire\Component;
use App\Models\Contigent as Kontigen;

class Contigent extends Component
{
    public $results, $name, $code, $members, $data_id, $vip = 0;
    public function render()
    {
        $this->results = Kontigen::orderby('name')->get();

        return view('livewire.ksr-games24.contigent');
    }

    public function store()
    {
        $store = Kontigen::updateOrCreate(['id' => $this->data_id], 
        [
            'name' => $this->name,
            'code' => $this->code,
            'ext1' => $this->members,
            'vip' => $this->vip
        ]);

        $this->resetExcept('results');
    }
}
