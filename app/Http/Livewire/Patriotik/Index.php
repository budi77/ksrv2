<?php

namespace App\Http\Livewire\Patriotik;

use Livewire\Component;
use App\Models\Department;

class Index extends Component
{

    public $departments;


    public function mount()
    {
        $this->departments  = Department::orderby('name')->get();
    }
    
    public function render()
    {
        return view('livewire.patriotik.index')->extends('layouts.master-without-nav');
    }
}
