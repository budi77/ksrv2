<?php

namespace App\Http\Livewire\Patriotik;

use Livewire\Component;

use App\Models\Patriotik;

class Application extends Component
{
    public function render()
    {
        $results = Patriotik::latest()->get();

        // dd($results);

        return view('livewire.patriotik.application', compact('results'))->extends('layouts.master');
    }
}
