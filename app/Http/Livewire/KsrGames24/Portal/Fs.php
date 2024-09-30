<?php

namespace App\Http\Livewire\KsrGames24\Portal;

use Livewire\Component;
use App\Models\Contigent;
use App\Models\Fixture;
use App\Models\Grouping;
use App\Models\Sport;

class Fs extends Component
{
    public function render()
    {

        $this->sport_id = Sport::select('id','name','venue')->whereName('FUTSAL')->first();

        // dd($this->sport_id);

        $id = $this->sport_id->id;
        $a = Contigent::whereHas('grp', function($q) use($id) {
             $q->where('name', 'A')->where('sport_id', $id)->orderby('order');
         })->get()->sortByDesc('fsgoaldifference')->sortByDesc('fsgoal')->sortByDesc('fspoints');
        $b = Contigent::whereHas('grp', function($q) use($id) {
             $q->where('name', 'B')->where('sport_id', $id)->orderby('order');
         })->get()->sortByDesc('fsgoaldifference')->sortByDesc('fsgoal')->sortByDesc('fspoints');
         
         $fixtures = Fixture::where('sport_id', $id)->orderby('order')->get();

        return view('livewire.ksr-games24.portal.fs', compact('a','b','fixtures'))->extends('layouts.master-without-nav');
    }
}
