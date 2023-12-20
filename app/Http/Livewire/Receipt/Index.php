<?php

namespace App\Http\Livewire\Receipt;

use Livewire\Component;
use App\Models\Fee;
use App\Models\Receipt;

class Index extends Component
{
    public function render()
    {
        $results = Receipt::with('fees')->get();

        // dd($results);

        return view('livewire.receipt.index', compact('results'))->extends('layouts.master');
    }
}
