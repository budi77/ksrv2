<?php

namespace App\Http\Livewire\Member;

use Livewire\Component;
use App\Models\Department;
use App\Models\Member;

class Semakan extends Component
{
    public $search;

    public function render()
    {

        if($this->search != "") {
            $results = Member::when($this->search, function($query){
                $query->where('name', 'LIKE', '%'. $this->search . '%')
                      ->orWhere('email', 'LIKE' , '%'. $this->search . '%');
            })
            ->with(['payment' => fn($q) => $q->where('year', '2023')])
            ->where('active','1')
            ->orderby('name')->get();
        } else {
            $results = [];
        }
      

        return view('livewire.member.semakan',compact('results'))->extends('layouts.master-without-nav');
    }
}
