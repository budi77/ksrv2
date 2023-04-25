<?php

namespace App\Http\Livewire\Settings\Edit;

use Livewire\Component;

use App\Models\Fee;
use App\Models\Member;

class Payments extends Component
{
    public $records, $data_id, $payment, $value, $payment_date;

    protected $listeners = ['showPayments'];

    public function showPayments($id) 
    {

        $this->data_id = $id;

        $this->records = Fee::with('member')->where('member_id',$id)->get();
              
    }

    public function render()
    {
        return view('livewire.settings.edit.payments');
    }

    public function delete($id)
    {

        // dd($id);
        $delete = Fee::find($id)->delete();

        $this->emitSelf('showPayments', $this->data_id );

    }

    public function edit($id)
    {

        // $this->payment = 
        // $this->member = Member::find($id);



        $this->dispatchBrowserEvent('show-edit');


    }
}
