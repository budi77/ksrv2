<?php

namespace App\Http\Livewire\Pancing;

use Livewire\Component;
use App\Models\Department;
use App\Models\Pancing;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;

class Borang extends Component
{

    use LivewireAlert;
    use WithFileUploads;

    public $departments, $nama,$nokp, $jantina, $bahagian, $ahli, $no_tel, $tarikh, $jumlah_bayaran, $lampiran ;
    public bool $checked = false;
    public bool $disabled = true;

    public function render()
    {

        $this->departments = Department::orderby('name')->get();

        return view('livewire.pancing.borang')->extends('layouts.master-without-nav');
    }

    public function processMark()
    {
        if ($this->checked) {
            $this->disabled = false;
        } else {
            $this->disabled = true;

        }

    }

    
}
