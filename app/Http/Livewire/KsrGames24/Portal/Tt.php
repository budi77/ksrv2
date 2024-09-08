<?php

namespace App\Http\Livewire\KsrGames24\Portal;
use App\Models\Standing;
use App\Models\Contigent;
use App\Models\Sport;

use Livewire\Component;

class Tt extends Component
{
    public $results,$sports;

    public function render()
    {

        $standings = Contigent::whereVip(0)->get()->sortByDesc('blforth')->sortByDesc('blthird')->sortByDesc('blsecond')->sortByDesc('blfirst');

        $this->results = Standing::whereIn('sport_id', ['9','10'])->orderby('sport_id', 'DESC')->orderby('rank')->get();
        $this->sports = Sport::whereIn('id', ['9','10'])->get();

        return view('livewire.ksr-games24.portal.tt', compact('standings'))->extends('layouts.master-without-nav');
    }
}
