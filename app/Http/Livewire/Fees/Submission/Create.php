<?php

namespace App\Http\Livewire\Fees\Submission;

use Livewire\Component;

class Create extends Component
{
    public function render()
    {
        return view('livewire.fees.submission.create')->extends('layouts.master');
    }
}
