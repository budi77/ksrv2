<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Fee;
use Carbon\Carbon;

class Stat extends Component
{
    public $year, $result;

    public function mount()
    {
        $this->year =  Carbon::now()->format('Y');

    }
    public function render()
    {
        $this->result = Fee::where('year',$this->year)->sum('value');

        // dd($this->result);
        return view('livewire.dashboard.stat');
    }
}
