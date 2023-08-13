<?php

namespace App\Http\Livewire\Patriotik;

use Livewire\Component;

use App\Models\Patriotik;
use Livewire\WithFileUploads;


class Application extends Component
{
    use WithFileUploads;


    public $video, $data_id, $nama, $bahagian, $lagu, $saringan;


    public function render()
    {
        $results = Patriotik::all();

        // dd($results);

        return view('livewire.patriotik.application', compact('results'))->extends('layouts.master');
    }

    public function delete($id)
    {
        // dd('test');
        $delete = Patriotik::find($id)->delete();
    }

    public function upload($id)
    {
        $result = Patriotik::find($id);

        // dd($result);

        $this->data_id = $id;
        // $this->video = $result->extra2;
        $this->nama = $result->nama;
        $this->bahagian = $result->department->nama;
        $this->lagu = $result->tajuk_lagu;
        $this->video = $result->extra2;

        
        $this->dispatchBrowserEvent('show-upload-modal');


    }

    public function saringan($id)
    {
        $result = Patriotik::find($id);

        // dd($result);

        $this->data_id = $id;
        // $this->video = $result->extra2;
        $this->nama = $result->nama;
        $this->bahagian = $result->department->nama;
        $this->lagu = $result->tajuk_lagu;
        $this->saringan = $result->extra3;

        
        $this->dispatchBrowserEvent('show-saringan-modal');


    }

    public function store_saringan()
    {
        // $result = Patriotik::find($id);

        // dd($this->saringan);

        $save = Patriotik::find($this->data_id)->update([
            'extra3' => $this->saringan
        ]);
        
        $this->dispatchBrowserEvent('close-saringan-modal');


    }

    public function store_video()
    {

        // dd($this->video);
        // $name = time().'_'.$this->video->getClientOriginalName();
// 
        // $this->video->storeAs('public', $name);

        $save = Patriotik::find($this->data_id)->update([
            'extra2' => $this->video
        ]);


        $this->dispatchBrowserEvent('close-upload-modal');


    }
}
