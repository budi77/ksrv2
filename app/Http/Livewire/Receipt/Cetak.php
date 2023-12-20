<?php

namespace App\Http\Livewire\Receipt;

use Livewire\Component;
use App\Models\Fee;
use App\Models\Receipt;

class Cetak extends Component
{

    public $data, $members, $sum;

    public function mount(Receipt $receipt)
    {
        // dd($receipt);

        $this->data = $receipt;
        $this->members = Fee::where('department_id', $receipt->department_id )->whereMode('TUNAI')->whereBetween('payment_date', [$receipt->date_start, $receipt->date_end])->get();
        $this->sum = Fee::where('department_id', $receipt->department_id )->whereBetween('payment_date', [$receipt->date_start, $receipt->date_end])->sum('value');
    }

    public function render()
    {
        return view('livewire.receipt.cetak')->extends('layouts.master');
    }
    
}
