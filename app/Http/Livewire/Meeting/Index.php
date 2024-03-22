<?php

namespace App\Http\Livewire\Meeting;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.meeting.index')->extends('layouts.master');
    }
}
