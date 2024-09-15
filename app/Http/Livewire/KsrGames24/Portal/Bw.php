<?php

namespace App\Http\Livewire\KsrGames24\Portal;

use Livewire\Component;
use App\Models\Standing;
use App\Models\Contigent;
use App\Models\Sport;

class Bw extends Component
{
    public $results,$sports;

    public function render()
    {
        // $standings = Contigent::whereVip(0)->get()->sortByDesc('blforth')->sortByDesc('blthird')->sortByDesc('blsecond')->sortByDesc('blfirst');

        $this->results = Standing::whereIn('sport_id', ['12'])->orderby('sport_id', 'DESC')->orderby('rank')->get();
        $this->sports = Sport::whereIn('id', ['12'])->get();

        return view('livewire.ksr-games24.portal.bw')->extends('layouts.master-without-nav');
    }
}
