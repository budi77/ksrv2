<?php

namespace App\Http\Livewire\KSRArena\Netball;

use Livewire\Component;
use App\Models\Team;
use App\Models\NetballFixture;

class Games extends Component
{
    public $data_id, $team1, $team2, $result1, $result2, $match, $stage, $ext1;

    public function render()
    {
        $standings = Team::whereSport('Bola Jaring')->get()->sortByDesc('points');

        $teams = Team::whereSport('Bola Jaring')->get();

        $groups = NetballFixture::whereExt1('Kumpulan')->orderby('match')->get();

        return view('livewire.k-s-r-arena.netball.games', compact(['teams', 'groups', 'standings']))->extends('layouts.master');
    }

    public function store()
    {
        $store = NetballFixture::updateOrCreate(['id' => $this->data_id], 
        [
            'match' => $this->match,
            'team1_id' => $this->team1,
            'team2_id' => $this->team2,
            'result1' => $this->result1,
            'result2' => $this->result2,
            'ext1' => $this->ext1,

        ]);

        $this->reset();
    }

    public function edit($id)
    {
        $this->data_id = $id;

        $data = NetballFixture::find($id);

        $this->match = $data->match;
        $this->team1 = $data->team1_id;
        $this->team2 = $data->team2_id;
        $this->result1 = $data->result1;
        $this->result2 = $data->result2;
        $this->ext1 = $data->ext1;
    }
}
