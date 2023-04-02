<?php

namespace App\Http\Livewire\Fees;

use Livewire\Component;
use App\Models\Department;

class Departments extends Component
{
    

    public function render()
    {
        $results = Department::withCount('members')->whereExtra('Ibu Pejabat')->orderby('name')->get();
        return view('livewire.fees.departments', compact('results'))->extends('layouts.master');
    }
}
