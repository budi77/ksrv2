<?php

namespace App\Http\Livewire\Yuran;

use Livewire\Component;
use App\Models\Fee;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class Kemaskini extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    use LivewireAlert;


    public $search, $data_id, $member_name, $department, $year, $value, $mode, $payment_date, $editmode = false, $deletemode = false ;

    public function render()
    {
        $fees = Fee::with('member')->whereHas('member', function($q) {
            $q->where('name', 'like', '%'. $this->search . '%' );            
        })
        ->paginate(50);
            
        
        return view('livewire.yuran.kemaskini', compact('fees'))->extends('layouts.master');
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

        $this->editmode = true;
        $this->deletemode = false;

    }

    public function update()
    {
        $u = Fee::updateOrCreate(['id' => $this->data_id],[
            'year' => $this->year,
            'value' => $this->value,
            'mode' => $this->mode,
            'payment_date' => $this->payment_date
        ]);

        $this->resetExcept('search');

        $this->alert('success', 'Updated!');

        $this->editmode = false;
        $this->deletemode = false;

    }

    public function delete($id)
    {
        $this->data_id = $id;

        $q = Fee::find($id);

        $this->member_name = $q->member->name;
        $this->department = $q->department->name;
        $this->year = $q->year;
        $this->value = $q->value;
        $this->mode = $q->mode;
        $this->payment_date = $q->payment_date;

        $this->deletemode = true;
        $this->editmode = false;

    }

    public function confirmed()
    {
        $q = Fee::find($this->data_id)->delete();
        $this->reset();
        $this->deletemode = false;
        $this->editmode = false;



    }

    public function clear()
    {
    

        $this->resetExcept('search');
    }
}
