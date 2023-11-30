<?php

namespace App\Http\Livewire\KSRArena\Netball;

use Livewire\Component;
use App\Models\Team;
use App\Models\NetballFixture;

class Index extends Component
{
    public function render()
    {
        $standings = Team::whereSport('Bola Jaring')->get()->sortByDesc('points');

        $groups = NetballFixture::whereExt1('Kumpulan')->orderby('match')->get();
        
        // dd($standings);

        return view('livewire.k-s-r-arena.netball.index', compact(['groups', 'standings']))->extends('layouts.master-without-nav');
    }
}
