<?php

namespace App\Http\Livewire\Member;

use Livewire\Component;
use App\Models\Department;
use App\Models\Member;
use Illuminate\Support\Facades\Cache;


class Semakan extends Component
{
    public $search;

    public function render()
    {

        if($this->search != "") {
            // $seconds = 60;
            // $results = Cache::remember('results', $seconds, function () {
            //     return Member::when($this->search, function($query){
            //         $query->where('name', 'LIKE', '%'. $this->search . '%')
            //               ->orWhere('email', 'LIKE' , '%'. $this->search . '%');
            //     })
            //     ->with(['payment' => fn($q) => $q->where('year', '2023')])
            //     ->where('active','1')
            //     ->orderby('name')->get();
            // });
            $results = Member::when($this->search, function($query){
                $query->where('name', 'LIKE', '%'. $this->search . '%')
                      ->orWhere('email', 'LIKE' , '%'. $this->search . '%');
            })
            ->with(['payment' => fn($q) => $q->where('year', '2024')])
            ->where('active','1')
            ->orderby('name')->get();
        } else {
            $results = [];
        }
      

        return view('livewire.member.semakan',compact('results'))->extends('layouts.master-without-nav');
    }

   
}
