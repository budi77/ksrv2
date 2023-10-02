<?php

namespace App\Http\Livewire\Angsi;

use Livewire\Component;
use App\Models\Angsi;


class Permohonan extends Component
{

    public function render()
    {
        $results = Angsi::latest()->get();
        
        return view('livewire.angsi.permohonan', compact('results'))->extends('layouts.master');
    }
}
