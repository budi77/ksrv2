<?php

namespace App\Http\Livewire\KsrGames24\PingPong;

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
        $this->sport_id = Sport::select('id')->whereName('PING PONG')->first();

    }

    public function render()
    {
        $id = $this->sport_id->id;

        $a = Contigent::whereHas('grp', function($q) use($id) {
             $q->where('name', 'A')->where('sport_id', $id)->orderby('order');
         })->get()->sortByDesc('ppgoaldifference')->sortByDesc('pppoints');
        $b = Contigent::whereHas('grp', function($q) use($id) {
             $q->where('name', 'B')->where('sport_id', $id)->orderby('order');
         })->get()->sortByDesc('ppgoaldifference')->sortByDesc('pppoints');
        

        $fixtures = Fixture::where('sport_id', $this->sport_id->id)->orderby('order')->get();
        
        return view('livewire.ksr-games24.ping-pong.games', compact('a','b','fixtures'));
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

        $this->resetExcept('contigents','sport_id');

    }

    public function edit($id)
    {
        $this->data_id = $id;

        $data = Fixture::find($id);

        // dd($data);
        $this->mtime = $data->ext1;
        $this->mdate = $data->ext2;
        $this->contigent1 = $data->contigent1_id;
        $this->contigent2 = $data->contigent2_id;
        $this->result1 = $data->result1;
        $this->result2 = $data->result2;
        $this->order = $data->order;
        $this->court = $data->court;
        $this->stage = $data->stage;
    }
}
