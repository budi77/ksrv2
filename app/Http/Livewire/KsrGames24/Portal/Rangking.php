<?php

namespace App\Http\Livewire\KsrGames24\Portal;

use Livewire\Component;
use App\Models\Contigent;
use App\Models\Sport;
use App\Models\Standing;

class Rangking extends Component
{
    public $sports,$teams, $contigents, $sport_id, $contigent_id, $rank, $order, $results, $data_id, $name;

    public function render()
    {
        $standings = Contigent::whereVip(0)->get()->sortByDesc('forth')->sortByDesc('third')->sortByDesc('second')->sortByDesc('first')->sortByDesc('StandingPoints');
        $this->results = Standing::orderby('sport_id', 'DESC')->orderby('rank')->get();
        $this->sports = Sport::all();

        return view('livewire.ksr-games24.portal.rangking', compact('standings'))->extends('layouts.master-without-nav');
    }
}
