<?php

namespace App\Http\Livewire\Settings;
use App\Models\Department;

use Livewire\Component;

class Departments extends Component
{
    public $department_id, $name, $short, $category;

    public function render()
    {
        $results = Department::orderby('name')->get();

        return view('livewire.settings.departments', compact('results'));
    }

    public function store()
    {

        $store = Department::updateOrCreate(['id' => $this->department_id], 
        [
            'name' => $this->name,
            'short' => $this->short,
            'extra' => $this->category
        ]);

        $this->reset(['name','short', 'department_id','category']);

    }

    public function edit($id)
    {

        $result = Department::find($id);

        $this->department_id = $result->id;
        $this->name = $result->name;
        $this->short = $result->short;
        $this->category = $result->extra;

    }

    public function cancel()
    {
        $this->reset(['name','short', 'department_id','category']);
    }

}
