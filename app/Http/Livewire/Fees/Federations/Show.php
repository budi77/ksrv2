<?php

namespace App\Http\Livewire\Fees\Federations;

use Livewire\Component;
use App\Models\Department;
use Carbon\Carbon;
// use App\Models\Member;
use App\Models\FederationFee;
use Auth;

class Show extends Component
{
    public $department_id, $department_name, $member_total, $paid, $unpaid, $year, $sum, $balance;
    public $federation_id, $payment_date, $payment_year, $value = '100', $mode, $member, $search1, $search2;
    public $member_list, $search_federation, $tot_members, $tot_paid, $tot_unpaid, $tot_sum, $currYear, $federation;

    public function mount()
    {

        $this->year =  Carbon::now()->format('Y');

    }

    public function render()
    {
        // $this->curryear =  Carbon::now()->format('Y');

        $this->tot_members = Department::whereExtra('Gabungan')->count();

        $this->tot_paid = FederationFee::where('year', $this->year )->groupBy('federation_id')->count();

        $this->tot_sum = FederationFee::where('year', $this->year )->sum('value');

        $results = Department::withSum(['paymentsFederation' => fn ($q) => $q->where('year', $this->year)],'value')->when($this->search_federation, function ($query) {
            $query->where('name', 'LIKE', '%'. $this->search_federation . '%');
        })
        ->whereExtra('Gabungan')
        ->orderby('name')
        ->get();

        // dd($results);

        return view('livewire.fees.federations.show', compact('results'))->extends('layouts.master');
    }

    public function edit($id)
    {
        $this->federation = Department::find($id);
        $this->balance = FederationFee::where('federation_id', $id)->where('year', $this->year)->sum('value');


        $this->dispatchBrowserEvent('show-edit');

    }

    public function store()
    {

        $store = FederationFee::create([
            'federation_id' => $this->federation->id,
            'year' => $this->year,
            'value' => $this->value,
            'payment_date' => $this->payment_date,
            'user_id' => Auth::id(),

        ]);

        $this->reset(['federation','value','payment_date']);

        $this->dispatchBrowserEvent('hide-edit');



    }
}
