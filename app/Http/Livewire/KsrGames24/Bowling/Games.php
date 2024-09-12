<?php

namespace App\Http\Livewire\KsrGames24\Bowling;

use Livewire\Component;
use App\Models\Contigent;
use App\Models\Standing;
use App\Models\Grouping;
use App\Models\Sport;

class Games extends Component
{
    public $sports,$teams, $contigents, $sport_id, $contigent_id, $rank, $order, $data_id, $name, $points;

    public function mount()
    {

        $this->contigents = Contigent::orderby('name')->get();
        $this->sport_id = Sport::select('id')->whereName('BOWLING')->first();

        // dd($this->sport_id->id);

    }

    public function render()
    {

       $id = $this->sport_id->id;

       $results = Standing::where('sport_id', $id )->orderby('sport_id')->orderby('rank')->get();

       return view('livewire.ksr-games24.bowling.games', compact('results'));

    }

    public function store()
    {
        $store = Standing::updateOrCreate(['id' => $this->data_id], 
        [
            'contigent_id' => $this->contigent_id,
            'sport_id' => $this->sport_id->id,
            'rank' => $this->rank,
            'points' => $this->points,
            'ext1' => "-",
            'ext2' => "-",
        ]);

        $this->dispatchBrowserEvent('close-modal');

        $this->resetExcept('results','sport_id','sports','contigents');
    }

    public function edit($id)
    {

        // dd($id);

        $this->data_id = $id;

        $data = Standing::find($id);

        $this->contigent_id = $data->contigent_id;
        $this->sport_id->id = $data->sport_id;
        $this->points = $data->points;
        $this->rank = $data->rank;
     
    }

    public function update_rank($id)
    {
        $this->data_id = $id;

        $data = Standing::find($id);

        $this->name = $data->sport->name;

        $this->contigent_id = $data->contigent_id;
        $this->sport_id->id = $data->sport_id;
        $this->rank = $data->rank;
        $this->points = $data->points;

        $this->teams = Contigent::orderby('name')->get();


        $this->dispatchBrowserEvent('show-modal');

    }

    public function delete($id)
    {
        $data = Standing::find($id)->delete();

    }



}
