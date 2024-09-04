<?php

namespace App\Http\Livewire\KsrGames24\Bowling;

use Livewire\Component;
use App\Models\Contigent;
use App\Models\Standing;
use App\Models\Grouping;
use App\Models\Sport;

class Games extends Component
{
    public $data_id, $contigents,$results, $sport_id;

    public function mount()
    {

        $this->contigents = Contigent::orderby('name')->get();
        $this->sport_id = Sport::select('id')->whereName('BOWLING')->first();

    }

    public function render()
    {
      

        $this->results = Standing::where('sport_id', $this->sport_id->id )->orderby('sport_id')->orderby('rank')->get();


        return view('livewire.ksr-games24.bowling.games');
    }
}
