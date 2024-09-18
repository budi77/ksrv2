<?php

namespace App\Http\Livewire\KsrGames24\Portal;

use Livewire\Component;
use App\Models\Contigent;
use App\Models\Fixture;
use App\Models\Grouping;
use App\Models\Sport;

class Ttl extends Component
{
    public $data_id,  $match, $stage, $order,$court, $sport_id;

    public function render()
    {

        $this->sport_id = Sport::select('id','name','venue')->whereName('TARIK TALI LELAKI')->first();

        $id = $this->sport_id->id;

        $fixtures = Fixture::where('sport_id', $id)->orderby('order')->get();


        return view('livewire.ksr-games24.portal.ttl', compact('fixtures'))->extends('layouts.master-without-nav');
    }
}
