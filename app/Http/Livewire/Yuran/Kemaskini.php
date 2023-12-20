<?php

namespace App\Http\Livewire\Yuran;

use Livewire\Component;
use App\Models\Fee;

class Kemaskini extends Component
{

    public $fees, $search, $data_id, $member_name, $department, $year, $value, $mode, $payment_date ;

    public function render()
    {
        $this->fees = Fee::with('member')->whereHas('member', function($q) {
            $q->where('name', 'like', '%'. $this->search . '%' );            
        })
        ->get();
            
        
        return view('livewire.yuran.kemaskini')->extends('layouts.master');
    }

    public function show($id)
    {
        $this->data_id = $id;

        $q = Fee::find($id);

        $this->member_name = $q->member->name;
        $this->department = $q->department->name;
        $this->year = $q->year;
        $this->value = $q->value;
        $this->mode = $q->mode;
        $this->payment_date = $q->payment_date;


    }

    public function update()
    {
        $u = Fee::updateOrCreate(['id' => $this->data_id],[
            'year' => $this->year,
            'value' => $this->value,
            'mode' => $this->mode,
            'payment_date' => $this->payment_date
        ]);

        $this->resetExcept('fees');
    }
}
