<?php

namespace App\Http\Livewire\KsrGames24;

use Livewire\Component;
use App\Models\Contigent;
use App\Models\Sport;
use App\Models\Standing;

class Standings extends Component
{

    public $sports,$teams, $contigents, $sport_id, $contigent_id, $rank, $order, $results, $data_id, $name;

    public function mount()
    {
        $this->sports = Sport::orderby('name')->get();
        $this->contigents = Contigent::orderby('name')->get();

        // dd($this->sports);
    }
    public function render()
    {   
        $standings = Contigent::whereVip(0)->get()->sortByDesc('forth')->sortByDesc('third')->sortByDesc('second')->sortByDesc('first');

        // dd($standings);
        $this->results = Standing::orderby('sport_id', 'DESC')->orderby('rank')->get();

        $this->sports = Sport::all();
        
        // dd($results);


        return view('livewire.ksr-games24.standings', compact('standings'))->extends('layouts.master');
    }

    public function store()
    {
        $store = Standing::updateOrCreate(['id' => $this->data_id], 
        [
            'contigent_id' => $this->contigent_id,
            'sport_id' => $this->sport_id,
            'rank' => $this->rank,
            'points' => $this->points = 0,
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
