<?php

namespace App\Http\Livewire\KSRArena\Volleyball;

use Livewire\Component;
use App\Models\Team;
use App\Models\NetballFixture;

class Index extends Component
{
    public function render()
    {
        $a = Team::whereRelation('group','name','A')->whereSport('Bola Tampar')->get()->sortByDesc('goaldifference')->sortByDesc('points');
        $b = Team::whereRelation('group','name','B')->whereSport('Bola Tampar')->get()->sortByDesc('goaldifference')->sortByDesc('points');
        $c = Team::whereRelation('group','name','C')->whereSport('Bola Tampar')->get()->sortByDesc('goaldifference')->sortByDesc('points');
        $d = Team::whereRelation('group','name','D')->whereSport('Bola Tampar')->get()->sortByDesc('goaldifference')->sortByDesc('points');

        $groups = NetballFixture::whereExt1('Kumpulan')->whereExt2('Bola Tampar')->orderby('match')->get();

        $quarters = NetballFixture::whereExt1('Suku akhir')->whereExt2('Bola Tampar')->orderby('match')->get();

        $semis = NetballFixture::whereExt1('Separuh Akhir')->whereExt2('Bola Tampar')->orderby('match')->get();
        
        $final = NetballFixture::whereExt1('Akhir')->whereExt2('Bola Tampar')->orderby('match')->get();

        return view('livewire.k-s-r-arena.volleyball.index', compact(['groups', 'a','b','c','d','quarters','semis','final']))->extends('layouts.master-without-nav');
    }
}
