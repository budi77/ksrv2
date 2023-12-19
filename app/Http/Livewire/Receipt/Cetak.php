<?php

namespace App\Http\Livewire\Receipt;

use Livewire\Component;

class Cetak extends Component
{
    public function render()
    {
        return view('livewire.receipt.cetak')->extends('layouts.master');
    }
    
}
