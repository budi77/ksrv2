<?php

namespace App\Http\Livewire\KsrGames24\Portal;

use Livewire\Component;
use App\Models\Standing;
use App\Models\Contigent;
use App\Models\Sport;

class Mk extends Component
{
    public $results,$sports;

    public function render()
    {
        $standings = Contigent::whereVip(0)->get()->sortByDesc('blforth')->sortByDesc('blthird')->sortByDesc('blsecond')->sortByDesc('blfirst');

        $this->results = Standing::whereIn('sport_id', ['20'])->orderby('sport_id', 'DESC')->orderby('rank')->get();
        $this->sports = Sport::whereIn('id', ['20'])->get();
        return view('livewire.ksr-games24.portal.mk', compact('standings'))->extends('layouts.master-without-nav');
    }
}
