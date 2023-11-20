<?php

namespace App\Http\Livewire\KSRArena;

use Livewire\Component;
use App\Models\KsrArena;

class Index extends Component
{
    public function render()
    {

        $results = KsrArena::latest()->get();

        return view('livewire.k-s-r-arena.index', compact('results'))->extends('layouts.master');
    }
}
