<?php

namespace App\Http\Livewire\KsrGames24\Badminton;

use Livewire\Component;
use App\Models\Contigent;
use App\Models\Fixture;
use App\Models\Grouping;
use App\Models\Sport;
class Games extends Component
{
    public $data_id, $contigent1, $contigent2, $result1, $result2, $match, $stage, $order,$court;
    public $contigent,$mdate, $mtime;

    public function mount()
    {

        $this->contigents = Contigent::orderby('name')->get();
        $this->sport_id = Sport::select('id')->whereName('Badminton')->first();
        
       

        // dd($a);

    }
    public function render()
    {
        $a = Contigent::whereRelation('group','sport_id', 3)->get()->sortByDesc('goaldifference')->sortByDesc('points');

        // $c = Contigent::whereHas(['group', function($q) {
        //      $q->where('name', 'A')->where('sport_id', 3);
        // }])->get()->sortByDesc('goaldifference')->sortByDesc('points');
        // $a = Grouping::with('contigent')->where('sport_id', $this->sport_id->id)->where('name','A')->get()->sortByDesc('goaldifference')->sortByDesc('points');
        $b = Grouping::with('contigent')->where('sport_id', $this->sport_id->id)->where('name','B')->get()->sortByDesc('goaldifference')->sortByDesc('points');
        
        dd($a);
        return view('livewire.ksr-games24.badminton.games', compact('a','b'));
    }

    public function store()
    {
        $store = Fixture::updateOrCreate(['id' => $this->data_id], 
        [
            'contigent1_id' => $this->contigent1,
            'contigent2_id' => $this->contigent2,
            'result1' => $this->result1,
            'result2' => $this->result2,
            'order' => $this->order,
            'sport_id' => $this->sport_id->id,
            'court' => $this->court,
            'ext1' => $this->mtime,
            'ext2' => $this->mdate,
            'stage' => $this->stage,
        ]);

    }
}
