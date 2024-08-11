<?php

namespace App\Http\Livewire\KsrGames24\Badminton;

use Livewire\Component;
use App\Models\Contigent;
use App\Models\Fixture;
use App\Models\Sport;
class Games extends Component
{
    public $data_id, $contigent1, $contigent2, $result1, $result2, $match, $stage, $ext1, $sport = 'Bola Tampar';

    public function mount()
    {
        $this->sport_id = Sport::select('id')->whereName('Badminton')->first();
        
        $a = Contigent::whereRelation('group','name','A')->whereRelation('group','sport_id', $this->sport_id->id)->get()->sortByDesc('goaldifference')->sortByDesc('points');

        dd($a);

    }
    public function render()
    {
        return view('livewire.ksr-games24.badminton.games');
    }
}
