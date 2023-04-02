<?php

namespace App\Http\Livewire\Fees\Departments;

use Livewire\Component;
use App\Models\Department;
use Carbon\Carbon;

class Show extends Component
{

    public function mount(Department $department)
    {

        $this->department_id = $department->id;

        $this->department_name = $department->name;

        $this->year =  Carbon::now()->format('Y');

        // dd($this->department_id);
    }

    public function render()
    {
        return view('livewire.fees.departments.show')->extends('layouts.master');
    }
}
