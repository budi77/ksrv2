<?php

namespace App\Http\Livewire\KsrGames24\Portal;

use Livewire\Component;
use App\Models\Standing;
use App\Models\Contigent;
use App\Models\Sport;

class Bl extends Component
{
    public $results,$sports;

    public function render()
    {
        $standings = Contigent::whereVip(0)->get()->sortByDesc('blforth')->sortByDesc('blthird')->sortByDesc('blsecond')->sortByDesc('blfirst')->sortByDesc('blstandingpoints');

        $this->results = Standing::whereIn('sport_id', ['14','15','16','17','13'])->orderby('sport_id', 'DESC')->orderby('rank')->get();
        $this->sports = Sport::whereIn('id', ['14','15','16','17','13'])->get();

        return view('livewire.ksr-games24.portal.bl', compact('standings'))->extends('layouts.master-without-nav');
    }
}
