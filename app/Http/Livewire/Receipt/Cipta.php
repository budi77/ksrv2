<?php

namespace App\Http\Livewire\Receipt;

use Livewire\Component;
use App\Models\Department;
use Carbon\Carbon;
use App\Models\Member;
use App\Models\Fee;

class Cipta extends Component
{
    public $receipt_no, $receipt_date, $receive_from, $receive_by, $ringgit, $payment_for, $payment_method, $remarks;
    public $payment_date, $date_start, $date_end, $results, $department_id, $sum;

    public function render()
    {
        $departments = Department::where('Extra', 'Ibu Pejabat')->orderBy('name')->get();

        return view('livewire.receipt.cipta', compact('departments'))->extends('layouts.master');
    }

    public function getData()
    {
        $this->results = Fee::where('department_id', $this->department_id )->whereBetween('payment_date', [$this->date_start, $this->date_end])->get();
        $this->sum = Fee::where('department_id', $this->department_id )->whereBetween('payment_date', [$this->date_start, $this->date_end])->sum('value');
        // dd($this->sum);
    }
}
