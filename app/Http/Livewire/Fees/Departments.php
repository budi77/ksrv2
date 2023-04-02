<?php

namespace App\Http\Livewire\Fees;

use Livewire\Component;
use App\Models\Department;
use Carbon\Carbon;

class Departments extends Component
{
    

    public $currYear;

    public function render()
    {

        $this->currYear =  Carbon::now()->year;

        // dd($currYear);

        $results = Department::withCount(['active_members', 'totalpaidmemberforcurrentyear' => function ($query) {
            $query->where('year',$this->currYear);
        }])
        ->whereExtra('Ibu Pejabat')
        ->orderby('name')
        ->get();

        // dd($results);

        return view('livewire.fees.departments', compact('results'))->extends('layouts.master');
    }
}
