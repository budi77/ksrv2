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
    
    public $sports,$teams, $contigents, $sport_id, $contigent_id, $rank, $order, $results, $data_id, $name;

    public function render()
    {        
        $standings = Contigent::whereVip(0)->get()->sortByDesc('blforth')->sortByDesc('blthird')->sortByDesc('blsecond')->sortByDesc('blfirst');
        $this->sports = Sport::whereIn('id', ['14','15','16','17','18'])->get();
        $this->results = Standing::whereIn('sport_id', ['14','15','16','17','18'])->orderby('sport_id')->orderby('rank')->get();

        // dd($this->results);

        return view('livewire.ksr-games24.balapan.games', compact('standings'));
    }

    public function store()
    {
        $store = Standing::updateOrCreate(['id' => $this->data_id], 
        [
            'contigent_id' => $this->contigent_id,
            'sport_id' => $this->sport_id,
            'rank' => $this->rank,
            'points' => 0,
            'ext1' => "-",
            'ext2' => "-",
        ]);

        $this->dispatchBrowserEvent('close-modal');


        $this->resetExcept('results','sport_id','sports','contigents');
    }

    public function edit($id)
    {
        $this->data_id = $id;

        $data = Standing::find($id);

       
        $this->contigent_id = $data->contigent_id;
        $this->sport_id = $data->sport_id;
        $this->rank = $data->rank;
     
    }

    public function update_rank($id)
    {
        $this->data_id = $id;

        $data = Standing::find($id);

        $this->name = $data->sport->name;

        $this->contigent_id = $data->contigent_id;
        $this->sport_id = $data->sport_id;
        $this->rank = $data->rank;
        

        $this->teams = Contigent::orderby('name')->get();


        $this->dispatchBrowserEvent('show-modal');

    }

    public function delete($id)
    {
        $data = Standing::find($id)->delete();

    }

}
