<?php

namespace App\Http\Livewire\Receipt;

use Livewire\Component;
use App\Models\Department;
use Carbon\Carbon;
use App\Models\Member;
use App\Models\Fee;
use App\Models\Receipt;

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

    public function store()
    {

        $store = Receipt::create([
            'receipt_no' => $this->receipt_no,
            'payment_date' => $this->payment_date,
            'receive_from' => $this->receipt_from,
            'receive_by' => $this->receive_by,
            'ringgit' => $this->ringgit,
            'payment_for' => $this->payment_for,
            'department_id' => $this->department_id,
            'date_start' => $this->date_start,
            'date_end' => $this->date_end,
            'payment_method' => $this->payment_method,
            'remarks' => $this->remarks,
        ]);


        $this->resetExcept('departments');

        return redirect()->route('resit.cetak', $store->id);
    }
}
