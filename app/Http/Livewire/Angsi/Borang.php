<?php

namespace App\Http\Livewire\Angsi;

use Livewire\Component;
use App\Models\Department;
use App\Models\Angsi;



class Borang extends Component
{
    public $nama, $kp, $tel, $emel, $department_id,$nama_waris, $tel_waris, $pengangkutan, $penyakit, $jenis_penyakit, $departments;
    public $isOpen = true, $isClosed = false, $isAccepted = false, $kouta = 40;

    public function render()
    {
        $this->departments = Department::orderby('name')->get();

        //check qouta
        $total = Angsi::count();

        if($total >= $this->kouta)
        {
            $this->isOpen = false;

        }

        // dd($departments);

        return view('livewire.angsi.borang')->extends('layouts.master-without-nav');
    }

    public function store()
    {

        $total = Angsi::count();

        if($total >= $this->kouta)
        {
            abort(503);
        }




    }
}
