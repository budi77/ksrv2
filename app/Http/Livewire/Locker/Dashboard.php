<?php

namespace App\Http\Livewire\Locker;

use Livewire\Component;
use App\Models\Locker;
use App\Models\Department;
use App\Models\LockerTenant;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Dashboard extends Component
{

    use LivewireAlert;

    public $locker_info, $locker_id, $name = '', $department_id, $period, $start, $end, $fees = 0, $tel_no, $email, $departments, $total_fee;

    public function render()
    {
        $lockers = Locker::with('tenant')->get();
        $this->departments = Department::orderby('name')->get();

        return view('livewire.locker.dashboard',compact('lockers'))->extends('layouts.master');
    }

    public function add($id)
    {

        // dd($id);
        // $tenant = LockerTenant::whereId($id)->first();

        $this->locker_info = Locker::whereId($id)->first();

        $this->locker_id = $id;

       
        $this->dispatchBrowserEvent('show-add');

    }

    public function store()
    {

        $this->end = Carbon::parse($this->start)->addMonths($this->period);
        // dd($this->department_id);

        $store = LockerTenant::create([

            'locker_id' => $this->locker_id,
            'name' => $this->name,
            'department_id' => $this->department_id,
            'period' => $this->period,
            'start' => $this->start,
            'end' => $this->end,
            'fees' => $this->fees,
            'tel_no' => $this->tel_no,
            'email' => $this->email,

        ]);

        $this->reset();


        $this->dispatchBrowserEvent('hide-add');
        $this->alert('success', 'Berjaya!');


    }

    public function countFee()
    {
        $this->fees = $this->period * 15;
    }

}
