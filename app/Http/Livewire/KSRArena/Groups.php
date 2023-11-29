<?php

namespace App\Http\Livewire\KSRArena;

use Livewire\Component;
use App\Models\Group;
use App\Models\Department;
use App\Models\Team;

class Groups extends Component
{
    public $name, $order, $team_id, $sport, $data_id;

    public function render()
    {
        $teams = Team::orderby('sport')->get();

        $netball = Group::whereSport('Bola Jaring')->get();

        $A = Group::whereSport('Bola Tampar')->whereName('A')->orderby('order')->get();
        $B = Group::whereSport('Bola Tampar')->whereName('B')->orderby('order')->get();
        $C = Group::whereSport('Bola Tampar')->whereName('C')->orderby('order')->get();
        $D = Group::whereSport('Bola Tampar')->whereName('D')->orderby('order')->get();

    

        return view('livewire.k-s-r-arena.groups', compact('teams','netball','A','B','C','D'))->extends('layouts.master');
    }

    public function store()
    {
        $store = Group::updateOrCreate(['id' => $this->data_id], 
        [
            'name' => $this->name,
            'order' => $this->order,
            'team_id' => $this->team_id,
            'sport' => $this->sport
        ]);

        $this->reset();
    }

    public function edit($id)
    {
        $this->data_id = $id;

        $data = Group::find($id);

        $this->name = $data->name;
        $this->order = $data->order;
        $this->team_id = $data->team_id;
        $this->sport = $data->sport;
    }
}
