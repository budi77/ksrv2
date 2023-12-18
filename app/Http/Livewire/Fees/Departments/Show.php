<?php

namespace App\Http\Livewire\Fees\Departments;

use Livewire\Component;
use App\Models\Department;
use Carbon\Carbon;
use App\Models\Member;
use App\Models\Fee;
use Auth;

class Show extends Component
{
    public $department_id, $department_name, $member_total, $paid, $unpaid, $year, $sum;
    public $member_id, $payment_date, $payment_year, $value = '24', $mode, $member, $search1, $search2;
    public $member_list, $search_member, $tot_members, $tot_paid, $tot_unpaid, $tot_sum, $balance;

    public function mount(Department $department)
    {

        $this->department_id = $department->id;

        $this->department_name = $department->name;

        $this->year =  Carbon::now()->format('Y');


        // dd($this->department_id);
    }

    public function render()
    {

        
        $this->tot_members = Member::where('department_id', $this->department_id)->whereActive('1')->count();

        $this->tot_paid = Fee::with('member')->where('year', $this->year )
        ->where('department_id', $this->department_id)
        ->count();

        $this->tot_sum = Fee::with('member')->where('year', $this->year )
        ->where('department_id', $this->department_id)
        ->sum('value');

        $results = Member::withSum(['payments' => fn ($q) => $q->where('year', $this->year)] ,'value')->when($this->search_member, function($query){
            $query->where('name', 'LIKE', '%'. $this->search_member . '%')
                  ->orWhere('email', 'LIKE' , '%'. $this->search_member . '%');
        })
        ->where('department_id', $this->department_id)
        ->whereActive('1')
        ->orderby('name')
        ->get();
        

        // dd($results);

        return view('livewire.fees.departments.show', compact('results'))->extends('layouts.master');
    }

    public function edit($id)
    {
        $this->member = Member::find($id);

        // dd($this->member);
        $this->balance = Fee::where('member_id', $id)->where('year', $this->year)->sum('value');

        // dd($this->balance);


        $this->dispatchBrowserEvent('show-edit');


    }

    public function store()
    {
        
        $store = Fee::create([
            'member_id' => $this->member->id,
            'department_id' => $this->department_id,
            'year' => $this->year,
            'value' => $this->value,
            // 'mode' => $this->mode,
            'payment_date' => $this->payment_date,
            'user_id' => Auth::id(),

        ]);

        $this->reset(['member_id','member','value','payment_date','mode']);

        $this->dispatchBrowserEvent('hide-edit');



    }

    public function list($id)
    {

       
        $this->member_list = Member::with('payments','bahagian:id,name')->whereId($id)->first();
       
        $this->dispatchBrowserEvent('show-list');

    }

}
