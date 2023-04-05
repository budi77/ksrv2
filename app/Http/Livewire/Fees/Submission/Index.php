<?php

namespace App\Http\Livewire\Fees\Submission;

use Livewire\Component;
use App\Models\Department;
use Livewire\WithFileUploads;
use App\Models\FeeSubmission;
use Auth;

class Index extends Component
{
    use WithFileUploads;

    public $departments, $department, $mode, $type, $year, $document, $remarks, $total, $data_id, $department_id;

    public function mount()
    {

        $this->departments = Department::orderby('name')->get();

    }
    public function render()
    {
        $results = FeeSubmission::with(['user:id,name','approver', 'department'])->orderby('created_at', 'desc')->get();
        
        return view('livewire.fees.submission.index', compact('results'))->extends('layouts.master');
    }

    public function showModal()
    {
        // dd('1');
        $this->dispatchBrowserEvent('show-modal');

    }

    public function store()
    {
        

        $store = FeeSubmission::updateOrCreate(['id' =>  $this->data_id],
        [
            'department_id' => $this->department,
            'user_id' => Auth::id(),
            'type' => $this->type,
            'mode' => $this->mode,
            'year' => $this->year,
            'total' => $this->total,
            'remarks'   => $this->remarks
        ]);

        if($this->document)
        {
            $filename = $this->document->getClientOriginalName();

            $this->document->storeAs('documents', 'public');

            FeeSubmission::find($store->id)->update([
                'extra1' => $filename
            ]);

        }

        $this->reset(['department','type','mode','year','total','remarks','document']);

        $this->dispatchBrowserEvent('hide-modal');

    }

    public function edit($id)
    {
        
        // dd($id);
        $this->data_id = $id;

        $data = FeeSubmission::find($id);

        // dd($data->department_id);
        $this->department_id = $data->department_id;
        $this->type = $data->type;
        $this->year = $data->year;
        $this->total = $data->total;
        $this->mode = $data->mode;
        $this->remarks = $data->remarks;
        

        $this->dispatchBrowserEvent('show-modal');


    }

}
