<?php

namespace App\Http\Livewire\KSRArena;

use Livewire\Component;
use App\Models\Department;
use App\Models\KSRArena;


class Borang extends Component
{

    public $departments, $department_id, $nama_pengurus, $no_tel, $volleyball, $netball, $borang_penyertaan, $jumlah_bayaran, $resit_bayaran;

    public function render()
    {

        $this->departments = Department::orderby('name')->get();

        return view('livewire.k-s-r-arena.borang')->extends('layouts.master-without-nav');
    }
}
