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
        $sport = Sport::whereName('MENEMBAK')->first();

        // dd($sport->id);
        // $standings = Contigent::whereVip(0)->get()->sortByDesc('blforth')->sortByDesc('blthird')->sortByDesc('blsecond')->sortByDesc('blfirst');

        $this->results = Standing::where('sport_id', $sport->id)->orderby('sport_id', 'DESC')->orderby('rank')->get();

        // dd($this->results);
        // $this->sports = Sport::where('id', $sport->id)->get();
        return view('livewire.ksr-games24.portal.mk',compact('sport'))->extends('layouts.master-without-nav');
    }
}
