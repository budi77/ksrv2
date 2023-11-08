<?php

namespace App\Http\Livewire\Pancing;

use Livewire\Component;
use App\Models\Department;
use App\Models\Pancing;

class Senarai extends Component
{
    public function render()
    {
        $results = Pancing::latest()->get();

        return view('livewire.pancing.senarai', compact('results'))->extends('layouts.master');
    }
}
