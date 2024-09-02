<?php

namespace App\Http\Livewire\KsrGames24;

use Livewire\Component;
use App\Models\Contigent as Kontigen;

class Contigent extends Component
{
    public $results, $name, $code, $members, $data_id, $vip = 0, $color;
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
            'vip' => $this->vip,
            'ext2' => $this->color,
        ]);

        $this->resetExcept('results');
    }

    
    public function edit($id)
    {
        $this->data_id = $id;

        $data = Kontigen::find($id);

        // dd($data);
        $this->name = $data->name;
        $this->code = $data->code;
        $this->members = $data->cext1;
        $this->vip = $data->vip;
        $this->color = $data->ext2;
      
    }
}
