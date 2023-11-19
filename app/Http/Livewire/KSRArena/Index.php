<?php

namespace App\Http\Livewire\KSRArena;

use Livewire\Component;
use App\Models\KSRArena;

class Index extends Component
{
    public function render()
    {

        $results = KSRArena::latest()->get();

        return view('livewire.k-s-r-arena.index', compact('results'))->extends('layouts.master');
    }
}
