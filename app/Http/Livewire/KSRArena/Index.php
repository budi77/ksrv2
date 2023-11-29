<?php

namespace App\Http\Livewire\KSRArena;

use Livewire\Component;
use App\Models\KsrArena;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Index extends Component
{

    use LivewireAlert;

    protected $listeners = [
        'confirmed'
    ];

    public function render()
    {

        $results = KsrArena::latest()->get();

        return view('livewire.k-s-r-arena.index', compact('results'))->extends('layouts.master');
    }

    public function delete($id)
    {

     KsrArena::find($id)->delete();
        $this->alert('success', 'Deleted!');

        // $this->reset('data_id');
  
        // $this->data_id = $id;

        // $this->alert('warning', 'Are you sure want to delete?', [
        //     'timer' => 8000,
        //     'showConfirmButton' => true,
        //     'denyButtonText' => 'Deny',
        //     'showCancelButton' => true,
        //     'cancelButtonText' => 'Cancel',
        //     'onConfirmed' => 'confirmed' ,
        //     'confirmButtonColor' => '#ff0000'
        // ]);
        
        // $this->confirm('Are you sure do want to delete?', [
        //     'confirmButtonText' => 'Ya',
        //     'cancelButtonText' => 'Batal',

        //     'onConfirmed' => 'confirmed',
        // ]);
    }

    public function confirmed()
    {
        KsrArena::find($this->data_id)->delete();
        $this->alert('success', 'Deleted!');

        $this->reset('data_id');
    }
}
