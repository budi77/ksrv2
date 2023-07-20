<?php

namespace App\Http\Livewire\Patriotik;

use Livewire\Component;

class Success extends Component
{
    public function render()
    {
        return view('livewire.patriotik.success')->extends('layouts.master-without-nav');
    }
}
