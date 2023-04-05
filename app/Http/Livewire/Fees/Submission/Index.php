<?php

namespace App\Http\Livewire\Fees\Submission;

use Livewire\Component;
use App\Models\Department;

class Index extends Component
{
    public $departments, $department, $mode;

    public function mount()
    {

        $this->departments = Department::orderby('name')->get();

    }
    public function render()
    {
        return view('livewire.fees.submission.index')->extends('layouts.master');
    }

    public function showModal()
    {
        // dd('1');
        $this->dispatchBrowserEvent('show-modal');

    }
}
