<?php

namespace App\Http\Livewire\Settings\Edit;

use Livewire\Component;

use App\Models\Fee;

class Payments extends Component
{
    public $records;

    protected $listeners = ['showPayments'];

    public function showPayments($id) 
    {
        $this->records = Fee::with('member')->where('member_id',$id)->get();
              
    }

    public function render()
    {
        return view('livewire.settings.edit.payments');
    }
}
