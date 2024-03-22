<?php

namespace App\Http\Livewire\Meeting;

use Livewire\Component;
use App\Models\Department;
use App\Models\Member;
use App\Models\Meeting;
// use Jantinnerezo\LivewireAlert\LivewireAlert;

class Register extends Component
{
    // use LivewireAlert;

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
            ->with(['payment' => fn($q) => $q->where('year', '2023')])
            ->where('active','1')
            ->orderby('name')->get();
        } else {
            $results = [];
        }
        return view('livewire.meeting.register',compact('results'));
    }

    public function register($id)
    {
        $save = Meeting::firstOrCreate([
            'member_id' => $id,
        ]);

        // $this->alert('success', 'Pendaftaran Berjaya!');

        session()->flash('message', 'Pendaftaran Berjaya!');



        $this->reset();

    }
}
