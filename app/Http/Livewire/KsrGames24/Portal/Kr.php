<?php

namespace App\Http\Livewire\KsrGames24\Portal;

use Livewire\Component;
use App\Models\Contigent;
use App\Models\Fixture;
use App\Models\Grouping;
use App\Models\Sport;

class Kr extends Component
{
    public $data_id,  $match, $stage, $order,$court, $sport_id;

    public function render()
    {

        $this->sport_id = Sport::select('id','name','venue')->whereName('KAROM')->first();
        $id = $this->sport_id->id;

        $a = Contigent::whereHas('grp', function($q) use($id) {
            $q->where('name', 'A')->where('sport_id', $id);
        })->get()->sortByDesc('krgoaldifference')->sortByDesc('krpoints');
       $b = Contigent::whereHas('grp', function($q) use($id) {
            $q->where('name', 'B')->where('sport_id', $id);
        })->get()->sortByDesc('krgoaldifference')->sortByDesc('krpoints');

        $fixtures = Fixture::where('sport_id', $this->sport_id->id)->orderby('order')->get();

        return view('livewire.ksr-games24.portal.kr', compact('a','b','fixtures'))->extends('layouts.master-without-nav');
    }
}