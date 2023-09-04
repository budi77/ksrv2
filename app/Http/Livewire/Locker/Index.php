<?php

namespace App\Http\Livewire\Locker;

use Livewire\Component;
use App\Models\Locker;
use App\Models\Department;
use App\Models\LockerTenant;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class Index extends Component
{
    use LivewireAlert;

    public $locker_info, $locker_id, $name = '', $department_id, $period, $start, $end, $fees = 0, $tel_no, $email, $departments, $total_fee;
    public $locker_no, $gender, $status, $rate;

    public function mount()
    {

        // dd($this->departments);
    }


    public function render()
    {
        $lockers = Locker::with('tenant')->get();
        $this->departments = Department::orderby('name')->get();


        // dd($lockers);

        return view('livewire.locker.index',compact('lockers'))->extends('layouts.master');
    }

    public function generate()
    {
        // for(i=1;)
        for($i=48;$i<=81;$i++)
        {
            $locker = Locker::create([
                'locker_no' => $i,
                'gender' => 'P',
                'status' => 'OK',
                'rate' => 15
            ]);
        }

    }

    public function add($id)
    {

        
        $tenant = LockerTenant::whereId($id)->first();

        $this->locker_info = Locker::whereId($tenant->locker_id)->first();

        $this->locker_id = $id;

        // dd($tenant->name);

        $this->name = $tenant->name ? $tenant->name : '';
        $this->tel_no = $tenant->tel_no;
        $this->email = $tenant->email;
        $this->department_id = $tenant->department_id;
        $this->start = $tenant->start;
        $this->period = $tenant->period;
        $this->fees = $tenant->fees;



        $this->dispatchBrowserEvent('show-add');

    }

    public function countFee()
    {
        $this->fees = $this->period * 15;
    }

    public function store()
    {

        $this->end = Carbon::parse($this->start)->addMonths($this->period);
        // dd($this->department_id);

        $store = LockerTenant::find($this->locker_id)->update([

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

    public function edit($id)
    {

        $this->locker_id = $id;
        
        $locker = Locker::whereId($id)->first();

        $this->locker_no = $locker->locker_no;
        $this->gender = $locker->gender;
        $this->status = $locker->status;
        $this->rate = $locker->rate;

        // dd($this->locker);


        $this->dispatchBrowserEvent('show-edit');

    }

    public function update()
    {
        $update = Locker::find($this->locker_id)->update([
            'locker_no' => $this->locker_no,
            'gender' => $this->gender,
            'status' => $this->status,
            'rate' => $this->rate
        ]);

        $this->dispatchBrowserEvent('hide-edit');
        $this->alert('success', 'Berjaya!');


    }
}
