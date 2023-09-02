<?php

namespace App\Http\Livewire\Locker;

use Livewire\Component;
use App\Models\Locker;


class Index extends Component
{
    public function render()
    {
        $lockers = Locker::all();

        return view('livewire.locker.index',compact('lockers'))->extends('layouts.master');
    }

    public function generate()
    {
        // for(i=1;)
        for($i=48;$i<=88;$i++)
        {
            $locker = Locker::create([
                'locker_no' => $i,
                'gender' => 'P',
                'status' => 'OK',
                'rate' => 15
            ]);
        }

    }
}
