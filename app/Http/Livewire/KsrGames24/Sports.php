<?php

namespace App\Http\Livewire\KsrGames24;

use Livewire\Component;
use App\Models\Sport;

class Sports extends Component
{
    public $name, $venue, $icon, $pic1, $pic2, $results, $data_id;

    public function render()
    {
        $this->results = Sport::orderby('name')->get();
        return view('livewire.ksr-games24.sports');
    }

    public function store()
    {
        $store = Sport::updateOrCreate(['id' => $this->data_id], 
        [
            'name' => $this->name,
            'venue' => $this->venue,
            'icon' => $this->icon,
            'ext1' => $this->pic1
        ]);

        $this->resetExcept('results');
    }

        
    public function edit($id)
    {
        $this->data_id = $id;

        $data = Sport::find($id);

        // dd($data);
        $this->name = $data->name;
        $this->venue = $data->venue;
        $this->icon = $data->icon;
        $this->pic1 = $data->ext1;
      
    }

}
