<?php

namespace App\Http\Livewire\Settings\Edit;

use Livewire\Component;
use App\Models\Department;
use App\Models\Member;
use Livewire\WithPagination;

class Members extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;

    public function render()
    {
        
        $results = Member::when($this->search, function($query){
            $query->where('name', 'LIKE', '%'. $this->search . '%')
                  ->orWhere('ic_no', 'LIKE' , '%'. $this->search . '%');
        })
        ->orderby('name')->paginate(20);

        return view('livewire.settings.edit.members', compact('results'));
    }

    public function show($id)
    {
        $this->emit('showPayments', $id);

    }
}
