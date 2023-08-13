<?php

namespace App\Http\Livewire\Patriotik;

use Livewire\Component;
use App\Models\Patriotik;


class Keputusan extends Component
{
    public $video, $data_id;

    public function render()
    {
        $results = Patriotik::whereExtra3('Layak')->get();

        return view('livewire.patriotik.keputusan', compact('results'))->extends('layouts.master');
    }

    public function upload($id)
    {
        $result = Patriotik::find($id);

        $this->data_id = $id;
        $this->video = $result->extra2;
        
        $this->dispatchBrowserEvent('show-upload-modal');


    }
}
