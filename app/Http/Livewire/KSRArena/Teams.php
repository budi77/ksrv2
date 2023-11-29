<?php

namespace App\Http\Livewire\KSRArena;

use Livewire\Component;
use App\Models\Team;
use App\Models\Department;


class Teams extends Component
{
    public $departments, $name, $sport, $department_id, $data_id;

    public function render()
    {
        $this->departments = Department::orderby('name')->get();

        $netball = Team::whereSport('Bola Jaring')->get();
        $volleyball = Team::whereSport('Bola Tampar')->get();

        return view('livewire.k-s-r-arena.teams', compact(['netball','volleyball']))->extends('layouts.master');
    }

    public function store()
    {
        $store = Team::updateOrCreate(['id' => $this->data_id], 
        [
            'name' => $this->name,
            'department_id' => $this->department_id,
            'sport' => $this->sport
        ]);

        $this->reset();
    }

    public function edit($id)
    {
        $this->data_id = $id;

        $data = Team::find($id);

        $this->name = $data->name;
        $this->department_id = $data->department_id;
        $this->sport = $data->sport;
    }


}
