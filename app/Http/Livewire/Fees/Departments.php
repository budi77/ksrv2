<?php

namespace App\Http\Livewire\Fees;

use Livewire\Component;
use App\Models\Department;
use Carbon\Carbon;
use App\Models\Member;
use App\Models\Fee;

class Departments extends Component
{
    

    public $currYear, $tot_members, $tot_paid, $tot_unpaid, $tot_sum;

    public function render()
    {

        $this->currYear =  Carbon::now()->year;

        $this->tot_members = Member::whereActive('1')->count();

        $this->tot_paid = Fee::with('member')->where('year', $this->currYear )
        ->count();

        $this->tot_sum = Fee::with('member')->where('year', $this->currYear )
        ->sum('value');

        // $this->currYear =  Carbon::now()->year;

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
