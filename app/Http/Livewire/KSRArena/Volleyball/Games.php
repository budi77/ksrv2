<?php

namespace App\Http\Livewire\KSRArena\Volleyball;

use Livewire\Component;
use App\Models\Team;
use App\Models\NetballFixture;

class Games extends Component
{
    public $data_id, $team1, $team2, $result1, $result2, $match, $stage, $ext1, $sport = 'Bola Tampar';

    public function render()
    {
        $a = Team::whereRelation('group','name','A')->whereSport('Bola Tampar')->get()->sortByDesc(function ($value) {
            return $value['points'].'-'.$value['goaldifference'];

        });
        $b = Team::whereRelation('group','name','B')->whereSport('Bola Tampar')->get()->sortByDesc(function ($value) {
            return $value['points'].'-'.$value['goaldifference'];

        });
        $c = Team::whereRelation('group','name','C')->whereSport('Bola Tampar')->get()->sortByDesc(function ($value) {
            return $value['points'].'-'.$value['goaldifference'];

        });
        $d = Team::whereRelation('group','name','D')->whereSport('Bola Tampar')->get()->sortByDesc(function ($value) {
            return $value['points'].'-'.$value['goaldifference'];

        });

        $teams = Team::whereSport('Bola Tampar')->get();

        $groups = NetballFixture::whereExt1('Kumpulan')->whereExt2('Bola Tampar')->orderby('match')->get();

        $quarters = NetballFixture::whereExt1('Suku akhir')->whereExt2('Bola Tampar')->orderby('match')->get();

        $semis = NetballFixture::whereExt1('Separuh Akhir')->whereExt2('Bola Tampar')->orderby('match')->get();
        
        $final = NetballFixture::whereExt1('Akhir')->whereExt2('Bola Tampar')->orderby('match')->get();

        return view('livewire.k-s-r-arena.volleyball.games', compact(['teams', 'groups', 'a','b','c','d','quarters','semis','final']))->extends('layouts.master');
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
            'ext2' => $this->sport,

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
