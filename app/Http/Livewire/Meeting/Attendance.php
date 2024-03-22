<?php

namespace App\Http\Livewire\Meeting;

use Livewire\Component;
use App\Models\Meeting;

class Attendance extends Component
{

    public function render()
    {
        $results = Meeting::with('member')->orderby('created_at', 'DESC')->get();

        return view('livewire.meeting.attendance', compact('results'));
    }
}
