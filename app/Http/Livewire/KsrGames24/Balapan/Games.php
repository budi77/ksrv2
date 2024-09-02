<?php

namespace App\Http\Livewire\KsrGames24\Balapan;

use Livewire\Component;
use App\Models\Contigent;
use App\Models\Fixture;
use App\Models\Grouping;
use App\Models\Sport;
use App\Models\Standing;

class Games extends Component
{
    public $sports, $results;
    public function render()
    {        
        $standings = Contigent::whereVip(0)->get()->sortByDesc('blforth')->sortByDesc('blthird')->sortByDesc('blsecond')->sortByDesc('blfirst');
        $this->sports = Sport::whereIn('id', ['14','15','16','17','18'])->get();
        $this->results = Standing::whereIn('sport_id', ['14'.'15','16','17','18'])->orderby('sport_id', 'DESC')->orderby('rank')->get();

        // dd($this->sports);

        return view('livewire.ksr-games24.balapan.games', compact('standings'));
    }
}
