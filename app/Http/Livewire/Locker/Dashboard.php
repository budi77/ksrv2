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
    public $membership, $member = 10, $non_member = 15, $data_id;

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


    public function edit($id)
    {

        // dd($id);
        // $tenant = LockerTenant::whereId($id)->first();

        $data = LockerTenant::whereLockerId($id)->first();

        $this->name = $data->name;

        $this->department_id = $data->department_id;
        $this->period = $data->period;
        $this->start = $data->start;
        $this->end = $data->end;
        $this->fees = $data->fees;
        $this->tel_no = $data->tel_no;
        $this->email = $data->email;
        $this->membership = $data->extra1;
        $this->locker_id = $id;

        $this->data_id = $id;

       
        $this->dispatchBrowserEvent('show-add');

    }

    public function store()
    {

        $this->end = Carbon::parse($this->start)->addMonths($this->period);
        // dd($this->department_id);

        $store = LockerTenant::updateOrCreate(['id' => $this->data_id],[

            'locker_id' => $this->locker_id,
            'name' => $this->name,
            'department_id' => $this->department_id,
            'period' => $this->period,
            'start' => $this->start,
            'end' => $this->end,
            'fees' => $this->fees,
            'tel_no' => $this->tel_no,
            'email' => $this->email,
            'extra1' => $this->membership,

        ]);

        $this->reset();


        $this->dispatchBrowserEvent('hide-add');
        $this->alert('success', 'Berjaya!');


    }

    public function countFee()
    {
        if ($this->membership == 'Ahli'){
            $this->fees = $this->period * $this->member;
        }else{
            $this->fees = $this->period * $this->non_member;

        }
    }

}
